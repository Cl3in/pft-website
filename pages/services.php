<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . '/pft-website/includes/config.php';
include BASE_PATH . 'includes/header.php';
?>

<section class="py-24 bg-black text-white">
<div class="max-w-6xl mx-auto px-6">

<h1 class="text-4xl font-bold text-center mb-12">
Our Transportation Services
</h1>

<div class="grid md:grid-cols-3 gap-8">

<a href="/pft-website/pages/services/flatbed.php"
class="bg-[#111] p-8 rounded-xl border border-gray-800 hover:border-red-600 transition text-center">
<i class="fa-solid fa-trailer text-red-500 text-2xl mb-4"></i>
<h2 class="text-xl font-semibold">Flatbed</h2>
</a>

<a href="/pft-website/pages/services/stepdeck.php"
class="bg-[#111] p-8 rounded-xl border border-gray-800 hover:border-red-600 transition text-center">
<i class="fa-solid fa-road text-red-500 text-2xl mb-4"></i>
<h2 class="text-xl font-semibold">Step Deck</h2>
</a>

<a href="/pft-website/pages/services/Wide Load.php"
class="bg-[#111] p-8 rounded-xl border border-gray-800 hover:border-red-600 transition text-center">
<i class="fa-solid fa-arrows-left-right text-red-500 text-2xl mb-4"></i>
<h2 class="text-xl font-semibold">Wide Load</h2>
</a>

<a href="/pft-website/pages/service/reefer.php"
class="relative bg-[#111] p-8 rounded-xl border border-gray-800 hover:border-red-600 transition text-center">

  <!-- Coming Soon Badge -->
  <span class="absolute top-3 right-3 bg-red-600 text-white text-xs px-3 py-1 rounded-full font-semibold shadow">
    Coming Soon
  </span>

  <i class="fa-solid fa-snowflake text-red-500 text-2xl mb-4"></i>
  <h2 class="text-xl font-semibold">Reefer</h2>

</a>

</div>

</div>
</section>

<section class="py-20 bg-black">
  <div class="max-w-7xl mx-auto px-6">

    <div class="grid grid-cols-2 md:grid-cols-3 gap-6">

      <!-- Image 1 -->
      <div class="overflow-hidden rounded-xl group">
        <img src="<?= BASE_URL ?>assets/images/flatbed.webp"
             alt="Flatbed trucking freight transport"
             class="w-full h-64 object-cover group-hover:scale-110 transition duration-700">
      </div>

      <!-- Image 2 -->
      <div class="overflow-hidden rounded-xl group">
        <img src="<?= BASE_URL ?>assets/images/flat.jpeg"
             alt="Flatbed trailer freight shipment"
             class="w-full h-64 object-cover group-hover:scale-110 transition duration-700">
      </div>

      <!-- Image 3 -->
      <div class="overflow-hidden rounded-xl group">
        <img src="<?= BASE_URL ?>assets/images/stepdek.webp"
             alt="Step deck trailer transport"
             class="w-full h-64 object-cover group-hover:scale-110 transition duration-700">
      </div>

      <!-- Image 4 -->
      <div class="overflow-hidden rounded-xl group">
        <img src="<?= BASE_URL ?>assets/images/loading.jpg"
             alt="Step deck heavy equipment transport"
             class="w-full h-64 object-cover group-hover:scale-110 transition duration-700">
      </div>

      <!-- Image 5 -->
      <div class="overflow-hidden rounded-xl group">
        <img src="<?= BASE_URL ?>assets/images/flatbed6.webp"
             alt="Oversize load trucking transport"
             class="w-full h-64 object-cover group-hover:scale-110 transition duration-700">
      </div>

      <!-- Image 6 -->
      <div class="overflow-hidden rounded-xl group">
        <img src="<?= BASE_URL ?>assets/images/stepdeck.jpeg"
             alt="Heavy haul oversized cargo transport"
             class="w-full h-64 object-cover group-hover:scale-110 transition duration-700">
      </div>

    </div>

  </div>
</section>

<?php include BASE_PATH . 'includes/footer.php'; ?>