<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/pft-website/includes/config.php';

// Protect page
if (!isset($_SESSION['customer_logged_in'])) {
    header("Location: login.php");
    exit();
}

// Prevent session hijacking
if ($_SESSION['user_agent'] !== $_SERVER['HTTP_USER_AGENT']) {
    session_destroy();
    header("Location: login.php");
    exit();
}

include BASE_PATH . 'includes/header.php';
?>

<section class="py-20 text-center bg-black text-white min-h-screen">

<h2 class="text-4xl font-bold mb-6">Shipment Tracking</h2>

<form method="POST" class="flex flex-col md:flex-row justify-center gap-4">

  <input name="tracking_number"
         placeholder="Enter Load / Tracking Number"
         required
         class="border p-4 w-96 max-w-full rounded text-black">

  <button class="bg-red-600 text-white px-6 py-4 rounded hover:bg-red-700 transition">
    Track
  </button>

</form>

</section>

<?php include BASE_PATH . 'includes/footer.php'; ?>