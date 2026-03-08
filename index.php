<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/pft-website/includes/config.php';
include BASE_PATH . 'includes/header.php';
?>

<!-- INTRO SECTION -->
<section class="py-20 bg-[#181818] text-white">

<div class="max-w-7xl mx-auto px-6">

<div class="grid lg:grid-cols-2 gap-14 items-center">

<!-- LEFT -->
<div class="text-center lg:text-left">

<h2 class="text-5xl font-extrabold tracking-widest mb-6">
PFT
</h2>

<!-- <div class="flex justify-center lg:justify-start mb-8">
<img src="<?= BASE_URL ?>assets/images/logo.png"
class="w-60 sm:w-72 md:w-80 lg:w-96 xl:w-[420px] h-auto object-contain drop-shadow-xl"
alt="Parrish Family Trucking Logo">
</div> -->

<p class="text-gray-300 text-lg max-w-lg mx-auto lg:mx-0">
Reliable Nationwide Freight Solutions
</p>

</div>


<!-- RIGHT IMAGE SLIDER -->
<div class="relative">

<div class="relative overflow-hidden rounded-xl shadow-2xl
h-[320px] sm:h-[360px] lg:h-[420px] bg-gray-800">

<img id="slideA"
class="absolute inset-0 w-full h-full object-cover opacity-100 transition-opacity duration-1000"
alt="Freight Transport">

<img id="slideB"
class="absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-1000"
alt="Freight Transport">

</div>

</div>

</div>

</div>

</section>






<!-- ABOUT / CONTACT / CAREERS -->
<section class="bg-[#0b0f1a] text-white py-16">

<div class="max-w-7xl mx-auto px-6">

<div class="grid md:grid-cols-3 gap-12 text-center mb-16">

<!-- ABOUT -->
<a href="<?= BASE_URL ?>pages/about.php"
class="group block hover:-translate-y-1 transition duration-300">

<h3 class="text-white font-bold text-xl mb-4 flex items-center justify-center gap-2 group-hover:text-red-400">
<i class="fa-solid fa-circle-info text-red-500"></i>
ABOUT US
</h3>

<div class="border-2 border-blue-500 p-6 text-sm leading-relaxed text-gray-300 group-hover:border-red-500 transition">

<p class="mb-4">
PFT Logistics delivers dependable freight solutions across North America.
We specialize in flatbed transportation, step deck hauling, and oversized
load management.
</p>

<!-- READ MORE -->
<span class="inline-flex items-center gap-2 text-red-500 font-semibold text-sm group-hover:text-red-400">

Read More
<i class="fa-solid fa-arrow-right text-xs group-hover:translate-x-1 transition"></i>

</span>

</div>

</a>


<!-- CONTACT -->
<a href="<?= BASE_URL ?>pages/contact.php"
class="group block hover:-translate-y-1 transition duration-300">

<h3 class="text-white font-bold text-xl mb-4 flex items-center justify-center gap-2 group-hover:text-red-400">
<i class="fa-solid fa-envelope text-red-500"></i>
CONTACT US
</h3>

<p class="text-gray-300 text-sm">
We’d love to hear from you.
</p>

</a>


<!-- CAREERS -->
<a href="<?= BASE_URL ?>forms/driver-application.php"
class="group block hover:-translate-y-1 transition duration-300">

<h3 class="text-white font-bold text-xl mb-4 flex items-center justify-center gap-2 group-hover:text-red-400">
<i class="fa-solid fa-briefcase text-red-500"></i>
EMPLOYMENT
</h3>

<p class="text-gray-300 text-sm">
Drive your career forward.
</p>

</a>

</div>


<!-- SERVICES -->
<div class="text-center mb-10">

<h2 class="text-2xl font-bold text-white tracking-wide flex items-center justify-center gap-2">
<i class="fa-solid fa-truck-moving text-red-500"></i>
SERVICES
</h2>

</div>


<div class="grid md:grid-cols-4 gap-8">

<a href="<?= BASE_URL ?>pages/services/flatbed.php" class="group text-center">
<h4 class="font-semibold mb-3">FLATBED</h4>
<img src="<?= BASE_URL ?>assets/images/flat.jpeg"
class="w-full h-40 object-cover rounded shadow-lg group-hover:scale-105 transition"
alt="Flatbed Truck">
</a>

<a href="<?= BASE_URL ?>pages/services/stepdeck.php" class="group text-center">
<h4 class="font-semibold mb-3">STEPDECK</h4>
<img src="<?= BASE_URL ?>assets/images/stepdeck.jpeg"
class="w-full h-40 object-cover rounded shadow-lg group-hover:scale-105 transition"
alt="Stepdeck Trailer">
</a>

<a href="<?= BASE_URL ?>pages/services/refer.php" class="group text-center">
<h4 class="font-semibold mb-3">REFER (COMING SOON)</h4>
<img src="<?= BASE_URL ?>assets/images/stepdek8.webp"
class="w-full h-40 object-cover rounded shadow-lg group-hover:scale-105 transition"
alt="Refrigerated Freight">
</a>

<a href="<?= BASE_URL ?>pages/services/wideload.php" class="group text-center">
<h4 class="font-semibold mb-3">OVERSIZED LOAD</h4>
<img src="<?= BASE_URL ?>assets/images/wide.jpeg"
class="w-full h-40 object-cover rounded shadow-lg group-hover:scale-105 transition"
alt="Oversized Load Transport">
</a>

</div>

</div>
</section>



<!-- PARTNERS -->
<section class="py-16 bg-[#0b0f1a] text-white">

<div class="max-w-6xl mx-auto px-6">

<div class="bg-white/95 rounded-2xl py-12 px-8 text-center shadow-2xl">

<h2 class="text-3xl font-bold mb-10 text-black">
Trusted Partners & Certifications
</h2>

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

<a href="https://www.verizonconnect.com/" target="_blank"
class="group bg-white shadow-md rounded-xl p-6 flex flex-col items-center hover:shadow-xl transition">

<img src="<?= BASE_URL ?>assets/images/verizon-connect.png"
class="h-16 object-contain mb-4"
alt="Verizon Connect">

<span class="text-lg font-semibold text-gray-800">
Freight Tracking
</span>

</a>


<a href="#"
class="group bg-white shadow-md rounded-xl p-6 flex flex-col items-center hover:shadow-xl transition">

<img src="<?= BASE_URL ?>assets/images/sdvo_s.jpg"
class="h-16 object-contain mb-4"
alt="SDVOB Certified">

<span class="text-lg font-semibold text-gray-800">
SDVOB Certified
</span>

</a>


<a href="https://nastc.com/" target="_blank"
class="group bg-white shadow-md rounded-xl p-6 flex flex-col items-center hover:shadow-xl transition">

<img src="<?= BASE_URL ?>assets/images/nastc.png"
class="h-16 object-contain mb-4"
alt="NASTC Member">

<span class="text-lg font-semibold text-gray-800">
Member of NASTC
</span>

</a>

</div>

</div>

</div>

</section>



<!-- LOCATION -->
<section class="py-14 bg-[#181818] text-white">

<div class="max-w-4xl mx-auto px-6 text-center">

<h2 class="text-3xl font-bold mb-6">
Our Location
</h2>

<div class="rounded-lg overflow-hidden shadow-xl border border-[#222] mb-5">

<iframe
src="https://www.google.com/maps?q=4295+Cromwell+Rd+Ste+418+Chattanooga+TN+37421&output=embed"
width="100%"
height="280"
style="border:0;"
loading="lazy">
</iframe>

</div>

<p class="text-gray-300">
4295 Cromwell Rd Ste 418<br>
Chattanooga, TN 37421
</p>

</div>

</section>

<script>

const images = [

"<?= BASE_URL ?>assets/images/loading.jpg",
"<?= BASE_URL ?>assets/images/stepdek5.webp",
"<?= BASE_URL ?>assets/images/stepdek6.webp",
"<?= BASE_URL ?>assets/images/flatbed1.webp",
"<?= BASE_URL ?>assets/images/flatbed2.webp",
"<?= BASE_URL ?>assets/images/flatbed3.webp",
"<?= BASE_URL ?>assets/images/flatbed6.webp",
"<?= BASE_URL ?>assets/images/stepdek.webp",
"<?= BASE_URL ?>assets/images/stepdek1.webp",
"<?= BASE_URL ?>assets/images/stepdek2.webp",
"<?= BASE_URL ?>assets/images/stepdek9.webp",
"<?= BASE_URL ?>assets/images/stepdek8.webp",
"<?= BASE_URL ?>assets/images/flatbed.webp",
"<?= BASE_URL ?>assets/images/stepdek7.webp"

];

let index = 0;

const slideA = document.getElementById("slideA");
const slideB = document.getElementById("slideB");

slideA.src = images[0];

let showingA = true;

function nextSlide(){

index = (index + 1) % images.length;

if(showingA){

slideB.src = images[index];
slideB.style.opacity = 1;
slideA.style.opacity = 0;

}else{

slideA.src = images[index];
slideA.style.opacity = 1;
slideB.style.opacity = 0;

}

showingA = !showingA;

}

setInterval(nextSlide, 4000);

</script>

<?php include BASE_PATH . 'includes/footer.php'; ?>