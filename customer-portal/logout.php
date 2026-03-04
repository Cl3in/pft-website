<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/pft-website/includes/config.php';

// Destroy all session data safely
$_SESSION = [];
session_unset();
session_destroy();

// Remove session cookie
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(
        session_name(),
        '',
        time() - 42000,
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]
    );
}

// Redirect to login
header("Location: login.php");
exit();