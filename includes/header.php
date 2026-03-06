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
<div class="text-white text-sm bg-[#0A0A0A]">
  <div class="max-w-7xl mx-auto px-6 py-2 flex justify-end items-center gap-10">

    <!-- Phone -->
    <a href="tel:+14236801299" class="flex items-center gap-2 hover:text-red-500 transition">
      <i class="fa fa-phone text-red-600"></i>
      1-423-680-1299
    </a>

    <!-- Email -->
    <a href="mailto:info@parrishft.com" class="flex items-center gap-2 hover:text-red-500 transition">
      <i class="fa fa-envelope text-red-600"></i>
      info@parrishft.com
    </a>

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
<a href="/pft-website/pages/about.php" class="flex items-center gap-2 hover:text-red-600 transition group">
<i class="fa-solid fa-building text-sm"></i> About
</a>


<div>

<a href="/pft-website/pages/services.php"
   class="flex items-center gap-2 hover:text-red-600 transition">

   <i class="fa-solid fa-truck text-sm"></i>
   Services

</a>

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

<a href="/pft-website/index.php" class="flex items-center gap-3">
<i class="fa-solid fa-house text-sm"></i>
Home
</a>

<a href="/pft-website/pages/about.php" class="flex items-center gap-3">
<i class="fa-solid fa-building text-sm"></i>
About
</a>


<button id="mobileServicesBtn" class="flex justify-between items-center w-full">
<span class="flex items-center gap-3">
<i class="fa-solid fa-truck text-sm"></i>
Services
</span>
<i id="mobileServicesIcon" class="fa fa-chevron-down transition-transform"></i>
</button>


<div id="mobileServicesMenu" class="overflow-hidden max-h-0 opacity-0 transition-all flex flex-col ml-6 gap-3">

<a href="/pft-website/pages/services/flatbed.php" class="flex items-center gap-3">
<i class="fa-solid fa-trailer text-sm"></i>
Flatbed
</a>

<a href="/pft-website/pages/services/stepdeck.php" class="flex items-center gap-3">
<i class="fa-solid fa-road text-sm"></i>
Stepdeck
</a>

<a href="/pft-website/pages/services/wideload.php" class="flex items-center gap-3">
<i class="fa-solid fa-arrows-left-right text-sm"></i>
Wide Load
</a>

<a href="/pft-website/pages/services/reefer.php" class="flex items-center gap-3">
<i class="fa-solid fa-snowflake text-sm"></i>
Reefer
</a>

</div>


<button id="mobileResourcesBtn" class="flex justify-between items-center w-full">
<span class="flex items-center gap-3">
<i class="fa-solid fa-folder-open text-sm"></i>
Resources
</span>
<i id="mobileResourcesIcon" class="fa fa-chevron-down transition-transform"></i>
</button>


<div id="mobileResourcesMenu" class="overflow-hidden max-h-0 opacity-0 transition-all flex flex-col ml-6 gap-3">

<a href="/pft-website/pages/safety.php" class="flex items-center gap-3">
<i class="fa-solid fa-shield-halved text-sm"></i>
Compliance
</a>

<a href="<?= $headerTrackingUrl ?>" class="flex items-center gap-3">
<i class="fa-solid fa-location-dot text-sm"></i>
Tracking
</a>

</div>


<a href="/pft-website/pages/careers.php" class="flex items-center gap-3">
<i class="fa-solid fa-briefcase text-sm"></i>
Employment
</a>

<a href="/pft-website/pages/contact.php" class="flex items-center gap-3">
<i class="fa-solid fa-envelope text-sm"></i>
Contact Us
</a>

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