<?php require_once __DIR__ . '/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?php echo SITE_NAME; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>

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

<body class="bg-gray-50">

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

<header id="mainHeader" class="bg-white sticky top-0 z-50 border-b border-gray-100 transition-all duration-300">

<div id="headerInner" class="max-w-7xl mx-auto px-6 py-5 flex justify-between items-center transition-all duration-300">

<!-- BRAND -->
<h1 class="text-3xl font-bold tracking-wide text-brand"
    style="font-family: <?php echo FONT_FAMILY; ?>;">
    <?php echo SITE_NAME; ?>
</h1>

<!-- DESKTOP NAV -->
<nav class="hidden md:flex items-center gap-8 font-semibold relative">

<a href="/pft-website/index.php" class="hover:text-brand transition">Home</a>
<a href="/pft-website/pages/about.php" class="hover:text-brand transition">About</a>

<!-- SERVICES DROPDOWN -->
<div class="relative group">
<button class="flex items-center gap-1 hover:text-brand transition">
    Services <i class="fa fa-chevron-down text-xs"></i>
</button>

<div class="absolute left-0 mt-4 w-48 bg-white shadow-lg rounded
            opacity-0 invisible
            group-hover:opacity-100 group-hover:visible
            transform translate-y-3 group-hover:translate-y-0
            transition-all duration-300">

<a href="/pft-website/pages/services/flatbed.php" class="block px-4 py-2 hover:bg-gray-100">Flatbed</a>
<a href="/pft-website/pages/services/stepdeck.php" class="block px-4 py-2 hover:bg-gray-100">Stepdeck</a>
<a href="/pft-website/pages/services/reefer.php" class="block px-4 py-2 hover:bg-gray-100">Reefer</a>

</div>
</div>

<a href="/pft-website/pages/tracking.php" class="hover:text-brand transition">Tracking</a>
<a href="/pft-website/pages/contact.php" class="hover:text-brand transition">Contact</a>

<!-- STRONG REQUEST QUOTE BUTTON -->
<a href="/pft-website/pages/contact.php"
   class="bg-brand text-white px-6 py-2 rounded-full font-bold shadow-md 
          hover:shadow-lg hover:scale-105 transition duration-300">
   Request Quote
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
     class="fixed top-0 right-0 h-full w-80 bg-white shadow-lg
            transform translate-x-full
            transition-transform duration-500 ease-in-out
            z-50">

<div class="p-6 flex flex-col gap-6 font-semibold h-full">

<!-- Close Button -->
<div class="flex justify-between items-center border-b pb-4">
<span class="text-lg font-bold">Menu</span>
<button id="closeMenu" class="text-xl">
    <i class="fa fa-times"></i>
</button>
</div>

<a href="/pft-website/index.php">Home</a>
<a href="/pft-website/pages/about.php">About</a>

<!-- SERVICES ACCORDION -->
<div class="border-t pt-4">

<button id="mobileServicesBtn"
        class="flex justify-between items-center w-full">
    Services
    <i id="mobileServicesIcon"
       class="fa fa-chevron-down text-sm transition-transform duration-300"></i>
</button>

<div id="mobileServicesMenu"
     class="overflow-hidden max-h-0 opacity-0
            transition-all duration-500 ease-in-out
            flex flex-col mt-4 ml-3 gap-3 text-gray-600">

<a href="/pft-website/pages/services/flatbed.php">Flatbed</a>
<a href="/pft-website/pages/services/stepdeck.php">Stepdeck</a>
<a href="/pft-website/pages/services/reefer.php">Reefer</a>

</div>

</div>

<a href="/pft-website/pages/tracking.php" class="border-t pt-4">Tracking</a>
<a href="/pft-website/pages/contact.php">Contact</a>

<a href="/pft-website/pages/contact.php"
   class="bg-brand text-white px-5 py-2 rounded-full text-center mt-auto">
   Request Quote
</a>

</div>
</div>
</div>

</header>