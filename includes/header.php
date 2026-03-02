<?php require_once __DIR__ . '/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?php echo SITE_NAME; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
<link rel="stylesheet" href="/pft-website/css/styles.css">
<script>
tailwind.config = {
theme:{extend:{colors:{brand:'<?php echo THEME_COLOR; ?>'}}}
}
</script>

<style>
.cta{transition:.3s}
.cta:hover{transform:translateY(-3px)}
</style>
</head>

<body class="bg-[#141414] text-white">

<!-- TOP CONTACT BAR -->
<div class="text-white text-sm" style="background-color: #0A0A0A;">
<div class="max-w-7xl mx-auto px-4 py-2 flex justify-between">

<div class="flex gap-6">
<span><i class="fa fa-phone"></i> 1-423-680-1299</span>
<span><i class="fa fa-envelope"></i> info@parrishft.com</span>
<span class="hidden md:block"><i class="fa fa-location-dot"></i> Chattanooga, TN</span>
</div>

<div class="flex gap-4">
<i class="fab fa-facebook"></i>
<i class="fab fa-twitter"></i>
<i class="fab fa-linkedin"></i>
<i class="fab fa-instagram"></i>
</div>

</div>
</div>

<header id="mainHeader" class="bg-[#1a1a1a] sticky top-0 z-50 border-b border-[#222] transition-all duration-300">

<div id="headerInner" class="relative max-w-7xl mx-auto px-6 py-5 flex justify-between items-center transition-all duration-300">

<!-- BRAND -->
<h1 class="text-3xl font-bold tracking-wide text-brand"
    style="font-family: <?php echo FONT_FAMILY; ?>;">
    <?php echo SITE_NAME; ?>
</h1>

<!-- DESKTOP NAV -->
<nav class="hidden md:flex items-center gap-8 font-semibold relative">

<!-- Home -->
<a href="/pft-website/index.php"
   class="flex items-center gap-2 hover:text-red-600 transition relative group">
   <i class="fa-solid fa-house text-sm"></i>
   <span>Home</span>
   <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-red-600 transition-all group-hover:w-full"></span>
</a>

<!-- About -->
<a href="/pft-website/pages/about.php"
   class="flex items-center gap-2 hover:text-red-600 transition relative group">
   <i class="fa-solid fa-building text-sm"></i>
   <span>About</span>
   <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-red-600 transition-all group-hover:w-full"></span>
</a>

<!-- SERVICES DROPDOWN -->
<div class="relative group">
  <!-- Dropdown Button -->
  <button class="flex items-center gap-2 hover:text-red-600 transition relative">
    <i class="fa-solid fa-truck text-sm"></i> Services 
    <i class="fa fa-chevron-down text-xs transition-transform duration-300 group-hover:rotate-180"></i>
  </button>

  <!-- Mega menu container -->
  <div class="absolute left-0 mt-4 w-screen max-w-6xl bg-[#1f1f1f]/95 backdrop-blur-md shadow-xl opacity-0 invisible
              group-hover:opacity-100 group-hover:visible
              transform translate-y-3 group-hover:translate-y-0
              transition-all duration-300 px-8 py-6 grid grid-cols-3 gap-6">

    <!-- Column 1: Truck Types -->
    <div>
      <h3 class="text-lg font-semibold mb-4 text-white">Truck Types</h3>
      <a href="/pft-website/pages/services/flatbed.php" class="flex items-center gap-2 py-2 text-gray-300 hover:text-red-500 transition">
        <i class="fa-solid fa-trailer"></i> Flatbed
      </a>
      <a href="/pft-website/pages/services/stepdeck.php" class="flex items-center gap-2 py-2 text-gray-300 hover:text-red-500 transition">
        <i class="fa-solid fa-road"></i> Stepdeck
      </a>
      <a href="/pft-website/pages/services/reefer.php" class="flex items-center gap-2 py-2 text-gray-300 hover:text-red-500 transition">
        <i class="fa-solid fa-snowflake"></i> Reefer
      </a>
    </div>

    <!-- Column 2: Special Services -->
    <div>
      <h3 class="text-lg font-semibold mb-4 text-white">Special Services</h3>
      <a href="#" class="flex items-center gap-2 py-2 text-gray-300 hover:text-red-500 transition">
        <i class="fa-solid fa-bolt"></i> Expedited
      </a>
      <a href="#" class="flex items-center gap-2 py-2 text-gray-300 hover:text-red-500 transition">
        <i class="fa-solid fa-route"></i> Dedicated Routes
      </a>
      <a href="#" class="flex items-center gap-2 py-2 text-gray-300 hover:text-red-500 transition">
        <i class="fa-solid fa-boxes-stacked"></i> LTL
      </a>
    </div>

    <!-- Column 3: Resources -->
    <div>
      <h3 class="text-lg font-semibold mb-4 text-white">Resources</h3>
      <a href="#" class="flex items-center gap-2 py-2 text-gray-300 hover:text-red-500 transition">
        <i class="fa-solid fa-file-lines"></i> Safety Docs
      </a>
      <a href="#" class="flex items-center gap-2 py-2 text-gray-300 hover:text-red-500 transition">
        <i class="fa-solid fa-shield-halved"></i> Compliance
      </a>
      <a href="#" class="flex items-center gap-2 py-2 text-gray-300 hover:text-red-500 transition">
        <i class="fa-solid fa-user-tie"></i> Careers
      </a>
    </div>

  </div>
</div>

<!-- Tracking -->
<a href="/pft-website/pages/tracking.php"
   class="flex items-center gap-2 hover:text-red-600 transition relative group">
   <i class="fa-solid fa-location-dot text-sm"></i>
   <span>Tracking</span>
   <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-red-600 transition-all group-hover:w-full"></span>
</a>

<!-- Contact CTA Button -->
<!-- <a href="/pft-website/pages/contact.php"
   class="bg-red-600 text-white px-5 py-2 rounded-lg shadow-md hover:bg-red-700 hover:shadow-lg transition">
   Contact Us
</a> -->

</nav>



<!-- LOGO ON RIGHT -->
<a href="/pft-website/index.php" class="ml-4 flex items-center transition-all duration-300 ease-in-out logo-container">
 <img src="<?= BASE_URL ?>assets/images/logo.png"
       alt="Parrish Family Trucking Logo"
       class="h-20 md:h-28 lg:h-32 w-auto object-contain transition-all duration-300 ease-in-out logo-img">
</a>

</nav>
<!-- MOBILE HAMBURGER BUTTON -->
<button id="menuBtn" class="md:hidden text-2xl text-brand">
    <i class="fa fa-bars"></i>
</button>
<!-- MOBILE MENU OVERLAY -->
<div id="mobileOverlay"
     class="fixed inset-0 bg-black/40 hidden z-40"></div>

<!-- MOBILE MENU PANEL -->
<div id="mobileMenu"
    class="fixed top-0 right-0 h-full w-80 bg-[#1a1a1a]/95 backdrop-blur-md shadow-xl
           transform translate-x-full
           transition-transform duration-500 ease-in-out
           z-50">

  <div class="p-6 flex flex-col gap-6 font-semibold h-full text-gray-200">

    <!-- Close Button -->
    <div class="flex justify-between items-center border-b pb-4">
      <span class="text-lg font-bold text-white">Menu</span>
      <button id="closeMenu" class="text-xl text-gray-200 hover:text-red-500">
        <i class="fa fa-times"></i>
      </button>
    </div>

    <!-- Links with icons -->
    <a href="/pft-website/index.php" 
       class="flex items-center gap-2 hover:text-red-500 transition relative <?php echo basename($_SERVER['PHP_SELF'])=='index.php'?'text-red-500 font-bold':''; ?>">
       <i class="fa-solid fa-house"></i> Home
       <span class="absolute left-0 -bottom-1 w-0 h-0.5 bg-red-500 transition-all duration-300 group-hover:w-full"></span>
    </a>

    <a href="/pft-website/pages/about.php" 
       class="flex items-center gap-2 hover:text-red-500 transition relative <?php echo basename($_SERVER['PHP_SELF'])=='about.php'?'text-red-500 font-bold':''; ?>">
       <i class="fa-solid fa-building"></i> About
    </a>

    <!-- SERVICES ACCORDION -->
    <div class="border-t pt-4">

      <button id="mobileServicesBtn"
              class="flex justify-between items-center w-full hover:text-red-500 transition relative">
          <div class="flex items-center gap-2">
            <i class="fa-solid fa-truck"></i> Services
          </div>
          <i id="mobileServicesIcon"
             class="fa fa-chevron-down text-sm transition-transform duration-300"></i>
      </button>

      <div id="mobileServicesMenu"
           class="overflow-hidden max-h-0 opacity-0
                  transition-all duration-500 ease-in-out
                  flex flex-col mt-4 ml-3 gap-3 text-gray-400">

        <a href="/pft-website/pages/services/flatbed.php" class="flex items-center gap-2 hover:text-red-500">
          <i class="fa-solid fa-trailer"></i> Flatbed
        </a>
        <a href="/pft-website/pages/services/stepdeck.php" class="flex items-center gap-2 hover:text-red-500">
          <i class="fa-solid fa-road"></i> Stepdeck
        </a>
        <a href="/pft-website/pages/services/reefer.php" class="flex items-center gap-2 hover:text-red-500">
          <i class="fa-solid fa-snowflake"></i> Reefer
        </a>

      </div>

    </div>

    <a href="/pft-website/pages/tracking.php" class="flex items-center gap-2 border-t pt-4 hover:text-red-500">
      <i class="fa-solid fa-location-dot"></i> Tracking
    </a>
    <a href="/pft-website/pages/contact.php" class="flex items-center gap-2 hover:text-red-500">
      <i class="fa-solid fa-envelope"></i> Contact
    </a>

    <!-- CTA Button -->
    <a href="/pft-website/pages/contact.php"
       class="bg-red-600 text-white px-5 py-2 rounded-full text-center mt-auto hover:bg-red-700 shadow-md transition">
       Request Quote
    </a>

  </div>
</div>
</div>

</header>
<!-- LOGO SHRINK ON SCROLL SCRIPT -->
<script>
  const logoImg = document.querySelector('.logo-img');
  const logoContainer = document.querySelector('.logo-container');

  window.addEventListener('scroll', () => {
    if(window.scrollY > 50) { // adjust scroll trigger
      logoImg.classList.add('h-14', 'md:h-20', 'lg:h-24'); // smaller logo
      logoContainer.classList.add('ml-2'); // optional slight shift
    } else {
      logoImg.classList.remove('h-14', 'md:h-20', 'lg:h-24');
      logoContainer.classList.remove('ml-2');
    }
  });
</script>
<script>
  const header = document.getElementById('mainHeader');
  const headerInner = document.getElementById('headerInner');
  const logoImg = document.querySelector('.logo-img');
  const quoteBtn = document.querySelector('.quote-btn');

  window.addEventListener('scroll', () => {
    if (window.scrollY > 50) { // adjust when shrink starts

      // Shrink entire header
      header.classList.add('shrink-header', 'scroll-transition');

      // Shrink logo
      logoImg.classList.add('shrink-logo', 'scroll-transition');

      // Optional: move logo slightly for animation
      logoImg.style.transform = 'scale(0.8) translateY(-2px)';

      // Optionally shrink button slightly
      quoteBtn.style.transform = 'scale(0.95)';

    } else {

      // Reset header
      header.classList.remove('shrink-header');

      // Reset logo
      logoImg.classList.remove('shrink-logo');
      logoImg.style.transform = 'scale(1) translateY(0)';

      // Reset button
      quoteBtn.style.transform = 'scale(1)';
    }
  });
</script>



</body>
</html>