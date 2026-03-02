<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/pft-website/includes/config.php';
include BASE_PATH . 'includes/header.php';
?>

<!-- HERO -->
<section class="relative h-[400px] flex items-center justify-center text-white">
  <img src="/pft-website/assets/images/flatbed3.webp"
       class="absolute inset-0 w-full h-full object-cover">
  <div class="absolute inset-0 bg-black/70"></div>
  <div class="relative z-10 text-center">
    <h1 class="text-5xl font-bold">Our Fleet</h1>
  </div>
</section>

<!-- GALLERY -->
<section class="py-20 bg-[#181818] text-white">
  <div class="max-w-7xl mx-auto px-6">

    <div class="grid md:grid-cols-3 gap-8">

      <!-- ITEM -->
      <div class="group relative overflow-hidden rounded-xl shadow-2xl">
        <img src="/pft-website/assets/images/flatbed.webp"
             class="w-full h-80 object-cover transform group-hover:scale-110 transition duration-500">
        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
          <h3 class="text-2xl font-bold">Flatbed Division</h3>
        </div>
      </div>

      <div class="group relative overflow-hidden rounded-xl shadow-2xl">
        <img src="/pft-website/assets/images/stepdek.webp"
             class="w-full h-80 object-cover transform group-hover:scale-110 transition duration-500">
        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
          <h3 class="text-2xl font-bold">Stepdeck Division</h3>
        </div>
      </div>

      <div class="group relative overflow-hidden rounded-xl shadow-2xl">
        <img src="/pft-website/assets/images/stepdek7.webp"
             class="w-full h-80 object-cover transform group-hover:scale-110 transition duration-500">
        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
          <h3 class="text-2xl font-bold">Reefer Division</h3>
        </div>
      </div>

    </div>

  </div>
</section>

<?php include BASE_PATH . 'includes/footer.php'; ?>