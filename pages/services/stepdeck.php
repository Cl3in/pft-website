<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/pft-website/includes/config.php';
include BASE_PATH . 'includes/header.php';
?>

<div class="bg-black text-white">

<!-- ================= INTRO SPLIT SECTION ================= -->
<section class="py-28 bg-[#0c0c0c]">
  <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-20 items-center">

    <div class="relative">
      <img src="<?= BASE_URL ?>assets/images/stepdek.webp"
           alt="Step Deck Trailer Transport"
           class="rounded-2xl shadow-2xl">

      <div class="absolute -bottom-6 -right-6 bg-red-600 text-white px-6 py-3 rounded-xl text-sm font-semibold shadow-xl">
        Lower Deck Advantage
      </div>
    </div>

    <div>
      <h1 class="text-5xl font-extrabold mb-8 tracking-tight">
        Step Deck Transportation
      </h1>

      <p class="text-gray-400 text-lg leading-relaxed mb-6">
        Step deck trailers provide enhanced vertical clearance by utilizing
        a lower rear deck configuration. This structural design enables
        height-compliant freight transport without special permits
        in many routing scenarios.
      </p>

      <p class="text-gray-500 leading-relaxed">
        Ideal for taller industrial machinery, prefabricated components,
        and oversized freight requiring optimized height distribution.
      </p>
    </div>

  </div>
</section>

<!-- ================= TECHNICAL ADVANTAGE GRID ================= -->
<section class="py-28 bg-black">
  <div class="max-w-7xl mx-auto px-6">

    <h2 class="text-4xl font-bold text-center mb-20">
      Engineering Advantages
    </h2>

    <div class="grid md:grid-cols-3 gap-14">

      <div class="border-l-4 border-red-600 pl-8">
        <h3 class="text-xl font-bold mb-4">
          Increased Vertical Clearance
        </h3>
        <p class="text-gray-400 leading-relaxed">
          The lowered rear deck allows taller freight to remain within
          standard DOT height limits while maintaining safe load balance.
        </p>
      </div>

      <div class="border-l-4 border-red-600 pl-8">
        <h3 class="text-xl font-bold mb-4">
          Equipment-Ready Design
        </h3>
        <p class="text-gray-400 leading-relaxed">
          Optimized for construction equipment, generators,
          HVAC units, and industrial machinery requiring lower deck positioning.
        </p>
      </div>

      <div class="border-l-4 border-red-600 pl-8">
        <h3 class="text-xl font-bold mb-4">
          Regulatory Compliance
        </h3>
        <p class="text-gray-400 leading-relaxed">
          Designed to meet FMCSA height regulations while reducing
          the need for special routing permits.
        </p>
      </div>

    </div>

  </div>
</section>

<!-- ================= VISUAL CONTENT STRIP ================= -->
<section class="py-28 bg-[#0f0f0f]">
  <div class="max-w-7xl mx-auto px-6">

    <h2 class="text-5xl font-bold text-center mb-20 tracking-tight">
      Height-Compliant Freight Solutions
    </h2>

    <div class="grid md:grid-cols-2 gap-12">

      <div class="group relative overflow-hidden rounded-2xl">
        <img src="<?= BASE_URL ?>assets/images/stepdek5.webp"
             class="w-full h-80 object-cover group-hover:scale-105 transition duration-700"
             alt="Industrial Step Deck Load">
      </div>

      <div class="flex flex-col justify-center">
        <h3 class="text-3xl font-semibold mb-6">
          Built for Tall Cargo
        </h3>
        <p class="text-gray-400 leading-relaxed mb-6">
          Step deck trailers provide the flexibility needed for freight
          exceeding standard flatbed height restrictions while maintaining
          safe distribution across both deck levels.
        </p>
        <p class="text-gray-500 leading-relaxed">
          This configuration supports efficient loading and unloading
          at construction sites, industrial facilities, and distribution hubs.
        </p>
      </div>

    </div>

  </div>
</section>

<!-- ================= APPLICATIONS GRID ================= -->
<section class="py-28 bg-black">
  <div class="max-w-7xl mx-auto px-6">

    <h2 class="text-4xl font-bold text-center mb-20">
      Common Applications
    </h2>

    <div class="grid md:grid-cols-4 gap-10 text-center">

      <div class="bg-[#111] p-8 rounded-xl border border-gray-800 hover:border-red-600 transition">
        <p class="font-semibold">Construction Machinery</p>
      </div>

      <div class="bg-[#111] p-8 rounded-xl border border-gray-800 hover:border-red-600 transition">
        <p class="font-semibold">Agricultural Equipment</p>
      </div>

      <div class="bg-[#111] p-8 rounded-xl border border-gray-800 hover:border-red-600 transition">
        <p class="font-semibold">Industrial Fabrication Units</p>
      </div>

      <div class="bg-[#111] p-8 rounded-xl border border-gray-800 hover:border-red-600 transition">
        <p class="font-semibold">Prefabricated Structures</p>
      </div>

    </div>

  </div>
</section>

<!-- ================= QUICK ACCESS (MATCH SYSTEM) ================= -->
<section class="py-24 bg-black">
  <div class="max-w-6xl mx-auto px-6">

    <div class="bg-[#c0c0c0] text-black rounded-3xl shadow-2xl py-16 px-10">

      <h2 class="text-3xl font-bold text-center mb-12">
        Quick Access
      </h2>

      <div class="grid md:grid-cols-4 gap-8">

        <!-- Drive With PFT -->
        <a href="/pft-website/pages/careers.php"
           class="flex items-center gap-4 bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition group">

          <div class="w-14 h-14 flex items-center justify-center rounded-full bg-red-600 text-white group-hover:scale-110 transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <circle cx="12" cy="12" r="9"/>
              <path d="M12 3v9l6 3"/>
            </svg>
          </div>

          <span class="font-semibold">Drive With PFT</span>
        </a>

        <!-- Request Quote -->
        <a href="/pft-website/pages/contact.php"
           class="flex items-center gap-4 bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition group">

          <div class="w-14 h-14 flex items-center justify-center rounded-full bg-red-600 text-white group-hover:scale-110 transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <rect x="9" y="2" width="6" height="4" rx="1"/>
              <path d="M9 4H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-2"/>
            </svg>
          </div>

          <span class="font-semibold">Request Quote</span>
        </a>

        <!-- Track -->
<a href="/pft-website/customer-portal/login.php?return_to=/pft-website/customer-portal/tracking.php"
   class="flex items-center gap-4 bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition group">

  <div class="w-14 h-14 flex items-center justify-center rounded-full bg-red-600 text-white group-hover:scale-110 transition">
    <!-- Location / Route Icon -->
    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
      <circle cx="6" cy="6" r="3"/>
      <circle cx="18" cy="18" r="3"/>
      <path d="M9 6h6M6 9v6M15 18h-6"/>
    </svg>
  </div>

  <span class="font-semibold">Track My Shipment</span>
</a>
        <!-- Contact -->
        <a href="/pft-website/pages/contact.php"
           class="flex items-center gap-4 bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition group">

          <div class="w-14 h-14 flex items-center justify-center rounded-full bg-red-600 text-white group-hover:scale-110 transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path d="M4 4h16v16H4z"/>
              <path d="M4 4l8 8 8-8"/>
            </svg>
          </div>

          <span class="font-semibold">Contact</span>
        </a>

      </div>

    </div>

  </div>
</section>

</div>

<?php include BASE_PATH . 'includes/footer.php'; ?>