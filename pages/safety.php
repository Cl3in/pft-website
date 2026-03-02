<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/pft-website/includes/config.php';
include BASE_PATH . 'includes/header.php';
?>
<section class="py-20 bg-white">
  <div class="max-w-5xl mx-auto px-6 text-center">

    <h2 class="text-4xl font-bold mb-6 text-black">
      DOT & Compliance Information
    </h2>

    <div class="bg-[#181818] text-white p-10 rounded-xl shadow-2xl">

      <p class="text-2xl font-bold mb-4 text-red-500">
        USDOT #: 1234567
      </p>

      <p class="text-lg mb-6">
        Fully registered and compliant with FMCSA regulations.
      </p>

      <a href="https://safer.fmcsa.dot.gov/CompanySnapshot.aspx"
         target="_blank"
         class="inline-block bg-red-600 px-8 py-3 rounded-full hover:bg-red-700 transition">
         Verify DOT Status
      </a>

    </div>

  </div>
</section>
<?php include BASE_PATH . 'includes/footer.php'; ?>