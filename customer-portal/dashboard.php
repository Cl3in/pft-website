<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/pft-website/includes/config.php';

// ============================
// 🔐 Protect Page
// ============================

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

  <h2 class="text-4xl font-bold mb-4">Customer Dashboard</h2>

  <p class="text-gray-400 mb-10">
    Welcome,
    <span class="text-red-500 font-semibold">
      <?= htmlspecialchars($_SESSION['customer_email']); ?>
    </span>
  </p>

  <div class="flex flex-col sm:flex-row gap-6">

    <a href="tracking.php"
       class="bg-red-600 px-8 py-4 rounded-lg font-semibold hover:bg-red-700 transition shadow-lg">
       🚛 Track a Shipment
    </a>

    <a href="logout.php"
       class="border border-gray-600 px-8 py-4 rounded-lg text-gray-300 hover:bg-gray-800 transition">
       Logout
    </a>

  </div>

</section>

<?php include BASE_PATH . 'includes/footer.php'; ?>