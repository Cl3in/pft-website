<?php
require_once __DIR__ . '/../includes/config.php';
include BASE_PATH . 'includes/header.php';
?>

<!-- ABOUT INTRO -->
<section class="py-20 bg-[#0A0A0A] text-white">
  <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

    <div>
      <h2 class="text-4xl font-extrabold mb-4">
      Who We Are
      </h2>

      <p>
        Parrish Family Trucking is headquartered in Chattanooga, TN and
        offers personalized and professional customer interactions,
        on-time delivery, safe and secure transportation, and reasonable
        rates. We aim to streamline services as we continue to grow to
        match the increasing needs of our customers while providing
        Professional and Safe Drivers.
      </p>

      <p class="text-lg text-gray-300 leading-relaxed mb-4">
        Parrish Family Trucking (PFT) is a professional freight carrier delivering safe,
        dependable, and efficient transportation services across the United States.
      </p>

      <p class="text-lg text-gray-300 leading-relaxed">
        Built on family values and long-standing industry relationships, we focus on
        consistency, trust, and performance — mile after mile.
      </p>
    </div>

    <div class="relative">
      <img src="<?= BASE_URL ?>assets/images/stepdek1.webp"
           class="rounded-2xl shadow-xl w-full object-cover">
      <div class="absolute inset-0 rounded-2xl bg-black/30"></div>
    </div>

  </div>
</section>

<!-- MISSION & VALUES -->
<section class="relative py-20 text-white overflow-hidden">

  <!-- Background Image -->
  <div class="absolute inset-0">
    <img src="<?= BASE_URL ?>assets/images/stepdek3.webp"
         alt="Mission Background"
         class="w-full h-full object-cover">
  </div>

  <!-- Dark Overlay -->
  <div class="absolute inset-0 bg-black bg-opacity-70"></div>

  <!-- Content -->
  <div class="relative z-10 max-w-7xl mx-auto px-6">

    <h2 class="text-4xl font-extrabold text-center mb-12">
      🎯 Mission & Core Values
    </h2>

    <div class="grid md:grid-cols-4 gap-8">

      <div class="bg-white p-8 rounded-2xl shadow hover:shadow-xl transition">
        <div class="text-4xl mb-4">🛡️</div>
        <h3 class="text-xl font-bold mb-2 text-red-600">Safety First</h3>
        <p class="text-gray-700">
          Every decision we make is guided by the safety of our drivers and the public.
        </p>
      </div>

      <div class="bg-white p-8 rounded-2xl shadow hover:shadow-xl transition">
        <div class="text-4xl mb-4">🤝</div>
        <h3 class="text-xl font-bold mb-2 text-red-600">Integrity</h3>
        <p class="text-gray-700">
          Honest communication and accountability define how we do business.
        </p>
      </div>

      <div class="bg-white p-8 rounded-2xl shadow hover:shadow-xl transition">
        <div class="text-4xl mb-4">🚚</div>
        <h3 class="text-xl font-bold mb-2 text-red-600">Reliability</h3>
        <p class="text-gray-700">
          On-time delivery and dependable service for every load.
        </p>
      </div>

      <div class="bg-white p-8 rounded-2xl shadow hover:shadow-xl transition">
        <div class="text-4xl mb-4">📈</div>
        <h3 class="text-xl font-bold mb-2 text-red-600">Excellence</h3>
        <p class="text-gray-700">
          We never stop improving our fleet, training, or service quality.
        </p>
      </div>

    </div>
  </div>
</section>

<!-- LEADERSHIP + SAFETY -->
<section class="py-20 bg-[#181818] text-white">
  <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12">

<section class="py-20 bg-[#181818] text-white">
  <div class="max-w-7xl mx-auto px-6 text-center">

    <div class="mb-12 text-center">
      <h2 class="text-3xl font-extrabold mb-4 text-red-600">👥 Leadership Team</h2>
      <p class="block text-gray-300 leading-relaxed max-w-2xl mx-auto text-xl">
        Our leadership team brings decades of transportation and logistics experience,
        guiding PFT with a strong focus on performance, compliance, and people-first operations.
        All leaders have a strong military background and ownership experience, ensuring discipline and strategic excellence.
      </p>
    </div>

  </div>
</section>

    <div class="bg-white p-10 rounded-2xl shadow">
      <h2 class="text-3xl font-extrabold mb-4 text-red-600">🦺 Safety Commitment</h2>
      <p class="text-gray-700 leading-relaxed">
        We maintain strict compliance with all federal and state regulations, invest in
        driver training, and uphold rigorous maintenance standards to ensure safe delivery
        on every route.
      </p>
    </div>

  </div>
</section>

<!-- CERTIFICATION -->
<section class="py-20 bg-[#0A0A0A] text-white">
  <div class="max-w-5xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

    <div>
      <h2 class="text-4xl font-extrabold mb-4">
        🏅 100% SDVOB Certified
      </h2>
      <p class="text-gray-300 text-lg leading-relaxed">
        Parrish Family Trucking is proudly certified as a Service-Disabled Veteran-Owned Business (SDVOB),
        reflecting our commitment to discipline, service, and operational excellence.
      </p>
    </div>

    <div class="bg-[#181818] rounded-2xl p-6 flex items-center justify-center shadow-xl">
      <img src="<?= BASE_URL ?>assets/images/sdvob-cert.webp"
           alt="SDVOB Certification"
           class="max-h-64 object-contain">
    </div>

  </div>
</section>

<?php include BASE_PATH . 'includes/footer.php'; ?>