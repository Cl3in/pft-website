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
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="<?= BASE_URL ?>assets/css/main.css">
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
<div class="text-white text-sm" style="background-color:#0A0A0A;">
<div class="relative max-w-7xl mx-auto px-6 py-2 flex items-center justify-between">
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

<div id="headerInner" class="relative max-w-7xl mx-auto px-6 py-4 flex items-center justify-between items-center transition-all duration-300">

<!-- BRAND -->
<h1 class="text-3xl font-bold tracking-wide text-brand" style="font-family:<?php echo FONT_FAMILY; ?>;">
  <?php echo SITE_NAME; ?>
</h1>

<!-- DESKTOP NAV -->
<nav class="hidden md:flex items-center gap-8 font-semibold relative">

<a href="/pft-website/index.php" class="flex items-center gap-2 hover:text-red-600 transition group">
<i class="fa-solid fa-house text-sm"></i> Home
</a>

<div class="relative group">

    <!-- Trigger -->
    <button id="aboutBtn"
        class="flex items-center gap-2 hover:text-red-600 transition">
        <i class="fa-solid fa-building text-sm"></i> About
        <i class="fa fa-chevron-down text-xs group-hover:rotate-180 transition-transform duration-300"></i>
    </button>

    <!-- Info Card -->
    <div id="aboutCard"
        class="absolute left-1/2 -translate-x-1/2 mt-6
               w-[90vw] max-w-3xl
               opacity-0 invisible translate-y-6
               group-hover:opacity-100 group-hover:visible group-hover:translate-y-0
               transition-all duration-500 ease-out
               z-50">

        <div class="relative overflow-hidden rounded-2xl shadow-2xl">

            <!-- Blurred Background -->
            <img src="<?= BASE_URL ?>assets/images/flatbed2.webp"
                 class="absolute inset-0 w-full h-full object-cover blur-2xl scale-110 opacity-25">

            <div class="absolute inset-0 bg-[#1f1f1f]/95 backdrop-blur-md"></div>

            <!-- Content -->
            <div class="relative px-10 py-8 text-gray-300 leading-relaxed text-sm md:text-base">

                <p>
                Parrish Family Trucking is headquartered in Chattanooga, TN and
                offers personalized and professional customer interactions,
                on-time delivery, safe and secure transportation, and reasonable
                rates. We aim to streamline services as we continue to grow to
                match the increasing needs of our customers while providing
                Professional and Safe Drivers.
                </p>

                <!-- Read More -->
                <a href="/pft-website/pages/about.php"
                   class="mt-6 inline-flex items-center gap-2 text-red-600 font-semibold hover:gap-3 transition-all duration-300">
                    Read More
                    <i class="fa-solid fa-arrow-right text-sm"></i>
                </a>

            </div>
        </div>
    </div>

</div>

<div class="relative group">

    <!-- Trigger Button -->
    <button class="flex items-center gap-2 hover:text-red-600 transition">
        <i class="fa-solid fa-truck text-sm"></i> Services
        <i class="fa fa-chevron-down text-xs group-hover:rotate-180 transition-transform duration-300"></i>
    </button>

    <!-- MEGA MENU -->
    <div class="absolute left-1/2 -translate-x-1/2 mt-6
                w-[90vw] max-w-5xl
                opacity-0 invisible translate-y-6
                group-hover:opacity-100 group-hover:visible group-hover:translate-y-0
                transition-all duration-500 ease-out
                z-50">

        <!-- Background Layer -->
        <div class="relative overflow-hidden rounded-2xl shadow-2xl">

            <!-- Blurred Image Background -->
            <img src="<?= BASE_URL ?>assets/images/flatbed1.webp"
                 class="absolute inset-0 w-full h-full object-cover
                        blur-2xl scale-110 opacity-30">

            <!-- Dark Overlay -->
            <div class="absolute inset-0 bg-[#1f1f1f]/90 backdrop-blur-md"></div>

            <!-- Content -->
            <div class="relative grid grid-cols-1 md:grid-cols-2 gap-12
                        px-12 py-10 text-gray-300">

                <!-- COLUMN 1 -->
                <div>
                    <h3 class="text-lg font-semibold mb-6 text-red-500 uppercase tracking-wider relative inline-block">
                         Truck Types
                        <span class="absolute left-0 -bottom-2 w-12 h-1 bg-red-600 rounded"></span>
                    </h3>

                    <a href="/pft-website/pages/services/flatbed.php"
                       class="mega-link">
                        <i class="fa-solid fa-trailer text-sm"></i> Flatbed
                    </a>

                    <a href="/pft-website/pages/services/stepdeck.php"
                       class="mega-link">
                        <i class="fa-solid fa-road text-sm"></i> Stepdeck
                    </a>
                      <a href="/pft-website/pages/services/Wide Load.php"
                       class="mega-link">
                        <i class="fa-solid fa-arrows-left-right text-sm"></i> Wide Load
                    </a>

                    <a href="/pft-website/pages/services/reefer.php"
                       class="mega-link">
                        <i class="fa-solid fa-snowflake text-sm"></i> Reefer
                    </a>
                </div>

                <!-- COLUMN 2 -->
                <div>
                   <h3 class="text-lg font-semibold mb-6 text-red-500 uppercase tracking-wider relative inline-block">
                          Resources
                        <span class="absolute left-0 -bottom-2 w-12 h-1 bg-red-600 rounded"></span>
                    </h3>

                    <a href="/pft-website/pages/safety.php"
   class="mega-link">
    <i class="fa-solid fa-shield-halved text-sm"></i> Compliance
</a>

<?php 
$headerTrackingUrl="/pft-website/customer-portal/login.php?return_to=/pft-website/customer-portal/tracking.php"; 
?>

<a href="<?= $headerTrackingUrl ?>"
   class="mega-link">
    <i class="fa-solid fa-location-dot text-sm"></i> Tracking
</a>
                  </a>

                  
                </div>

            </div>

        </div>

    </div>

</div>
<a href="/pft-website/pages/careers.php" 
   class="flex items-center gap-2 hover:text-red-600 transition group">
   <i class="fa-solid fa-briefcase text-sm"></i> 
   Employment
</a>

<a href="/pft-website/pages/contact.php" 
   class="flex items-center gap-2 hover:text-red-600 transition group">
   <i class="fa-solid fa-envelope text-sm"></i> 
   Contact Us
</a>



</nav>

<!-- LOGO -->

<!-- MOBILE BUTTON -->
<button id="menuBtn" class="md:hidden text-2xl text-brand">
<i class="fa fa-bars"></i>
</button>

</div>
</header>

<!-- OVERLAY -->
<div id="mobileOverlay" class="fixed inset-0 bg-black/40 hidden z-40"></div>

<!-- MOBILE MENU -->
<div id="mobileMenu" class="fixed top-0 right-0 h-full w-80 bg-[#1a1a1a]/95 shadow-xl
transform translate-x-full transition-transform duration-500 z-50">

<div class="p-6 flex flex-col gap-6 font-semibold h-full text-gray-200">

<div class="flex justify-between border-b pb-4">
<span>Menu</span>
<button id="closeMenu"><i class="fa fa-times"></i></button>
</div>

<a href="/pft-website/index.php">Home</a>
<a href="/pft-website/pages/about.php">About</a>

<button id="mobileServicesBtn" class="flex justify-between items-center">
<span><i class="fa fa-truck"></i> Services</span>
<i id="mobileServicesIcon" class="fa fa-chevron-down transition-transform"></i>
</button>

<div id="mobileServicesMenu" class="overflow-hidden max-h-0 opacity-0 transition-all flex flex-col ml-3 gap-2">
<a href="/pft-website/pages/services/flatbed.php">Flatbed</a>
<a href="/pft-website/pages/services/stepdeck.php">Stepdeck</a>
<a href="/pft-website/pages/services/reefer.php">Reefer</a>
</div>

<button id="mobileResourcesBtn" class="flex justify-between items-center">
<span><i class="fa fa-folder-open"></i> Resources</span>
<i id="mobileResourcesIcon" class="fa fa-chevron-down transition-transform"></i>
</button>

<div id="mobileResourcesMenu" class="overflow-hidden max-h-0 opacity-0 transition-all flex flex-col ml-3 gap-2">
<a href="/pft-website/pages/safety.php">Compliance</a>
<a href="/pft-website/pages/careers.php">Careers</a>
</div>

<a href="<?= $headerTrackingUrl ?>">Tracking</a>
<a href="/pft-website/pages/contact.php">Contact</a>

<a href="/pft-website/pages/contact.php" class="bg-red-600 text-white px-5 py-2 rounded-full text-center mt-auto">Request Quote</a>

</div>
</div>

<script>
const menuBtn=document.getElementById('menuBtn');
const closeMenu=document.getElementById('closeMenu');
const mobileMenu=document.getElementById('mobileMenu');
const mobileOverlay=document.getElementById('mobileOverlay');

menuBtn.onclick=()=>{mobileMenu.classList.remove('translate-x-full');mobileOverlay.classList.remove('hidden');}
closeMenu.onclick=()=>{mobileMenu.classList.add('translate-x-full');mobileOverlay.classList.add('hidden');}
mobileOverlay.onclick=closeMenu.onclick;

const servicesBtn=document.getElementById('mobileServicesBtn');
const servicesMenu=document.getElementById('mobileServicesMenu');
const servicesIcon=document.getElementById('mobileServicesIcon');

servicesBtn.onclick=()=>{
servicesMenu.classList.toggle('max-h-0');
servicesMenu.classList.toggle('max-h-96');
servicesMenu.classList.toggle('opacity-0');
servicesIcon.classList.toggle('rotate-180');
};

const resourcesBtn=document.getElementById('mobileResourcesBtn');
const resourcesMenu=document.getElementById('mobileResourcesMenu');
const resourcesIcon=document.getElementById('mobileResourcesIcon');

resourcesBtn.onclick=()=>{
resourcesMenu.classList.toggle('max-h-0');
resourcesMenu.classList.toggle('max-h-96');
resourcesMenu.classList.toggle('opacity-0');
resourcesIcon.classList.toggle('rotate-180');
};
const aboutBtn = document.getElementById('aboutBtn');
const aboutCard = document.getElementById('aboutCard');

aboutBtn.onclick = (e) => {
    e.preventDefault();
    aboutCard.classList.toggle('opacity-0');
    aboutCard.classList.toggle('invisible');
    aboutCard.classList.toggle('translate-y-6');
};

</script>

</body>
</html>