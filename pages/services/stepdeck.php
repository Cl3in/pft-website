<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/pft-website/includes/config.php';
include BASE_PATH . 'includes/header.php';
?>

<section class="relative h-[400px] md:h-[500px] flex items-center justify-center text-white">
  <img src="/pft-website/assets/images/stepdek.webp"
       loading="lazy"
       class="absolute inset-0 w-full h-full object-cover">
  <div class="absolute inset-0 bg-black/70"></div>
  <div class="relative z-10 text-center">
    <h1 class="text-5xl font-bold">Stepdeck Transportation Services</h1>
    <p class="mt-4 text-lg text-gray-300">Lower Deck Advantage • Height-Compliant Freight</p>
  </div>
</section>

<section class="py-20 bg-white">
  <div class="max-w-6xl mx-auto px-6">
    <h2 class="text-3xl font-bold mb-6 text-black">Built for Taller Cargo</h2>

    <p class="text-lg text-gray-700 leading-relaxed mb-6">
      Our stepdeck trailers are designed to haul taller freight that exceeds
      standard flatbed height restrictions while maintaining DOT compliance.
    </p>

    <p class="text-lg text-gray-700 leading-relaxed">
      Ideal for machinery, industrial components, and equipment requiring
      specialized loading flexibility.
    </p>
  </div>
</section>

<section class="py-20 bg-[#181818] text-white">
  <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-3 gap-10 text-center">

    <div>
      <h3 class="text-xl font-bold mb-4 text-red-500">Extended Height Capacity</h3>
      <p>Lower rear deck provides increased vertical clearance.</p>
    </div>

    <div>
      <h3 class="text-xl font-bold mb-4 text-red-500">Machinery & Equipment</h3>
      <p>Perfect for construction and manufacturing freight.</p>
    </div>

    <div>
      <h3 class="text-xl font-bold mb-4 text-red-500">Compliance Focused</h3>
      <p>Strict adherence to FMCSA height regulations.</p>
    </div>

  </div>
</section>

<section class="py-20 bg-white text-center">
  <a href="contact.php"
     class="bg-red-600 text-white px-12 py-4 rounded-full text-lg font-semibold hover:bg-red-700 transition">
     Request Stepdeck Quote
  </a>
</section>

<?php include BASE_PATH . 'includes/footer.php'; ?>