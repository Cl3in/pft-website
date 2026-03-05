<?php
require_once __DIR__ . '/../includes/config.php';
include BASE_PATH . 'includes/header.php';
?>

<section class="relative min-h-screen flex items-center py-24 px-6">

<!-- Background Image -->
<div class="absolute inset-0">
<img src="<?= BASE_URL ?>assets/images/flatbed6.webp"
class="w-full h-full object-cover"
loading="lazy"
alt="Flatbed trucking trailer">
</div>

<!-- Overlay -->
<div class="absolute inset-0 bg-black/80"></div>

<div class="relative z-10 max-w-7xl mx-auto grid md:grid-cols-2 gap-16 items-start">

<!-- LEFT SIDE CONTENT -->
<div class="text-white">

<h1 class="text-6xl md:text-7xl font-bold mb-6 leading-tight">
Apply To
<span class="text-red-500">Drive With Us</span>
</h1>

<p class="text-xl text-gray-300 mb-10 max-w-xl">
Parrish Family Trucking is always looking for reliable
professional drivers. Complete the application form and
our recruiting team will review your profile.
</p>

<div class="space-y-4 text-lg text-gray-300">

<div class="flex items-center gap-3">
<span class="text-red-500 text-2xl">✔</span>
<p>Competitive driver compensation</p>
</div>

<div class="flex items-center gap-3">
<span class="text-red-500 text-2xl">✔</span>
<p>Dedicated dispatch support</p>
</div>

<div class="flex items-center gap-3">
<span class="text-red-500 text-2xl">✔</span>
<p>Reliable equipment & steady freight</p>
</div>

<div class="flex items-center gap-3">
<span class="text-red-500 text-2xl">✔</span>
<p>Fast application review process</p>
</div>

</div>

</div>


<!-- APPLICATION FORM -->
<div>

<?php if(isset($_GET['application'])): ?>

<?php if($_GET['application'] == "success"): ?>

<div class="bg-green-600 text-white p-4 rounded-lg mb-6 text-center">
Application submitted successfully. Our recruiting team will contact you soon.
</div>

<?php elseif($_GET['application'] == "error"): ?>

<div class="bg-red-600 text-white p-4 rounded-lg mb-6 text-center">
Something went wrong. Please try again.
</div>

<?php elseif($_GET['application'] == "invalid_email"): ?>

<div class="bg-red-600 text-white p-4 rounded-lg mb-6 text-center">
Invalid email address.
</div>

<?php elseif($_GET['application'] == "invalid_file"): ?>

<div class="bg-red-600 text-white p-4 rounded-lg mb-6 text-center">
Only PDF, DOC, or DOCX files are allowed.
</div>

<?php elseif($_GET['application'] == "file_too_large"): ?>

<div class="bg-red-600 text-white p-4 rounded-lg mb-6 text-center">
Resume must be under 5MB.
</div>

<?php endif; ?>

<?php endif; ?>

<form action="<?= BASE_URL ?>forms/send_application.php"
method="POST"
enctype="multipart/form-data"
class="bg-black/70 backdrop-blur-lg p-10 rounded-2xl shadow-2xl border border-gray-700 space-y-6">
<input type="hidden" name="MAX_FILE_SIZE" value="5242880">
<input type="hidden" name="form_type" value="application">

<!-- Honeypot Spam Trap -->
<input type="text" name="company" tabindex="-1" autocomplete="off" class="hidden">

<h2 class="text-3xl font-bold text-white text-center mb-6">
Driver Application
</h2>


<!-- NAME -->
<div class="grid md:grid-cols-3 gap-4">

<input type="text" name="first_name" required
placeholder="First Name *"
class="border border-gray-700 p-4 rounded-lg bg-gray-900 text-white focus:border-red-500 focus:outline-none">

<input type="text" name="middle_name"
placeholder="Middle Name"
class="border border-gray-700 p-4 rounded-lg bg-gray-900 text-white focus:border-red-500 focus:outline-none">

<input type="text" name="last_name" required
placeholder="Last Name *"
class="border border-gray-700 p-4 rounded-lg bg-gray-900 text-white focus:border-red-500 focus:outline-none">

</div>


<!-- CONTACT -->
<div class="grid md:grid-cols-2 gap-4">

<input type="email" name="email" required
placeholder="Email Address *"
class="border border-gray-700 p-4 rounded-lg bg-gray-900 text-white focus:border-red-500 focus:outline-none">

<input type="tel"
name="phone"
pattern="[0-9+\-\s()]{7,20}" required
placeholder="Phone Number *"
class="border border-gray-700 p-4 rounded-lg bg-gray-900 text-white focus:border-red-500 focus:outline-none">

</div>


<!-- PERSONAL -->
<div class="grid md:grid-cols-2 gap-4">

<input type="date" name="driver_birthday" required
class="border border-gray-700 p-4 rounded-lg bg-gray-900 text-white focus:border-red-500 focus:outline-none">

<select name="gender" required
class="border border-gray-700 p-4 rounded-lg bg-gray-900 text-white focus:border-red-500 focus:outline-none">

<option value="">Select Gender</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
<option value="Prefer not to say">Prefer not to say</option>

</select>

</div>


<!-- ADDRESS -->
<div class="grid md:grid-cols-2 gap-4">

<input type="text" name="driver_address" required
placeholder="Street Address *"
class="border border-gray-700 p-4 rounded-lg bg-gray-900 text-white focus:border-red-500 focus:outline-none">

<input type="text" name="driver_city" required
placeholder="City *"
class="border border-gray-700 p-4 rounded-lg bg-gray-900 text-white focus:border-red-500 focus:outline-none">

</div>

<div class="grid md:grid-cols-2 gap-4">

<input type="text" name="driver_state" required
placeholder="State *"
class="border border-gray-700 p-4 rounded-lg bg-gray-900 text-white focus:border-red-500 focus:outline-none">

<input type="text" name="driver_zip" required
placeholder="Zip Code *"
class="border border-gray-700 p-4 rounded-lg bg-gray-900 text-white focus:border-red-500 focus:outline-none">

</div>


<!-- EXPERIENCE -->
<input type="number" name="experience" min="0" required
placeholder="Years of Driving Experience *"
class="border border-gray-700 p-4 rounded-lg bg-gray-900 text-white focus:border-red-500 focus:outline-none">

<textarea name="message" rows="5" required
placeholder="Describe your driving experience..."
class="border border-gray-700 p-4 rounded-lg bg-gray-900 text-white focus:border-red-500 focus:outline-none"></textarea>


<!-- RESUME -->
<div>

<label class="block text-gray-300 mb-2">
Upload Resume *
</label>

<input type="file"
name="resume"
accept=".pdf,.doc,.docx,application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document"
required
class="w-full text-gray-300 bg-gray-900 border border-gray-700 p-3 rounded-lg">

</div>


<button type="submit"
class="w-full bg-red-600 text-white py-4 rounded-full hover:bg-red-700 transition font-bold text-lg shadow-lg">

Submit Application

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