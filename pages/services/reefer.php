<?php 
require_once __DIR__ . '/../../includes/config.php';
include BASE_PATH . 'includes/header.php';
?>

<div class="bg-black text-white">

<!-- ================= HERO SECTION ================= -->
<section class="py-24 bg-[#0d0d0d]">
<div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center">

<div>

<p class="text-red-500 text-sm uppercase tracking-[0.25em] mb-4">
Temperature Controlled Logistics
</p>

<h1 class="text-5xl font-extrabold mb-8 tracking-tight">
Refrigerated Freight Transportation
</h1>

<p class="text-gray-300 text-lg leading-relaxed mb-6">
Parrish Family Trucking is expanding our logistics
capabilities with refrigerated freight transportation
designed for temperature-sensitive cargo including
food products, pharmaceuticals, and perishables.
</p>

<p class="text-gray-300 leading-relaxed mb-6">
Our refrigerated trucking division will provide
precise climate-controlled logistics solutions
across regional and long-haul freight routes.
</p>

<p class="text-gray-300 leading-relaxed mb-8">
This service is currently under development
and will be available soon as our fleet expands.
</p>

<a href="<?= BASE_URL ?>pages/contact.php"
class="inline-block bg-red-600 hover:bg-red-700 px-8 py-3 rounded-full text-white font-semibold transition">
Get Refrigerated Freight Quote
</a>

</div>

<div>
<img src="<?= BASE_URL ?>assets/images/stepdek8.webp"
alt="Refrigerated freight truck transporting temperature controlled cargo"
class="rounded-2xl shadow-2xl">
</div>

</div>
</section>


<!-- ================= COMING SOON INFO ================= -->
<section class="py-24 bg-black text-center">
<div class="max-w-4xl mx-auto px-6">

<h2 class="text-4xl font-bold mb-10">
Refrigerated Transport Coming Soon
</h2>

<p class="text-gray-300 leading-relaxed mb-6">
Parrish Family Trucking is currently expanding
our fleet to include refrigerated trailers
capable of transporting perishable goods
under strict temperature control conditions.
</p>

<p class="text-gray-300 leading-relaxed">
This upcoming service will support industries
including food distribution, grocery supply chains,
pharmaceutical logistics, and cold-storage freight.
</p>

</div>
</section>


<!-- ================= INTERNAL SERVICE LINKS ================= -->
<section class="py-24 bg-[#0d0d0d] border-t border-gray-800">
<div class="max-w-6xl mx-auto px-6 text-center">

<h2 class="text-4xl font-bold mb-10">
Other Transportation Services
</h2>

<p class="text-gray-300 mb-12">
Explore our other freight transportation
solutions designed for heavy, oversized,
and specialized cargo.
</p>

<div class="grid md:grid-cols-3 gap-8">

<a href="<?= BASE_URL ?>pages/services/flatbed.php"
class="bg-[#111] border border-gray-700 rounded-xl p-8 hover:border-red-600 transition">

<h3 class="text-xl font-semibold mb-3 text-red-500">
Flatbed Transportation
</h3>

<p class="text-gray-400">
Heavy haul and open-deck transportation
for oversized industrial freight.
</p>

</a>


<a href="<?= BASE_URL ?>pages/services/stepdeck.php"
class="bg-[#111] border border-gray-700 rounded-xl p-8 hover:border-red-600 transition">

<h3 class="text-xl font-semibold mb-3 text-red-500">
Step Deck Transport
</h3>

<p class="text-gray-400">
Specialized trailer equipment designed
for taller cargo and machinery.
</p>

</a>


<a href="<?= BASE_URL ?>pages/services/wideload.php"
class="bg-[#111] border border-gray-700 rounded-xl p-8 hover:border-red-600 transition">

<h3 class="text-xl font-semibold mb-3 text-red-500">
Oversized Load Hauling
</h3>

<p class="text-gray-400">
Expert logistics planning for wide loads
and heavy industrial equipment.
</p>

</a>

</div>

</div>
</section>


<!-- ================= SERVICE AREA SEO ================= -->
<section class="py-24 bg-black">
<div class="max-w-5xl mx-auto px-6 text-center">

<h2 class="text-4xl font-bold mb-10">
Refrigerated Trucking Across the Southern United States
</h2>

<p class="text-gray-300 leading-relaxed mb-10">
Our upcoming refrigerated freight services will support
temperature-controlled logistics across major southern
transportation corridors.
</p>

<div class="grid md:grid-cols-5 gap-6 text-gray-300 font-semibold">

<div>Texas</div>
<div>Louisiana</div>
<div>Arkansas</div>
<div>Oklahoma</div>
<div>Mississippi</div>

</div>

</div>
</section>


<!-- ================= CTA BANNER ================= -->
<section class="relative py-28">

<div class="absolute inset-0">
<img src="<?= BASE_URL ?>assets/images/reefer2.webp"
class="w-full h-full object-cover blur-md scale-110"
alt="Refrigerated trucking logistics background">

<div class="absolute inset-0 bg-black/80"></div>
</div>

<div class="relative max-w-5xl mx-auto text-center px-6">

<h2 class="text-4xl md:text-5xl font-bold mb-6">
Need Reliable Freight Transport?
</h2>

<p class="text-gray-300 text-lg mb-10">
Our logistics team is ready to provide
safe and efficient transportation solutions
for specialized freight.
</p>

<a href="<?= BASE_URL ?>pages/contact.php"
class="bg-red-600 hover:bg-red-700 px-10 py-4 rounded-full text-lg font-semibold transition">
Request A Freight Quote
</a>

</div>
</section>

</div>


<!-- ================= FAQ SCHEMA ================= -->
<script type="application/ld+json">
{
 "@context": "https://schema.org",
 "@type": "FAQPage",
 "mainEntity": [
 {
 "@type": "Question",
 "name": "What is refrigerated freight transportation?",
 "acceptedAnswer": {
 "@type": "Answer",
 "text": "Refrigerated freight transportation uses temperature controlled trailers to transport perishable goods including food products and pharmaceuticals."
 }
 },
 {
 "@type": "Question",
 "name": "When will Parrish Family Trucking offer refrigerated transport?",
 "acceptedAnswer": {
 "@type": "Answer",
 "text": "Parrish Family Trucking is currently expanding its fleet and plans to launch refrigerated transportation services soon."
 }
 }
 ]
}
</script>

<?php include BASE_PATH . 'includes/footer.php'; ?>