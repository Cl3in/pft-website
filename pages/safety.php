<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/pft-website/includes/config.php';
include BASE_PATH . 'includes/header.php';
?>

<section class="py-24 bg-gradient-to-b from-white to-gray-100">
  <div class="max-w-5xl mx-auto px-6 text-center">

    <!-- Page Title -->
    <h2 class="text-4xl font-bold mb-12 text-black">
      DOT & Compliance Information
    </h2>

    <!-- DARK COMPLIANCE CARD -->
    <div class="bg-[#181818] text-white p-14 rounded-xl shadow-2xl">

      <!-- DOT -->
      <p class="font-['Oswald'] text-4xl md:text-5xl font-medium tracking-[0.35em] text-[#ff4d4d] opacity-90 mb-10 uppercase">
        DOT # 3549816
      </p>

      <!-- MC NUMBER (Add yours if available) -->
      <p class="font-['Oswald'] text-3xl md:text-4xl font-medium tracking-[0.3em] text-[#ff4d4d] opacity-85 mb-10 uppercase">
        MC # XXXXXXX
      </p>

      <!-- DUNS -->
      <p class="font-['Oswald'] text-4xl md:text-5xl font-medium tracking-[0.35em] text-[#ff4d4d] opacity-90 mb-20 uppercase">
        D-U-N-S #: 12-829-9945
      </p>

      <!-- CONTACT -->
      <h3 class="font-['Oswald'] text-4xl font-medium tracking-[0.6em] text-[#ff4d4d] opacity-95 mb-10 uppercase">
        CONTACT
      </h3>

      <!-- Contact Details -->
      <div class="font-['Oswald'] text-2xl tracking-[0.25em] text-[#ff6666] opacity-80 space-y-6 uppercase">
        <p>www.parrishft.com</p>
        <p>info@parrishft.com</p>
        <p>1-423-680-1238</p>
      </div>

      <!-- FMCSA VERIFY BUTTON -->
      <div class="mt-12">
<a href="https://www.fmcsa.dot.gov/registration"
   target="_blank"
   class="inline-block bg-red-600 hover:bg-red-700 text-white px-8 py-3 rounded-full transition">
   Verify DOT Status on FMCSA
</a>
      </div>

    </div>

    <!-- TRUST & COMPLIANCE SECTION -->
    <div class="mt-20 grid md:grid-cols-3 gap-10 text-center">

      <div class="bg-white p-8 rounded-lg shadow-md">
        <h4 class="text-xl font-semibold mb-3 text-black">
          Fully Insured
        </h4>
        <p class="text-gray-600">
          Active Liability & Cargo Insurance Coverage
        </p>
      </div>

      <div class="bg-white p-8 rounded-lg shadow-md">
        <h4 class="text-xl font-semibold mb-3 text-black">
          FMCSA Compliant
        </h4>
        <p class="text-gray-600">
          Operating Authority Active & In Good Standing
        </p>
      </div>

      <div class="bg-white p-8 rounded-lg shadow-md">
        <h4 class="text-xl font-semibold mb-3 text-black">
          Safety Focused
        </h4>
        <p class="text-gray-600">
          Strict DOT Safety & Regulatory Standards
        </p>
      </div>

    </div>

    <!-- INSURANCE REQUEST -->
    <div class="mt-14">
<a href="/pft-website/pages/contact.php"
   class="mt-6 inline-block bg-red-600 text-white px-8 py-3 rounded-full shadow-lg hover:bg-red-700 transition">
   Request Certificate of Insurance
</a>
    </div>

    <!-- LAST UPDATED -->
    <p class="mt-8 text-sm text-gray-500">
      Compliance Information Last Updated: <?php echo date("F Y"); ?>
    </p>

  </div>
</section>

<?php include BASE_PATH . 'includes/footer.php'; ?>