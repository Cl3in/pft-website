<?php
require_once __DIR__ . '/../includes/config.php';
include BASE_PATH . 'includes/header.php';
?>

<title>Careers & Driver Profiles - Parrish Family Trucking</title>
<meta name="description" content="Parrish Family Trucking careers. Apply for driver and office positions, submit detailed driver profiles, and explore career opportunities.">

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<!-- Hero Section -->
<section class="relative h-[400px] overflow-hidden">

<div class="absolute inset-0 bg-gradient-to-r from-gray-900 via-gray-800 to-gray-900 animate-gradient-x bg-cover bg-center"></div>

<div class="absolute inset-0 bg-black/60"></div>

<div class="relative z-10 flex flex-col justify-center items-center h-full text-center text-white">

<h1 class="text-5xl font-bold mb-4" data-aos="fade-down">
Join Our Team
</h1>

<p class="text-lg text-gray-300" data-aos="fade-up">
Drive your career forward or submit your driver profile today!
</p>

</div>

</section>

<section class="py-20 bg-gray-900 text-white max-w-6xl mx-auto px-6 space-y-20">

<!-- Why Choose Us -->
<div class="relative rounded-3xl overflow-hidden" data-aos="fade-right">

<div class="absolute inset-0">
<img src="<?= BASE_URL ?>assets/images/stepdek1.webp"
class="w-full h-full object-cover"
alt="Truck background">
</div>

<div class="absolute inset-0 bg-black/70"></div>

<div class="relative z-10 p-12">

<h2 class="text-4xl font-bold text-center mb-10">
Why Choose Us
</h2>

<div class="grid md:grid-cols-3 gap-10">

<?php

$reasons = [

["Reliable Equipment","Drive modern trucks safely."],
["Competitive Pay","Competitive compensation plus bonuses."],
["Family Culture","We treat drivers like family."],
["Flexible Schedules","Balance work and home life."],
["Safety First","Strict safety standards."],
["Career Growth","Promotion and leadership opportunities."]

];

foreach($reasons as $r){

echo "<div class='p-8 rounded-xl bg-gray-900 bg-opacity-80 hover:scale-105 transform transition shadow-lg'>
<h3 class='text-2xl font-semibold mb-3 text-white'>{$r[0]}</h3>
<p class='text-gray-300'>{$r[1]}</p>
</div>";

}

?>

</div>

</div>

</div>

<!-- Driver Benefits -->
<div class="bg-gray-800 p-12 rounded-3xl shadow-xl" data-aos="fade-left">

<h2 class="text-4xl font-bold mb-6 text-red-400 text-center">
Driver Benefits
</h2>

<ul class="list-disc list-inside text-gray-300 text-lg space-y-3">

<li>Health, dental, vision insurance</li>
<li>401(k) retirement plan</li>
<li>Flexible schedules</li>
<li>Paid safety training</li>
<li>Referral bonuses</li>
<li>Modern trucks with advanced safety features</li>

</ul>

</div>

<!-- Job Listings -->
<div data-aos="fade-up">

<h2 class="text-4xl font-bold text-center mb-8">
Available Positions
</h2>

<div class="flex justify-center gap-4 mb-6 flex-wrap">

<button class="job-filter px-8 py-3 rounded-full bg-red-600 text-white font-semibold" data-type="all">All</button>

<button class="job-filter px-8 py-3 rounded-full bg-gray-700 text-white font-semibold" data-type="driver">Driver</button>

<button class="job-filter px-8 py-3 rounded-full bg-gray-700 text-white font-semibold" data-type="office">Office</button>

</div>

<input id="job-search"
type="text"
placeholder="Search jobs..."
class="w-full p-4 rounded-lg bg-gray-800 text-white border border-gray-700 mb-8">

<div id="job-listings" class="grid md:grid-cols-2 gap-8 max-w-5xl mx-auto">

<?php

$jobs = [

["OTR Truck Driver","driver","Long-haul routes, CDL required. Pay & benefits included."],
["Regional Driver","driver","Regional routes, consistent home time."],
["Dispatch Coordinator","office","Manage freight schedules and support drivers."]

];

foreach($jobs as $job){

echo "<div class='flip-card cursor-pointer' data-type='{$job[1]}'>
<div class='flip-card-inner bg-gray-800 rounded-xl shadow-lg p-8 hover:scale-105 transition'>

<div class='flip-card-front'>

<h3 class='text-2xl font-bold text-red-400 mb-2'>{$job[0]}</h3>

<p class='text-gray-300'>{$job[2]}</p>

</div>

</div>

</div>";

}

?>

</div>

</div>

<!-- Apply / Driver Profile Links -->
<div class="max-w-4xl mx-auto mt-12 text-center" data-aos="fade-up">

<h2 class="text-4xl font-bold mb-6">
Apply or Submit Your Driver Profile
</h2>

<p class="text-gray-300 text-lg mb-10">
We have streamlined our hiring process.  
Please use the secure forms below to submit your application or driver profile.
</p>

<div class="grid md:grid-cols-2 gap-8">

<!-- Job Application -->
<div class="bg-gray-800 p-10 rounded-2xl shadow-xl hover:scale-105 transition">

<h3 class="text-2xl font-bold text-red-400 mb-4">
Job Application
</h3>

<p class="text-gray-300 mb-6">
Submit a complete job application and upload your resume for review.
</p>

<a href="<?= BASE_URL ?>forms/driver-application.php"
class="inline-block bg-red-600 hover:bg-red-700 text-white px-8 py-3 rounded-full font-semibold transition">

Apply for a Position

</a>

</div>

<!-- Driver Profile -->
<div class="bg-gray-800 p-10 rounded-2xl shadow-xl hover:scale-105 transition">

<h3 class="text-2xl font-bold text-red-400 mb-4">
Driver Profile
</h3>

<p class="text-gray-300 mb-6">
Already an experienced driver? Submit your profile so dispatch can contact you.
</p>

<a href="<?= BASE_URL ?>forms/driver-profile.php"
class="inline-block bg-red-600 hover:bg-red-700 text-white px-8 py-3 rounded-full font-semibold transition">

Submit Driver Profile

</a>

</div>

</div>

</div>

</section>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>

AOS.init({duration:1000, once:true});

const filterButtons=document.querySelectorAll('.job-filter');
const jobItems=document.querySelectorAll('.flip-card');
const searchInput=document.getElementById('job-search');

filterButtons.forEach(btn=>{
btn.addEventListener('click',()=>{
const type=btn.getAttribute('data-type');

jobItems.forEach(job=>{
if(type==='all'||job.getAttribute('data-type')===type){
job.style.display='block';
}else{
job.style.display='none';
}
});
});
});

searchInput.addEventListener('input',e=>{
const val=e.target.value.toLowerCase();

jobItems.forEach(job=>{
if(job.innerText.toLowerCase().includes(val)){
job.style.display='block';
}else{
job.style.display='none';
}
});
});

</script>

<style>

@keyframes gradient-x{
0%{background-position:0% 50%}
50%{background-position:100% 50%}
100%{background-position:0% 50%}
}

.animate-gradient-x{
background-size:200% 200%;
animation:gradient-x 10s ease infinite;
}

</style>

<?php include BASE_PATH . 'includes/footer.php'; ?>