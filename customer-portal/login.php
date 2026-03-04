<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/pft-website/includes/config.php';

if (isset($_SESSION['customer_logged_in'])) {
    header("Location: dashboard.php");
    exit;
}

$error = '';
$max_attempts = 5;
$lock_time = 300;

$_SESSION['login_attempts'] = $_SESSION['login_attempts'] ?? 0;
$_SESSION['lock_time'] = $_SESSION['lock_time'] ?? 0;

// Lockout
if ($_SESSION['login_attempts'] >= $max_attempts) {
    if (time() - $_SESSION['lock_time'] < $lock_time) {
        $remaining = $lock_time - (time() - $_SESSION['lock_time']);
        $error = "Too many attempts. Try again in " . ceil($remaining/60) . " minute(s).";
    } else {
        $_SESSION['login_attempts'] = 0;
    }
}

// CSRF
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && empty($error)) {

    if (!hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'] ?? '')) {
        die("Invalid CSRF token.");
    }

    $email = strtolower(trim($_POST['email'] ?? ''));
    $password = $_POST['password'] ?? '';

    $demo_email = "admin@pft.com";
    $demo_password_hash = '$2y$10$wH3mCwskn.1mY4zj8yJxY.1r2gDjO9tQkYfD4Y5R6xT7uV8wXyZ12'; // 123456

    if ($email === $demo_email && password_verify($password, $demo_password_hash)) {

        session_regenerate_id(true);

        $_SESSION['customer_logged_in'] = true;
        $_SESSION['customer_id'] = 1;
        $_SESSION['customer_email'] = $demo_email;
        $_SESSION['customer_name'] = "Demo Customer";

        $_SESSION['login_attempts'] = 0;

        header("Location: dashboard.php");
        exit;

    } else {

        $_SESSION['login_attempts']++;

        if ($_SESSION['login_attempts'] >= $max_attempts) {
            $_SESSION['lock_time'] = time();
        }

        $error = "Invalid email or password.";
    }
}

include BASE_PATH . 'includes/header.php';
?>

<section class="min-h-screen flex items-center justify-center bg-black text-white px-6">

<form method="POST" class="bg-[#1a1a1a] p-10 rounded-2xl w-full max-w-md space-y-6 shadow-xl">

    <h2 class="text-3xl font-bold text-center">Customer Portal Login</h2>

    <?php if (!empty($error)): ?>
        <div class="bg-red-600 text-white p-3 rounded text-center">
            <?= htmlspecialchars($error); ?>
        </div>
    <?php endif; ?>

    <?php if (isset($_GET['logout'])): ?>
        <div class="bg-green-600 text-white p-3 rounded text-center">
            Logged out successfully.
        </div>
    <?php endif; ?>

    <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($_SESSION['csrf_token']); ?>">

    <input type="email" name="email" required placeholder="Email"
           class="w-full p-4 rounded bg-black border border-gray-700">

    <input type="password" name="password" required placeholder="Password"
           class="w-full p-4 rounded bg-black border border-gray-700">

    <button type="submit"
            class="w-full bg-red-600 py-4 rounded font-semibold hover:bg-red-700 transition">
        Login
    </button>

</form>

</section>

<?php include BASE_PATH . 'includes/footer.php'; ?>