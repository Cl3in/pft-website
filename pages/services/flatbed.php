<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/pft-website/includes/config.php';
include BASE_PATH . 'includes/header.php';
?>

<!-- HERO -->
<section class="relative h-[400px] md:h-[500px] flex items-center justify-center text-white">
  <img src="/pft-website/assets/images/flatbed.webp"
       loading="lazy"
       class="absolute inset-0 w-full h-full object-cover">
  <div class="absolute inset-0 bg-black/70"></div>
  <div class="relative z-10 text-center">
    <h1 class="text-5xl font-bold">Flatbed Transportation Services</h1>
    <p class="mt-4 text-lg text-gray-300">Heavy Haul • Oversized Freight • Open Deck Solutions</p>
  </div>
</section>

<!-- OVERVIEW -->
<section class="py-20 bg-white">
  <div class="max-w-6xl mx-auto px-6">
    <h2 class="text-3xl font-bold mb-6 text-black">Reliable Open-Deck Freight Solutions</h2>

    <p class="text-lg text-gray-700 leading-relaxed mb-6">
      Parrish Family Trucking provides professional flatbed transportation services
      for oversized, heavy, and irregular freight. Our experienced drivers and
      securement specialists ensure cargo safety across every mile.
    </p>

    <p class="text-lg text-gray-700 leading-relaxed">
      From construction materials to industrial equipment, our flatbed division
      delivers dependable solutions nationwide.
    </p>
  </div>
</section>

<!-- FEATURES -->
<section class="py-20 bg-[#181818] text-white">
  <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-3 gap-10 text-center">

    <div>
      <h3 class="text-xl font-bold mb-4 text-red-500">Oversized Freight</h3>
      <p>Transporting large and heavy cargo with full compliance and escort coordination.</p>
    </div>

    <div>
      <h3 class="text-xl font-bold mb-4 text-red-500">Secure Load Handling</h3>
      <p>Advanced tie-down, tarping, and load securement techniques.</p>
    </div>

    <div>
      <h3 class="text-xl font-bold mb-4 text-red-500">Nationwide Coverage</h3>
      <p>Reliable flatbed service across regional and long-haul routes.</p>
    </div>

  </div>
</section>

<!-- CTA -->
<section class="py-20 bg-white text-center">
  <a href="contact.php"
     class="bg-red-600 text-white px-12 py-4 rounded-full text-lg font-semibold hover:bg-red-700 transition">
     Request Flatbed Quote
  </a>
</section>

<?php include BASE_PATH . 'includes/footer.php'; ?>