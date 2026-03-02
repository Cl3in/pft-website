<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/pft-website/includes/config.php';
include BASE_PATH . 'includes/header.php';
?>

<section id="heroSection"
    class="relative overflow-hidden flex items-center justify-center text-white
           h-[300px] sm:h-[400px] md:h-[500px] lg:h-[600px]">

    <!-- Slides Wrapper -->
    <div id="heroSlides" class="relative w-full h-full"></div>

    <!-- Left Arrow -->
    <button id="prevSlide"
        class="absolute left-4 sm:left-6 top-1/2 -translate-y-1/2 z-30 
               text-white text-3xl sm:text-4xl opacity-70 hover:opacity-100 transition">
        ‹
    </button>

    <!-- Right Arrow -->
    <button id="nextSlide"
        class="absolute right-4 sm:right-6 top-1/2 -translate-y-1/2 z-30 
               text-white text-3xl sm:text-4xl opacity-70 hover:opacity-100 transition">
        ›
    </button>

    <!-- CTA Button -->
    <div class="absolute bottom-10 sm:bottom-16 w-full flex justify-center z-30">
        <a href="/pft-website/pages/contact.php"
           class="bg-red-600 hover:bg-red-700 text-white 
                  px-8 sm:px-12 py-3 sm:py-4 
                  rounded-full text-lg font-semibold 
                  shadow-xl hover:scale-105 transition-all duration-300">
            Request a Quote
        </a>
    </div>

</section>

<section class="py-20 bg-[#181818] text-white">
  <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

    <div>

      <h2 class="text-4xl font-bold mb-6">About Parrish Trucking Company</h2>
      
<p class="text-lg text-gray-300 leading-relaxed mb-6">
  PFT builds strong partnerships with customers who value the shipping 
  industry and understand the importance of fair compensation. In return, 
  we provide personalized service, professional communication, dependable 
  on-time delivery, and competitive rates.
</p>

<a href="/pft-website/pages/about.php"
   class="mt-6 inline-block bg-red-600 text-white px-8 py-3 rounded-full shadow-lg hover:bg-red-700 transition">
   Read More
   <span class="ml-2 transform group-hover:translate-x-1 transition">
     →
   </span>
</a>

  <!-- <br><br>

  PFT builds strong partnerships with customers who value the shipping 
  industry and understand the importance of fair compensation. In return, 
  we provide personalized service, professional communication, dependable 
  on-time delivery, and competitive rates.

  <br><br>

  Above all, we are committed to cultivating long-term relationships  
  with customers who trust our service and with drivers who thrive in an 
  environment that supports their growth, well-being, and success. -->
</p>

  <div>
<a href="/pft-website/pages/contact.php"
   class="mt-6 inline-block bg-red-600 text-white px-8 py-3 rounded-full shadow-lg hover:bg-red-700 transition">
   Partner With Us
</a>
  </div>

</div>

    <!-- IMAGE PLACEHOLDER -->
    <div>
     <img src="<?= BASE_URL ?>assets/images/stepdek9.webp"
           class="rounded-xl shadow-2xl w-full object-cover"
           alt="Parrish Trucking Fleet">
    </div>

  </div>
</section>

<section class="py-20 bg-[#181818] text-white">
  <div class="max-w-7xl mx-auto px-6 text-center">

    <h2 class="text-4xl font-bold mb-12">Our Freight Services</h2>

    <div class="grid md:grid-cols-3 gap-10">

      <!-- Flatbed -->
      <div class="bg-white rounded-xl shadow-lg overflow-hidden">
        <img src="<?= BASE_URL ?>assets/images/flatbed1.webp" class="w-full h-56 object-cover">
        <div class="p-6">
          <h3 class="text-2xl font-semibold mb-3 text-red-600">
           Flatbed Transport
        </h3>
          <p class="mb-4 text-gray-600">
            Secure hauling for oversized and specialized cargo.
          </p>
          <a href="/pft-website/pages/services/flatbed.php"
             class="text-red-600 font-semibold hover:underline">
             Learn More →
          </a>
        </div>
      </div>

      <!-- Stepdeck -->
      <div class="bg-white rounded-xl shadow-lg overflow-hidden">
        <img src="<?= BASE_URL ?>assets/images/stepdek5.webp" class="w-full h-56 object-cover">
        <div class="p-6">
          <h3 class="text-2xl font-semibold mb-3 text-red-600">Stepdeck Hauling</h3>
          <p class="mb-4 text-gray-600">
            Flexible height solutions for specialized freight.
          </p>
          <a href="/pft-website/pages/services/stepdeck.php"
             class="text-red-600 font-semibold hover:underline">
             Learn More →
          </a>
        </div>
      </div>

      <!-- Reefer -->
      <div class="bg-white rounded-xl shadow-lg overflow-hidden">
       <img src="<?= BASE_URL ?>assets/images/stepdek3" class="w-full h-56 object-cover">
        <div class="p-6">
          <h3 class="text-2xl font-semibold mb-3 text-red-600">Refrigerated Freight</h3>
          <p class="mb-4 text-gray-600">
            Temperature-controlled transport for sensitive cargo.
            Coming Soon
          </p>
          <a href="/pft-website/pages/services/reefer.php"
             class="text-red-600 font-semibold hover:underline">
             Learn More →
          </a>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="py-16 bg-[#1a1a1a]">
  <div class="max-w-6xl mx-auto px-6">

    <!-- Inner Box -->
<div class="bg-white text-black rounded-2xl py-12 px-8 text-center shadow-2xl">
  
<h2 class="text-3xl font-bold mb-10 tracking-wide text-black text-center">
  Quick Access
</h2>

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

  <!-- Freight Tracking -->
<?php
$trackingLink = isset($_SESSION['customer_logged_in'])
    ? "/pft-website/customer-portal/tracking.php"
    : "/pft-website/customer-portal/login.php";
?>

<a href="<?= $trackingLink; ?>"
   class="group bg-white shadow-md rounded-xl p-6 flex items-center gap-4 hover:shadow-xl hover:-translate-y-1 transition duration-300">

   <div class="w-12 h-12 flex items-center justify-center rounded-full bg-red-600 text-white text-xl group-hover:bg-red-700 transition">
      <i class="fa-solid fa-truck-fast"></i>
   </div>

   <span class="text-lg font-semibold text-gray-800 group-hover:text-red-600 transition">
      Freight Tracking
   </span>
</a>

  <!-- Careers -->
  <a href="/pft-website/pages/careers.php"
     class="group bg-white shadow-md rounded-xl p-6 flex items-center gap-4 hover:shadow-xl hover:-translate-y-1 transition duration-300">

     <div class="w-12 h-12 flex items-center justify-center rounded-full bg-red-600 text-white text-xl group-hover:bg-red-700 transition">
        <i class="fa-solid fa-user-tie"></i>
     </div>

     <span class="text-lg font-semibold text-gray-800 group-hover:text-red-600 transition">
        Careers
     </span>
  </a>

  <!-- Safety -->
  <a href="/pft-website/pages/safety.php"
     class="group bg-white shadow-md rounded-xl p-6 flex items-center gap-4 hover:shadow-xl hover:-translate-y-1 transition duration-300">

     <div class="w-12 h-12 flex items-center justify-center rounded-full bg-red-600 text-white text-xl group-hover:bg-red-700 transition">
        <i class="fa-solid fa-shield-halved"></i>
     </div>

     <span class="text-lg font-semibold text-gray-800 group-hover:text-red-600 transition">
        Safety & Compliance
     </span>
  </a>

  <!-- Contact -->
  <a href="/pft-website/pages/contact.php"
     class="group bg-white shadow-md rounded-xl p-6 flex items-center gap-4 hover:shadow-xl hover:-translate-y-1 transition duration-300">

     <div class="w-12 h-12 flex items-center justify-center rounded-full bg-red-600 text-white text-xl group-hover:bg-red-700 transition">
        <i class="fa-solid fa-envelope"></i>
     </div>

     <span class="text-lg font-semibold text-gray-800 group-hover:text-red-600 transition">
        Contact Us
     </span>
  </a>

</div>

</div>

  </div>
</section>

<section class="py-20 bg-[#111111] text-white">
  <div class="max-w-5xl mx-auto px-6 text-center">

    <h2 class="text-4xl font-bold mb-12">
      What Our Clients Say
    </h2>

    <div class="space-y-10">

      <!-- Review 1 -->
      <div class="bg-[#1c1c1c] p-8 rounded-xl shadow-lg">
        
        <!-- Stars -->
        <div class="text-yellow-400 text-2xl mb-4">
          ★★★★★
        </div>

        <p class="text-lg italic text-gray-300">
          "Parrish Trucking handled our freight with precision and professionalism.
          Every shipment arrived on time without issues."
        </p>

        <div class="mt-4 font-semibold text-white">
          — Michael Anderson
        </div>

      </div>

      <!-- Review 2 -->
      <div class="bg-[#1c1c1c] p-8 rounded-xl shadow-lg">

        <!-- Stars -->
        <div class="text-yellow-400 text-2xl mb-4">
          ★★★★★
        </div>

        <p class="text-lg italic text-gray-300">
          "Outstanding communication and dependable drivers.
          We trust them with our most important loads."
        </p>

        <div class="mt-4 font-semibold text-white">
          — Jessica Miller
        </div>

      </div>

      <!-- Review 3 -->
      <div class="bg-[#1c1c1c] p-8 rounded-xl shadow-lg">

        <!-- Stars -->
        <div class="text-yellow-400 text-2xl mb-4">
          ★★★★★
        </div>

        <p class="text-lg italic text-gray-300">
          "Reliable, efficient, and easy to work with.
          Parrish Trucking is our go-to logistics partner."
        </p>

        <div class="mt-4 font-semibold text-white">
          — Daniel Roberts
        </div>

      </div>

    </div>

  </div>
</section>

<section class="py-20 bg-[#181818] text-white">
  <div class="max-w-6xl mx-auto px-6 text-center">

    <h2 class="text-4xl font-bold mb-8">
      Our Location
    </h2>

    <div class="rounded-xl overflow-hidden shadow-2xl border border-[#222]">
      <iframe 
        src="https://www.google.com/maps?q=4295+Cromwell+Rd+Ste+418+Chattanooga+TN+37421&output=embed"
        width="100%" 
        height="400" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy">
      </iframe>
    </div>

    <p class="text-lg text-white mb-6">
      4295 Cromwell Rd Ste 418<br>
      Chattanooga, TN 37421
    </p>

  </div>
</section>

<script>
document.addEventListener("DOMContentLoaded", function () {

    const BASE_URL = "<?= BASE_URL ?>";

    const images = [
        BASE_URL + "assets/images/loading.jpg",
        BASE_URL + "assets/images/stepdek5.webp",
        BASE_URL + "assets/images/stepdek6.webp",
        BASE_URL + "assets/images/flatbed1.webp",
        BASE_URL + "assets/images/stepdek3.webp",
        BASE_URL + "assets/images/flatbed2.webp",
        BASE_URL + "assets/images/flatbed3.webp",
        BASE_URL + "assets/images/flatbed6.webp",
        BASE_URL + "assets/images/stepdek.webp",
        BASE_URL + "assets/images/stepdek1.webp",
        BASE_URL + "assets/images/stepdek2.webp",
        BASE_URL + "assets/images/stepdek9.webp",
        BASE_URL + "assets/images/stepdek8.webp",
        BASE_URL + "assets/images/flatbed.webp",
        BASE_URL + "assets/images/stepdek7.webp"
    ];

    const heroSection = document.getElementById("heroSection");
    const container = document.getElementById("heroSlides");
    const nextBtn = document.getElementById("nextSlide");
    const prevBtn = document.getElementById("prevSlide");

    let current = 0;
    let interval;
    const duration = 6000;
    let startX = 0;

    // Create slides
    images.forEach((src, index) => {
        const slide = document.createElement("div");
        slide.className = `absolute inset-0 transition-opacity duration-1000 ${index === 0 ? "opacity-100" : "opacity-0"}`;

        slide.innerHTML = `
            <img src="${src}" loading="lazy" 
                 class="hero-image w-full h-full object-cover transition-transform duration-300">
            <div class="absolute inset-0 bg-black/60"></div>
        `;

        container.appendChild(slide);
    });

    const slides = container.children;

    function showSlide(index) {
        for (let i = 0; i < slides.length; i++) {
            slides[i].classList.remove("opacity-100");
            slides[i].classList.add("opacity-0");
        }
        slides[index].classList.remove("opacity-0");
        slides[index].classList.add("opacity-100");
    }

    function nextSlide() {
        current = (current + 1) % slides.length;
        showSlide(current);
    }

    function prevSlide() {
        current = (current - 1 + slides.length) % slides.length;
        showSlide(current);
    }

    function startAuto() {
        interval = setInterval(nextSlide, duration);
    }

    function stopAuto() {
        clearInterval(interval);
    }

    // Buttons
    nextBtn.addEventListener("click", nextSlide);
    prevBtn.addEventListener("click", prevSlide);

    // Pause on hover
    heroSection.addEventListener("mouseenter", stopAuto);
    heroSection.addEventListener("mouseleave", startAuto);

    // Swipe support
    heroSection.addEventListener("touchstart", e => {
        startX = e.touches[0].clientX;
    });

    heroSection.addEventListener("touchend", e => {
        let diff = e.changedTouches[0].clientX - startX;
        if (diff > 70) prevSlide();
        if (diff < -70) nextSlide();
    });

    // Parallax
    heroSection.addEventListener("mousemove", e => {
        const images = document.querySelectorAll(".hero-image");
        const x = (e.clientX / window.innerWidth - 0.5) * 8;
        const y = (e.clientY / window.innerHeight - 0.5) * 8;

        images.forEach(img => {
            img.style.transform = `scale(1.05) translate(${x}px, ${y}px)`;
        });
    });

    startAuto();

});
</script>
<?php include BASE_PATH . 'includes/footer.php'; ?>