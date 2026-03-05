<?php
require_once __DIR__ . '/../includes/config.php';
include BASE_PATH . 'includes/header.php';
?>

<!-- HERO SECTION -->
<section class="relative min-h-screen flex items-center justify-center px-6">

<!-- Background Image -->
<div class="absolute inset-0">
<img src="<?= BASE_URL ?>assets/images/flatbed1.webp"
class="w-full h-full object-cover">
</div>

<!-- Dark Overlay -->
<div class="absolute inset-0 bg-black/75"></div>

<div class="relative z-10 max-w-7xl mx-auto grid md:grid-cols-2 gap-16 items-center">


<!-- LEFT CONTENT -->
<div class="text-white">

<h1 class="text-6xl md:text-7xl font-bold mb-6 leading-tight">
Join Our
<span class="text-red-500">Driver Network</span>
</h1>

<p class="text-xl text-gray-300 mb-10 max-w-xl">
Submit your professional driver profile and become part of
Parrish Family Trucking. Our dispatch team reviews every
application and will contact qualified drivers quickly.
</p>

<div class="space-y-4 text-lg text-gray-300">

<div class="flex items-center gap-3">
<span class="text-red-500 text-2xl">✔</span>
<p>Competitive driver pay</p>
</div>

<div class="flex items-center gap-3">
<span class="text-red-500 text-2xl">✔</span>
<p>Reliable modern equipment</p>
</div>

<div class="flex items-center gap-3">
<span class="text-red-500 text-2xl">✔</span>
<p>Consistent freight opportunities</p>
</div>

<div class="flex items-center gap-3">
<span class="text-red-500 text-2xl">✔</span>
<p>Professional dispatch support</p>
</div>

</div>

</div>


<!-- FORM CARD -->
<div>

<form action="<?= BASE_URL ?>forms/send_driver_profile.php"
method="POST"
class="bg-black/70 backdrop-blur-lg p-10 rounded-2xl shadow-2xl border border-gray-700 space-y-6">

<input type="hidden" name="form_type" value="driver">

<!-- Honeypot Spam Trap -->
<input type="text" name="company" style="display:none">

<h2 class="text-3xl font-bold text-white mb-6 text-center">
Driver Profile
</h2>

<input type="text" name="driver_name" required placeholder="Full Name *"
class="w-full border border-gray-700 p-4 rounded-lg bg-gray-900 text-white focus:border-red-500 focus:outline-none">

<input type="email" name="driver_email" required placeholder="Email Address *"
class="w-full border border-gray-700 p-4 rounded-lg bg-gray-900 text-white focus:border-red-500 focus:outline-none">

<input type="tel" name="driver_phone" required placeholder="Mobile Phone *"
class="w-full border border-gray-700 p-4 rounded-lg bg-gray-900 text-white focus:border-red-500 focus:outline-none">

<input type="date" name="driver_birthday" required
class="w-full border border-gray-700 p-4 rounded-lg bg-gray-900 text-white focus:border-red-500 focus:outline-none">

<input type="text" name="driver_address" required placeholder="Address *"
class="w-full border border-gray-700 p-4 rounded-lg bg-gray-900 text-white focus:border-red-500 focus:outline-none">

<div class="grid md:grid-cols-2 gap-4">

<input type="text" name="driver_city" required placeholder="City *"
class="border border-gray-700 p-4 rounded-lg bg-gray-900 text-white focus:border-red-500 focus:outline-none">

<input type="text" name="driver_state" required placeholder="State *"
class="border border-gray-700 p-4 rounded-lg bg-gray-900 text-white focus:border-red-500 focus:outline-none">

</div>

<div class="grid md:grid-cols-2 gap-4">

<input type="text" name="driver_zip" required placeholder="Zip Code *"
class="border border-gray-700 p-4 rounded-lg bg-gray-900 text-white focus:border-red-500 focus:outline-none">

<input type="number" name="driver_experience" min="0" required placeholder="Years of Driving Experience *"
class="border border-gray-700 p-4 rounded-lg bg-gray-900 text-white focus:border-red-500 focus:outline-none">

</div>

<button type="submit"
class="w-full bg-red-600 text-white py-4 rounded-full hover:bg-red-700 transition font-bold text-lg shadow-lg">

Submit Driver Profile

</button>

<a href="<?= BASE_URL ?>pages/careers.php"
class="block text-center text-gray-400 hover:text-red-500 mt-4">
← Back to Careers
</a>

</form>

</div>

</div>

</section>

<?php include BASE_PATH . 'includes/footer.php'; ?>