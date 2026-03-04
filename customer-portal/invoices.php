<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/pft-website/includes/config.php';

// protect page
if (
    !isset($_SESSION['customer_logged_in']) ||
    $_SESSION['customer_logged_in'] !== true ||
    !isset($_SESSION['user_agent']) ||
    $_SESSION['user_agent'] !== $_SERVER['HTTP_USER_AGENT']
) {
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit();
}

include BASE_PATH . 'includes/header.php';
?>

<section class="py-24 bg-black text-white min-h-screen flex flex-col items-center justify-center text-center px-6">
    <h2 class="text-4xl font-bold mb-4">Invoices</h2>
    <p>Coming soon: customers will be able to download and view their invoices here.</p>
    <a href="dashboard.php" class="mt-6 text-gray-300 hover:underline">← Back to Dashboard</a>
</section>

<?php include BASE_PATH . 'includes/footer.php';
