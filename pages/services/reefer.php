<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/pft-website/includes/config.php';
include BASE_PATH . 'includes/header.php';
?>

<div class="bg-black text-white">

<!-- ================= INTRO / COLD CHAIN FOCUS ================= -->
<section class="py-28 bg-[#0a0a0a]">
  <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-20 items-center">

    <div>
      <h1 class="text-5xl font-extrabold mb-8 tracking-tight">
        Refrigerated (Reefer) Transportation
      </h1>

      <p class="text-gray-400 text-lg leading-relaxed mb-6">
        Parrish Family Trucking delivers precision temperature-controlled
        logistics designed to protect perishable and sensitive cargo
        across every mile.
      </p>

      <p class="text-gray-500 leading-relaxed mb-10">
        Our refrigerated fleet maintains strict environmental control
        standards for food-grade products, pharmaceuticals, and
        regulated cold-chain shipments.
      </p>

      <!-- Temperature Spec Block -->
      <div class="bg-[#111] border border-gray-800 rounded-xl p-6 inline-block">
        <p class="text-sm text-gray-400">Operational Temperature Range</p>
        <p class="text-2xl font-bold text-red-500">
          -20°F to +70°F
        </p>
      </div>
    </div>

    <!-- <div>
      <img src="<?= BASE_URL ?>assets/images/stepdek7.webp"
           alt="Refrigerated Trailer"
           class="rounded-2xl shadow-2xl">
    </div> -->

  </div>
</section>

<!-- ================= COLD CHAIN FEATURES ================= -->
<section class="py-28 bg-[#0f0f0f]">
  <div class="max-w-7xl mx-auto px-6">

    <h2 class="text-4xl font-bold text-center mb-20">
      Cold Chain Integrity
    </h2>

    <div class="grid md:grid-cols-3 gap-14">

      <div class="bg-[#111] p-10 rounded-2xl border border-gray-800 hover:border-red-600 transition">
        <h3 class="text-xl font-semibold mb-6">
          Food-Grade Compliance
        </h3>
        <p class="text-gray-400 leading-relaxed">
          Adherence to sanitary transport regulations and FSMA guidelines
          for safe food distribution and contamination prevention.
        </p>
      </div>

      <div class="bg-[#111] p-10 rounded-2xl border border-gray-800 hover:border-red-600 transition">
        <h3 class="text-xl font-semibold mb-6">
          Digital Temperature Monitoring
        </h3>
        <p class="text-gray-400 leading-relaxed">
          Continuous tracking systems provide real-time temperature
          visibility throughout transit.
        </p>
      </div>

      <div class="bg-[#111] p-10 rounded-2xl border border-gray-800 hover:border-red-600 transition">
        <h3 class="text-xl font-semibold mb-6">
          Time-Critical Freight
        </h3>
        <p class="text-gray-400 leading-relaxed">
          Optimized scheduling for pharmaceuticals, fresh produce,
          and other sensitive shipments requiring strict delivery windows.
        </p>
      </div>

    </div>

  </div>
</section>

<!-- ================= INDUSTRY APPLICATIONS ================= -->
<section class="py-28 bg-black">
  <div class="max-w-7xl mx-auto px-6">

    <h2 class="text-5xl font-bold text-center mb-20 tracking-tight">
      Industries We Support
    </h2>

    <div class="grid md:grid-cols-4 gap-10 text-center">

      <div class="border border-gray-800 rounded-xl p-8 hover:border-red-600 transition">
        <p class="font-semibold">Fresh Produce</p>
      </div>

      <div class="border border-gray-800 rounded-xl p-8 hover:border-red-600 transition">
        <p class="font-semibold">Frozen Foods</p>
      </div>

      <div class="border border-gray-800 rounded-xl p-8 hover:border-red-600 transition">
        <p class="font-semibold">Pharmaceuticals</p>
      </div>

      <div class="border border-gray-800 rounded-xl p-8 hover:border-red-600 transition">
        <p class="font-semibold">Medical Supplies</p>
      </div>

    </div>

  </div>
</section>

<!-- ================= PROCESS STRIP ================= -->
<section class="py-28 bg-[#0d0d0d]">
  <div class="max-w-6xl mx-auto px-6 text-center">

    <h2 class="text-4xl font-bold mb-16">
      Controlled From Pickup to Delivery
    </h2>

    <div class="grid md:grid-cols-3 gap-12">

      <div>
        <p class="text-red-500 font-bold mb-4">01</p>
        <p class="text-gray-400">Pre-trip temperature calibration and inspection.</p>
      </div>

      <div>
        <p class="text-red-500 font-bold mb-4">02</p>
        <p class="text-gray-400">Continuous in-transit environmental monitoring.</p>
      </div>

      <div>
        <p class="text-red-500 font-bold mb-4">03</p>
        <p class="text-gray-400">Verified temperature integrity upon delivery.</p>
      </div>

    </div>

  </div>
</section>

<!-- ================= QUICK ACCESS (SYSTEM MATCH) ================= -->
<section class="py-24 bg-black">
  <div class="max-w-6xl mx-auto px-6">

    <div class="bg-[] text-black rounded-3xl shadow-2xl py-16 px-10">

      <h2 class="text-3xl font-bold text-center mb-12">
        Quick Access
      </h2>

      <div class="grid md:grid-cols-4 gap-8">

        <!-- Drive -->
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

        <!-- Quote -->
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
<?php
$trackLink = isset($_SESSION['customer_logged_in'])
    ? "/pft-website/customer-portal/tracking.php"
    : "/pft-website/customer-portal/login.php";
?>

<a href="<?= $trackLink; ?>"
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