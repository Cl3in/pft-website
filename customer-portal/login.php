<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/pft-website/includes/config.php';

if (isset($_SESSION['customer_logged_in'])) {
    header("Location: dashboard.php");
    exit();
}

/* ===============================
   🔒 SECURITY SETTINGS
================================= */

$max_attempts = 5;
$lock_time = 300; // 5 minutes
$error = '';

// Initialize session counters
if (!isset($_SESSION['login_attempts'])) {
    $_SESSION['login_attempts'] = 0;
}

if (!isset($_SESSION['lock_time'])) {
    $_SESSION['lock_time'] = 0;
}

/* ===============================
   ⛔ BLOCK IF LOCKED
================================= */

if ($_SESSION['login_attempts'] >= $max_attempts) {
    if (time() - $_SESSION['lock_time'] < $lock_time) {
        $remaining = $lock_time - (time() - $_SESSION['lock_time']);
        $error = "Too many failed attempts. Try again in " . ceil($remaining/60) . " minute(s).";
    } else {
        $_SESSION['login_attempts'] = 0;
    }
}

/* ===============================
   🔐 CSRF TOKEN
================================= */

if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

/* ===============================
   🚀 HANDLE LOGIN
================================= */

if ($_SERVER['REQUEST_METHOD'] === 'POST' && empty($error)) {

    // CSRF Check
    if (!hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'] ?? '')) {
        die("Invalid CSRF token.");
    }

    // Honeypot (Bot trap)
    if (!empty($_POST['website'])) {
        die("Bot detected.");
    }

    $email = trim($_POST['email'] ?? '');
    $password = trim($_POST['password'] ?? '');

    // Server-side validation
    if (
        strlen($email) > 100 ||
        strlen($password) > 50 ||
        !filter_var($email, FILTER_VALIDATE_EMAIL) ||
        !preg_match('/^[a-zA-Z0-9@#$_\-!]+$/', $password)
    ) {
        $error = "Invalid input.";
    }
    else {

        // Demo credentials
        if ($email === "customer@pft.com" && $password === "pft123") {

            session_regenerate_id(true);

            $_SESSION['customer_logged_in'] = true;
            $_SESSION['customer_email'] = $email;
            $_SESSION['user_agent'] = $_SERVER['HTTP_USER_AGENT'];

            $_SESSION['login_attempts'] = 0;

            header("Location: dashboard.php");
            exit();
        } else {

            $_SESSION['login_attempts']++;

            if ($_SESSION['login_attempts'] >= $max_attempts) {
                $_SESSION['lock_time'] = time();
            }

            $error = "Invalid email or password.";
        }
    }
}

include BASE_PATH . 'includes/header.php';
?>

<section class="min-h-screen flex items-center justify-center bg-black text-white px-6">

<form method="POST"
      class="bg-[#1a1a1a] p-10 rounded-2xl w-full max-w-md space-y-6 shadow-xl"
      autocomplete="off">

    <h2 class="text-3xl font-bold text-center">Customer Portal Login</h2>

    <?php if (!empty($error)): ?>
        <div class="bg-red-600 text-white p-3 rounded text-center">
            <?= htmlspecialchars($error); ?>
        </div>
    <?php endif; ?>

    <!-- CSRF TOKEN -->
    <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token']; ?>">

    <!-- Honeypot Field (Hidden from humans) -->
    <input type="text" name="website" style="display:none">

    <!-- EMAIL -->
    <input type="email"
           name="email"
           required
           maxlength="100"
           onpaste="return false;"
           placeholder="Email"
           class="w-full p-4 rounded bg-black border border-gray-700">

    <!-- PASSWORD -->
    <input type="password"
           name="password"
           required
           maxlength="50"
           pattern="[A-Za-z0-9@#$_\-!]+"
           onpaste="return false;"
           placeholder="Password"
           class="w-full p-4 rounded bg-black border border-gray-700">

    <button type="submit"
            class="w-full bg-red-600 py-4 rounded font-semibold hover:bg-red-700 transition">
        Login
    </button>

</form>

</section>

<script>
document.querySelectorAll("input").forEach(input => {
    input.addEventListener("paste", e => e.preventDefault());
});
</script>

<?php include BASE_PATH . 'includes/footer.php'; ?>

<section class="login-section">

    <div class="login-card">

        <h2>Login Form</h2>

        <?php if (!empty($error)): ?>
            <div class="error-box">
                <?= htmlspecialchars($error); ?>
            </div>
        <?php endif; ?>

        <form method="POST" autocomplete="off">

            <!-- CSRF -->
            <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token']; ?>">

            <!-- Email -->
            <div class="input-group">
                <input type="email" name="email" required maxlength="100">
                <label>Enter your email</label>
            </div>

            <!-- Password -->
            <div class="input-group">
                <input type="password" name="password" required maxlength="50">
                <label>Enter your password</label>
            </div>

            <!-- Options -->
            <div class="options">
                <label>
                    <input type="checkbox" name="remember">
                    Remember me
                </label>
                <a href="forgot-password.php">Forgot password?</a>
            </div>

            <!-- Button -->
            <button type="submit">Log In</button>

            <p class="register-text">
                Don't have an account?
                <a href="register.php">Register</a>
            </p>

        </form>
    </div>
</section>