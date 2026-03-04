<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/pft-website/includes/config.php';

if (!isset($_SESSION['customer_logged_in'])) {
    header("Location: login.php");
    exit;
}
?>

<h1>Welcome, <?= htmlspecialchars($_SESSION['customer_name']); ?></h1>

<p>You are logged in.</p>

<a href="logout.php">Logout</a>