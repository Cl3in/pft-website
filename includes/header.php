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
<div class="bg-red-600 text-white text-sm">
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

<header class="bg-white shadow sticky top-0 z-50">
<div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">

<h1 class="text-2xl font-bold text-brand"><?php echo SITE_NAME; ?></h1>

<nav class="hidden md:flex gap-8 font-semibold">

<a href="/pft-website/index.php">Home</a>
<a href="/pft-website/pages/about.php">About</a>

<div class="relative group">
<button>Services ▾</button>
<div class="absolute hidden group-hover:block bg-white shadow mt-2 w-48">
<a href="/pft-website/pages/services/flatbed.php" class="block px-4 py-2 hover:bg-gray-100">Flatbed</a>
<a href="/pft-website/pages/services/stepdeck.php" class="block px-4 py-2 hover:bg-gray-100">Stepdeck</a>
<a href="/pft-website/pages/services/reefer.php" class="block px-4 py-2 hover:bg-gray-100">Reefer</a>
</div>
</div>

<a href="/pft-website/pages/tracking.php">Tracking</a>
<a href="/pft-website/pages/contact.php">Contact</a>

<a href="/pft-website/pages/contact.php" class="cta bg-red-600 text-white px-5 py-2 rounded">Request Quote</a>

</nav>
</div>
</header>