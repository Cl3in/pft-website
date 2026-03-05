<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/pft-website/includes/config.php';
include BASE_PATH . 'includes/header.php';
?>

<section id="heroSection"
    class="relative overflow-hidden text-white
           min-h-[500px] lg:min-h-[650px]
           flex flex-col lg:flex-row">

    <!-- LEFT SIDE (20%) -->
<div class="relative w-full lg:w-1/5
            min-h-[220px] lg:min-h-full
            border-r border-gray-800
            flex items-center justify-center
            p-8 lg:p-10
            overflow-hidden">

    <!-- Background Image -->
    <img src="<?= BASE_URL ?>assets/images/flatbed1.webp"
         class="absolute inset-0 w-full h-full object-cover
                blur-2xl scale-125 opacity-50">

    <!-- Softer Overlay -->
    <div class="absolute inset-0 bg-black/40"></div>

    <!-- Logo -->
    <a href="/pft-website/index.php" class="relative z-10">
        <img src="<?= BASE_URL ?>assets/images/logo.png"
             class="h-32 lg:h-40 w-auto object-contain
                    drop-shadow-2xl hover:scale-105 transition duration-500">
    </a>

</div>

    <!-- RIGHT SIDE (80%) -->
    <div class="relative w-full lg:w-4/5
            min-h-[350px] sm:min-h-[400px] lg:min-h-full
            flex items-center justify-center
            overflow-hidden">

        <!-- Slides Wrapper -->
        <div id="heroSlides" class="absolute inset-0 w-full h-full"></div>

        <!-- Left Arrow -->
        <button id="prevSlide"
            class="absolute left-6 top-1/2 -translate-y-1/2 z-30
                   text-white text-4xl opacity-70 hover:opacity-100 transition">
            ‹
        </button>

        <!-- Right Arrow -->
        <button id="nextSlide"
            class="absolute right-6 top-1/2 -translate-y-1/2 z-30
                   text-white text-4xl opacity-70 hover:opacity-100 transition">
            ›
        </button>

        <!-- CTA Button -->
        <div class="absolute bottom-12 w-full flex justify-center z-30">
            <a href="/pft-website/pages/contact.php"
               class="bg-red-600 hover:bg-red-700 text-white
                      px-10 py-4
                      rounded-full text-lg font-semibold
                      shadow-xl hover:scale-105 transition-all duration-300">
                Request a Quote
            </a>
        </div>

    </div>

</section>

<section class="py-24 relative overflow-hidden">

<!-- BACKGROUND IMAGE -->
<div class="absolute inset-0">
    <img src="<?= BASE_URL ?>assets/images/stepdek3.webp"
         alt="Background"
    class="w-full h-full object-cover blur-1xl opacity-20 scale-110">
</div>

<!-- SOFT DARK OVERLAY -->
<div class="absolute inset-0 bg-black/70"></div>

<div class="relative max-w-7xl mx-auto px-6">

<div class="flex flex-col lg:flex-row items-center lg:items-start justify-start gap-12 lg:gap-24">
  <!-- CARD -->
<div class="bg-white shadow-2xl rounded-xl overflow-hidden w-[420px]">

<div class="grid grid-cols-2">

<!-- LEFT IMAGES -->
<div class="flex flex-col">

<img src="<?= BASE_URL ?>assets/images/stepdek3.webp"
class="h-52 w-full object-cover"
alt="Flatbed Transport">

<img src="<?= BASE_URL ?>assets/images/flatbed1.webp"
class="h-52 w-full object-cover bg-black p-4"
alt="Parrish Family Trucking Logo">

</div>

<!-- RIGHT CONTENT -->
<div class="p-6 text-sm">

<h2 class="text-lg font-bold text-red-600 mb-4 tracking-wider">
TRANSPORTATION
</h2>

<h3 class="text-sm font-semibold text-red-600 mb-3">
OUR SERVICES
</h3>

<ul class="text-gray-700 space-y-1 mb-4">
<li>Flatbed</li>
<li>Stepdeck</li>
<li>Oversize / Wide Load</li>
<li>Power Only</li>
</ul>

<p class="text-gray-600 mb-3 text-xs leading-relaxed">
Parrish Family Trucking uses <strong>Verizon Reveal Connect Fleet
Management</strong> for dispatching, tracking deliveries, driver
efficiency monitoring, and integrated camera safety systems.
</p>

<p class="text-gray-600 mb-4 text-xs">
Member of the <strong>National Association of Small Trucking
Companies (NASTC)</strong>.
</p>

<div class="flex items-center gap-4 mb-4">

<a href="https://www.verizonconnect.com" target="_blank">
<img src="<?= BASE_URL ?>assets/images/verizon-connect.png"
class="h-7">
</a>

<a href="https://nastc.com" target="_blank">
<img src="<?= BASE_URL ?>assets/images/nastc.png"
class="h-7">
</a>

</div>

<div class="text-gray-700 text-xs leading-relaxed">
<p><strong>DOT #</strong> 3549816</p>
<p><strong>D-U-N-S #</strong> 12-829-9945</p>
</div>

</div>

</div>
</div>
<!-- END CARD -->

<!-- RIGHT SIDE TEXT -->
<div class="max-w-2xl text-white">

<h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6 leading-tight">
Ready to Move Your Freight?<br>
Partner With a Team You Can Trust.
</h2>



<ul class="space-y-3 text-gray-200 text-lg">
<li>✔ Safe & Reliable Freight Delivery</li>
<li>✔ Real-Time Shipment Tracking</li>
<li>✔ Advanced Fleet Technology</li>
<li>✔ Professional Dispatch & Logistics</li>
</ul>

</div>

</div>
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

<section class="relative py-16 overflow-hidden">

<!-- Background Image -->
<div class="absolute inset-0">
  <img src="<?= BASE_URL ?>assets/images/stepdek6.webp"
       alt="Freight Truck"
       class="w-full h-full object-cover">
</div>

<!-- Dark Overlay -->
<div class="absolute inset-0 bg-black/70"></div>

<div class="relative z-10 max-w-6xl mx-auto px-6">

<!-- Inner Box -->
<div class="bg-white/95 backdrop-blur-md text-black rounded-2xl py-12 px-8 text-center shadow-2xl">

<h2 class="text-3xl font-bold mb-10 tracking-wide text-black text-center">
  Quick Access
</h2>

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

<!-- Freight Tracking -->
<a href="/pft-website/customer-portal/login.php?return_to=/pft-website/customer-portal/tracking.php"
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

<section class="bg-[#0f0f0f] py-24 px-6 relative">


<!-- TAB STYLE TITLE -->
<div class="flex justify-center mb-14">

    <div class="relative inline-block">

        <!-- Oval Background -->
        <div class="absolute inset-0 bg-red-600 rounded-full shadow-lg"></div>

        <!-- Text -->
        <h2 class="relative z-10 text-white text-3xl md:text-4xl font-bold
                   px-12 py-4 tracking-wide">
            Our Fleet
        </h2>

    </div>

</div>

    <!-- Updated Description -->
    <p class="text-gray-400 text-center max-w-3xl mx-auto mb-16 leading-relaxed">
        Reliable flatbed, stepdeck and oversize load trailers engineered for performance, safety
        and dependable nationwide hauling solutions.
    </p>

    <!-- Masonry Layout -->
    <div id="fleetContainer" class="columns-1 sm:columns-2 lg:columns-3 xl:columns-4 gap-6 space-y-6">

        <?php
        $fleetImages = [
            BASE_URL . "assets/images/loading.jpg",
            BASE_URL . "assets/images/stepdek5.webp",
            BASE_URL . "assets/images/stepdek6.webp",
            BASE_URL . "assets/images/flatbed1.webp",
            BASE_URL . "assets/images/stepdek3.webp",
            BASE_URL . "assets/images/flatbed2.webp",
            BASE_URL . "assets/images/flatbed3.webp",
            BASE_URL . "assets/images/flatbed6.webp",
            BASE_URL . "assets/images/stepdek.webp",
            BASE_URL . "assets/images/stepdek1.webp",
            BASE_URL . "assets/images/stepdek2.webp",
            BASE_URL . "assets/images/stepdek9.webp",
            BASE_URL . "assets/images/stepdek8.webp",
            BASE_URL . "assets/images/flatbed.webp",
            BASE_URL . "assets/images/stepdek7.webp"
        ];

        foreach ($fleetImages as $image) :
        ?>

        <div class="relative break-inside-avoid cursor-pointer group fleet-item opacity-0 translate-y-10 transition-all duration-700">

            <img src="<?= $image; ?>"
                 class="w-full rounded-xl shadow-lg transition duration-700 group-hover:scale-105">

            <!-- Specs Overlay -->
            <div class="absolute inset-0 bg-black/70 rounded-xl
                        opacity-0 group-hover:opacity-100
                        flex items-center justify-center text-white text-center
                        transition duration-500 px-4">

                <!-- <div>
                    <h3 class="text-lg font-semibold">Equipment Specs</h3>
                    <p class="text-sm text-gray-300 mt-2">
                        Heavy-duty trailers built for flatbed, stepdeck & oversize freight.
                    </p>
                </div> -->

            </div>

        </div>

        <?php endforeach; ?>

    </div>

</section>

<!-- LIGHTBOX -->
<div id="lightbox"
     class="fixed inset-0 bg-black/90 hidden items-center justify-center z-50">
    <img id="lightboxImg" class="max-h-[90%] max-w-[90%] rounded-xl shadow-2xl">
</div>


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

<script>
document.addEventListener("DOMContentLoaded", function() {

    /* Lightbox */
    const items = document.querySelectorAll(".fleet-item img");
    const lightbox = document.getElementById("lightbox");
    const lightboxImg = document.getElementById("lightboxImg");

    items.forEach(img => {
        img.addEventListener("click", () => {
            lightbox.classList.remove("hidden");
            lightbox.classList.add("flex");
            lightboxImg.src = img.src;
        });
    });

    lightbox.addEventListener("click", () => {
        lightbox.classList.add("hidden");
        lightbox.classList.remove("flex");
    });


    /* Scroll Animation */
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if(entry.isIntersecting){
                entry.target.classList.remove("opacity-0","translate-y-10");
                entry.target.classList.add("opacity-100","translate-y-0");
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll(".fleet-item").forEach(el => observer.observe(el));


    /* Auto Slider Feel (slow horizontal drift effect) */
    const container = document.getElementById("fleetContainer");
    let scrollAmount = 0;

    setInterval(() => {
        scrollAmount += 1;
        container.scrollBy({ top: 0, left: 1, behavior: "smooth" });
    }, 50);

});
</script>

<?php include BASE_PATH . 'includes/footer.php'; ?>