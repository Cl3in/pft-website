<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/pft-website/includes/config.php';
include BASE_PATH . 'includes/header.php';
?>

<!-- ================= PAGE WRAPPER ================= -->
<div class="bg-black text-white">

<!-- ================= INTRO SECTION ================= -->
<section class="py-24 bg-[#0d0d0d]">
  <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center">

    <div>
      <h1 class="text-5xl font-extrabold mb-8 tracking-tight">
        Flatbed Transportation Services
      </h1>

      <p class="text-gray-300 text-lg leading-relaxed mb-6">
        Parrish Family Trucking provides high-performance open-deck freight
        solutions engineered for oversized, heavy, and industrial cargo.
        Our flatbed division supports construction, infrastructure,
        manufacturing, and energy sectors nationwide.
      </p>

      <p class="text-gray-300 leading-relaxed">
        With compliance-driven routing, advanced load securement systems,
        and experienced CDL professionals, we ensure freight integrity
        from pickup to final delivery.
      </p>
    </div>

    <div>
      <img src="<?= BASE_URL ?>assets/images/flatbed.webp"
           alt="Flatbed Trucking Services"
           class="rounded-2xl shadow-2xl">
    </div>

  </div>
</section>

<!-- ================= CORE CAPABILITIES ================= -->
<section class="py-24 bg-black">
  <div class="max-w-7xl mx-auto px-6">

    <h2 class="text-4xl font-bold text-center mb-20">
      Core Capabilities
    </h2>

    <div class="grid md:grid-cols-3 gap-12">

      <div class="bg-[#111] border border-gray-800 p-10 rounded-2xl hover:border-red-600 transition">
        <h3 class="text-xl font-bold text-red-500 mb-6">
          Oversized & Heavy Haul
        </h3>
        <p class="text-gray-300 leading-relaxed">
          Transport of large-scale industrial components, structural steel,
          and machinery with DOT-compliant planning and escort coordination.
        </p>
      </div>

      <div class="bg-[#111] border border-gray-800 p-10 rounded-2xl hover:border-red-600 transition">
        <h3 class="text-xl font-bold text-red-500 mb-6">
          Advanced Securement Systems
        </h3>
        <p class="text-gray-400 leading-relaxed">
          Professional tie-down configurations, tarping protection,
          load balancing, and vibration mitigation protocols.
        </p>
      </div>

      <div class="bg-[#111] border border-gray-800 p-10 rounded-2xl hover:border-red-600 transition">
        <h3 class="text-xl font-bold text-red-500 mb-6">
          Nationwide Coverage
        </h3>
        <p class="text-gray-400 leading-relaxed">
          Regional and long-haul flatbed transport supported by real-time
          shipment tracking and logistics coordination.
        </p>
      </div>

    </div>

  </div>
</section>

<!-- ================= EDITORIAL ARTICLE GRID ================= -->
<section class="py-28 bg-[#0b0b0b] relative">
  <div class="max-w-7xl mx-auto px-6">

    <h2 class="text-5xl font-bold text-center mb-20 tracking-tight">
      Flatbed Logistics Intelligence
    </h2>

    <div class="grid md:grid-cols-3 gap-10">

      <!-- Article 1 -->
      <article class="group bg-[#111] rounded-2xl border border-gray-800 overflow-hidden hover:border-red-600 transition">

        <img src="<?= BASE_URL ?>assets/images/flatbed2.webp"
             class="h-64 w-full object-cover group-hover:scale-105 transition duration-700"
             alt="Construction Freight Transport">

        <div class="p-8">
          <h3 class="text-2xl font-semibold mb-4">
            Construction Freight Efficiency
          </h3>

          <p class="text-gray-400 leading-relaxed">
            Open-deck trailers enable direct crane loading, reduced dock
            dependency, and faster material deployment for large-scale
            construction projects.
          </p>
        </div>

      </article>

      <!-- Article 2 -->
      <article class="group bg-[#111] rounded-2xl border border-gray-800 overflow-hidden hover:border-red-600 transition">

        <img src="<?= BASE_URL ?>assets/images/flatbed3.webp"
             class="h-64 w-full object-cover group-hover:scale-105 transition duration-700"
             alt="Heavy Equipment Hauling">

        <div class="p-8">
          <h3 class="text-2xl font-semibold mb-4">
            Heavy Equipment Logistics
          </h3>

          <p class="text-gray-400 leading-relaxed">
            Precision load distribution and engineered tie-down systems
            protect excavators, cranes, and agricultural machinery during transit.
          </p>
        </div>

      </article>

      <!-- Article 3 -->
      <article class="group bg-[#111] rounded-2xl border border-gray-800 overflow-hidden hover:border-red-600 transition">

        <img src="<?= BASE_URL ?>assets/images/flatbed6.webp"
             class="h-64 w-full object-cover group-hover:scale-105 transition duration-700"
             alt="Industrial Supply Chain Support">

        <div class="p-8">
          <h3 class="text-2xl font-semibold mb-4">
            Industrial Supply Chain Support
          </h3>

          <p class="text-gray-400 leading-relaxed">
            Scalable flatbed capacity supporting energy, manufacturing,
            and infrastructure supply chains across the United States.
          </p>
        </div>

      </article>

    </div>

  </div>
</section>

<!-- ================= QUICK ACCESS PANEL ================= -->
<section class="py-24 bg-black">
  <div class="max-w-6xl mx-auto px-6">

    <div class="bg-[#404040] text-black rounded-3xl shadow-2xl py-16 px-10">

      <h2 class="text-3xl font-bold text-center mb-12">
        Quick Access
      </h2>

      <div class="grid md:grid-cols-4 gap-8">

        <!-- Drive With PFT -->
        <a href="/pft-website/pages/careers.php"
           class="flex items-center gap-4 bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition group">

          <div class="w-14 h-14 flex items-center justify-center rounded-full bg-red-600 text-white group-hover:scale-110 transition">
            <!-- Steering Wheel Icon -->
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
            <!-- Clipboard Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <rect x="9" y="2" width="6" height="4" rx="1"/>
              <path d="M9 4H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-2"/>
            </svg>
          </div>

          <span class="font-semibold">Request Quote</span>
        </a>

        <!-- Track Shipment -->
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
            <!-- Mail Icon -->
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