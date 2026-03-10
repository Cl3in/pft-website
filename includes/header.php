<?php require_once __DIR__ . '/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<title><?= SITE_NAME ?> | Reliable Nationwide Freight Solutions</title>

<meta name="description" content="Parrish Freight Transport provides reliable nationwide freight solutions including flatbed, step deck, reefer, and oversized load transportation.">
<meta name="keywords" content="freight transport, flatbed trucking, step deck hauling, oversized load transport, logistics company">
<meta name="author" content="<?= SITE_NAME ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Open Graph -->
<meta property="og:title" content="<?= SITE_NAME ?>">
<meta property="og:description" content="Reliable nationwide freight and logistics solutions.">
<meta property="og:image" content="<?= BASE_URL ?>assets/images/flatbed1.webp">
<meta property="og:url" content="<?= BASE_URL ?>">
<meta property="og:type" content="website">

<!-- Favicon -->
<link rel="icon" type="image/png" href="<?= BASE_URL ?>assets/images/favicon.png">

<!-- Preload Hero Image -->
<link rel="preload" as="image" href="<?= BASE_URL ?>assets/images/loading.jpg">

<!-- Tailwind -->
<script src="https://cdn.tailwindcss.com"></script>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>

<!-- Main CSS -->
<link rel="stylesheet" href="<?= BASE_URL ?>assets/css/main.css">

<script>
tailwind.config = {
  theme: {
    extend: {
      colors: {
        brand: '<?= THEME_COLOR ?>'
      }
    }
  }
}
</script>

</head>

<body class="bg-[#141414] text-white">

<!-- HEADER -->
<header class="bg-[#1a1a1a] sticky top-0 z-50 border-b border-[#222]">
  <div class="max-w-7xl mx-auto px-6 py-3 flex items-center">



    <!-- RIGHT SIDE -->
    <div class="flex items-center gap-6 ml-auto">

      <!-- PHONE -->
      <a href="tel:+14236801299" class="flex items-center gap-2 hover:text-green-400 transition">
        <i class="fa-solid fa-phone text-green-500"></i>
        <span class="hidden sm:inline">1-423-680-1299</span>
      </a>

      <!-- EMAIL -->
      <a href="mailto:info@parrishft.com" class="flex items-center gap-2 hover:text-red-400 transition">
        <i class="fa-solid fa-envelope text-red-500"></i>
        <span class="hidden sm:inline">info@parrishft.com</span>
      </a>

      <!-- MOBILE MENU BUTTON -->
      <button id="menuBtn" class="text-xl text-white md:hidden ml-2">
        <i class="fa-solid fa-bars"></i>
      </button>

    </div>

  </div>
</header>

<!-- OVERLAY -->
<div id="mobileOverlay" class="fixed inset-0 bg-black/40 hidden z-40"></div>

<!-- MOBILE MENU -->
<div id="mobileMenu" class="fixed top-0 right-0 h-full w-80 bg-[#1a1a1a]/95 backdrop-blur-md shadow-2xl transform translate-x-full transition-transform duration-500 z-50">
  <div class="p-6 flex flex-col gap-6 font-semibold h-full text-gray-200">

    <!-- MENU HEADER -->
    <div class="flex justify-between border-b pb-4">
      <span class="text-lg">Menu</span>
      <button id="closeMenu"><i class="fa fa-times"></i></button>
    </div>

    <a href="<?= BASE_URL ?>" class="flex items-center gap-3 hover:text-red-500">
      <i class="fa-solid fa-house"></i> Home
    </a>

    <a href="<?= BASE_URL ?>pages/about.php" class="flex items-center gap-3 hover:text-red-500">
      <i class="fa-solid fa-building"></i> About
    </a>

    <!-- SERVICES -->
    <button id="mobileServicesBtn" class="flex justify-between items-center w-full">
      <span class="flex items-center gap-3"><i class="fa-solid fa-truck"></i> Services</span>
      <i id="mobileServicesIcon" class="fa fa-chevron-down transition-transform"></i>
    </button>

    <div id="mobileServicesMenu" class="overflow-hidden max-h-0 opacity-0 transition-all flex flex-col ml-6 gap-3">
      <a href="<?= BASE_URL ?>pages/services/flatbed.php" class="flex items-center gap-3"><i class="fa-solid fa-trailer"></i> Flatbed</a>
      <a href="<?= BASE_URL ?>pages/services/stepdeck.php" class="flex items-center gap-3"><i class="fa-solid fa-road"></i> Stepdeck</a>
      <a href="<?= BASE_URL ?>pages/services/wideload.php" class="flex items-center gap-3"><i class="fa-solid fa-arrows-left-right"></i> Wide Load</a>
      <a href="<?= BASE_URL ?>pages/services/reefer.php" class="flex items-center gap-3"><i class="fa-solid fa-snowflake"></i> Reefer</a>
    </div>

    <!-- RESOURCES -->
    <button id="mobileResourcesBtn" class="flex justify-between items-center w-full">
      <span class="flex items-center gap-3"><i class="fa-solid fa-folder-open"></i> Resources</span>
      <i id="mobileResourcesIcon" class="fa fa-chevron-down transition-transform"></i>
    </button>

    <div id="mobileResourcesMenu" class="overflow-hidden max-h-0 opacity-0 transition-all flex flex-col ml-6 gap-3">
      <a href="<?= BASE_URL ?>pages/safety.php" class="flex items-center gap-3"><i class="fa-solid fa-shield-halved"></i> Compliance</a>
      <a href="https://www.verizonconnect.com/" target="_blank" class="flex items-center gap-3"><i class="fa-solid fa-location-dot"></i> Tracking</a>
    </div>

    <a href="<?= BASE_URL ?>forms/driver-application.php" class="flex items-center gap-3"><i class="fa-solid fa-briefcase"></i> Employment</a>
    <a href="<?= BASE_URL ?>pages/contact.php" class="flex items-center gap-3"><i class="fa-solid fa-envelope"></i> Contact Us</a>
    <a href="<?= BASE_URL ?>pages/contact.php" class="bg-red-600 text-white px-5 py-2 rounded-full text-center mt-auto">Request Quote</a>

  </div>
</div>

<script>
const menuBtn = document.getElementById('menuBtn');
const closeMenu = document.getElementById('closeMenu');
const mobileMenu = document.getElementById('mobileMenu');
const mobileOverlay = document.getElementById('mobileOverlay');

menuBtn.onclick = () => {
  mobileMenu.classList.remove('translate-x-full');
  mobileOverlay.classList.remove('hidden');
};
closeMenu.onclick = () => {
  mobileMenu.classList.add('translate-x-full');
  mobileOverlay.classList.add('hidden');
};
mobileOverlay.onclick = closeMenu.onclick;

const servicesBtn = document.getElementById('mobileServicesBtn');
const servicesMenu = document.getElementById('mobileServicesMenu');
const servicesIcon = document.getElementById('mobileServicesIcon');

servicesBtn.onclick = () => {
  servicesMenu.classList.toggle('max-h-0');
  servicesMenu.classList.toggle('max-h-96');
  servicesMenu.classList.toggle('opacity-0');
  servicesIcon.classList.toggle('rotate-180');
};

const resourcesBtn = document.getElementById('mobileResourcesBtn');
const resourcesMenu = document.getElementById('mobileResourcesMenu');
const resourcesIcon = document.getElementById('mobileResourcesIcon');

resourcesBtn.onclick = () => {
  resourcesMenu.classList.toggle('max-h-0');
  resourcesMenu.classList.toggle('max-h-96');
  resourcesMenu.classList.toggle('opacity-0');
  resourcesIcon.classList.toggle('rotate-180');
};
</script>

</body>
</html>