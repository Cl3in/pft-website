<?php
include '../includes/config.php';
include '../includes/functions.php';

if($_SERVER['REQUEST_METHOD']=='POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Placeholder authentication
    if($username=='admin' && $password=='password'){
        $_SESSION['user'] = $username;
        $_SESSION['role'] = ADMIN_ROLE;
        header('Location: dashboard.php');
        exit;
    } else {
        $error = "Invalid credentials";
    }
}
include '../includes/header.php';
?>
<section class="login">
<h1>Employee Login</h1>
<?php if(isset($error)) echo "<p>$error</p>"; ?>
<form method="post">
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
</form>
</section>
<?php include '../includes/footer.php'; ?>