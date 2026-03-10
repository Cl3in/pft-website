<?php 
require_once __DIR__ . '/../includes/config.php';
include BASE_PATH . 'includes/header.php';
?>

<section class="relative py-20 text-white overflow-hidden">

<!-- BACKGROUND IMAGE -->
<div class="absolute inset-0">
    <img src="<?= BASE_URL ?>assets/images/flatbed5.webp"
         alt="Freight Truck"
         class="w-full h-full object-cover blur-sm scale-110">
</div>

<!-- DARK OVERLAY -->
<div class="absolute inset-0 bg-black/75"></div>

<div class="relative max-w-7xl mx-auto px-6">

<!-- SUCCESS MESSAGE -->
<?php if(isset($_GET['contact']) && $_GET['contact'] == "success"): ?>

<div class="bg-green-600 text-white p-4 rounded-lg mb-10 text-center font-semibold shadow-lg">
✅ Your message has been sent successfully.
</div>

<?php endif; ?>

<!-- ERROR MESSAGE -->
<?php if(isset($_GET['contact']) && $_GET['contact'] == "error"): ?>

<div class="bg-red-600 text-white p-4 rounded-lg mb-10 text-center font-semibold shadow-lg">
⚠️ Something went wrong. Please try again.
</div>

<?php endif; ?>

<!-- TITLE -->
<div class="text-center mb-16">

<h2 class="text-4xl font-bold text-red-600 mb-4">
Get In Touch
</h2>

<p class="max-w-2xl mx-auto text-gray-300 text-lg leading-relaxed">
We’d love to hear from you. Whether you are a driver, partner
or customer. Parrish Family Trucking is committed to professional,
responsive and reliable communication.
</p>

</div>

<div class="grid md:grid-cols-2 gap-16">

<!-- CONTACT FORM -->
<div class="bg-black/70 backdrop-blur-sm p-10 rounded-2xl shadow-2xl border border-gray-800">

<form method="POST" action="<?= BASE_URL ?>forms/send_contact.php" class="space-y-6">

<input type="text" name="name" required placeholder="Full Name"
class="w-full border border-gray-700 p-4 rounded-lg bg-gray-900 text-white focus:outline-none focus:border-red-600">

<input type="email" name="email" required placeholder="Email Address"
class="w-full border border-gray-700 p-4 rounded-lg bg-gray-900 text-white focus:outline-none focus:border-red-600">

<input type="tel" name="phone" required placeholder="Phone Number"
class="w-full border border-gray-700 p-4 rounded-lg bg-gray-900 text-white focus:outline-none focus:border-red-600">

<select id="subjectSelect" name="subject" required
class="w-full border border-gray-700 p-4 rounded-lg bg-gray-900 text-white focus:outline-none focus:border-red-600">

<option value="" disabled selected>Select Subject</option>
<option value="General Inquiry">General Inquiry</option>
<option value="Driver Application">Driver Application</option>
<option value="Customer Support">Customer Support</option>
<option value="Load Booking">Load Booking</option>
<option value="Partnership Opportunity">Partnership Opportunity</option>
<option value="Other">Other</option>

</select>

<div id="otherSubjectContainer" class="hidden">

<input type="text"
id="otherSubjectInput"
name="other_subject"
placeholder="Please specify subject"
class="w-full border border-gray-700 p-4 rounded-lg bg-gray-900 text-white focus:outline-none focus:border-red-600">

</div>

<input type="text" name="address" required placeholder="Street Address"
class="w-full border border-gray-700 p-4 rounded-lg bg-gray-900 text-white focus:outline-none focus:border-red-600">

<div class="grid grid-cols-1 md:grid-cols-3 gap-4">

<input type="text" name="city" required placeholder="City"
class="border border-gray-700 p-4 rounded-lg bg-gray-900 text-white focus:outline-none focus:border-red-600">

<input type="text" name="state" required placeholder="State"
class="border border-gray-700 p-4 rounded-lg bg-gray-900 text-white focus:outline-none focus:border-red-600">

<input type="text" name="zip" required placeholder="Zip Code"
class="border border-gray-700 p-4 rounded-lg bg-gray-900 text-white focus:outline-none focus:border-red-600">

</div>

<textarea name="message" rows="5" placeholder="Your Message"
class="w-full border border-gray-700 p-4 rounded-lg bg-gray-900 text-white focus:outline-none focus:border-red-600"></textarea>

<button type="submit"
class="w-full bg-red-600 text-white py-4 rounded-full hover:bg-red-700 transition font-bold text-lg">

Send Message

</button>

</form>

</div>

<!-- CONTACT INFO -->
<div class="bg-black/60 backdrop-blur-sm p-10 rounded-2xl shadow-2xl border border-gray-800 flex flex-col justify-center">

<h3 class="text-2xl font-bold text-red-600 mb-6">
Contact Information
</h3>

<div class="space-y-5 text-gray-200 text-lg">

<p class="flex items-center gap-3">
<i class="fa-solid fa-phone text-red-500"></i>
<span><strong>Phone:</strong> 1-423-680-1299</span>
</p>

<p class="flex items-start gap-3">
<i class="fa-solid fa-location-dot text-red-500 mt-1"></i>
<span>
<strong>Address:</strong><br>
4295 Cromwell Rd Ste 418<br>
Chattanooga, TN
</span>
</p>

<p class="flex items-center gap-3">
<i class="fa-solid fa-envelope text-red-500"></i>

<a href="mailto:info@parrishft.com?subject=Inquiry from Website"
class="hover:text-red-400 transition font-semibold">

info@parrishft.com

</a>
</p>

<div class="pt-4 border-t border-gray-700">

<p class="text-sm text-gray-400 mb-3 font-semibold">
Follow Us
</p>

<div class="flex gap-5 text-2xl">

<a href="https://www.facebook.com/profile.php?id=61560985590384"
target="_blank"
class="text-gray-300 hover:text-blue-500 transition">
<i class="fa-brands fa-facebook"></i>
</a>

<a href="https://www.instagram.com/parrishfamilytrucking/"
target="_blank"
class="text-gray-300 hover:text-pink-500 transition">
<i class="fa-brands fa-instagram"></i>
</a>

</div>

</div>

</div>
</div>

</div>

</section>

<script>

const subjectSelect = document.getElementById('subjectSelect');
const otherSubjectContainer = document.getElementById('otherSubjectContainer');
const otherSubjectInput = document.getElementById('otherSubjectInput');

subjectSelect.addEventListener('change', function(){

if(this.value === 'Other'){

otherSubjectContainer.classList.remove('hidden');
otherSubjectInput.setAttribute('required','required');

}else{

otherSubjectContainer.classList.add('hidden');
otherSubjectInput.removeAttribute('required');

}

});

</script>

<?php include BASE_PATH . 'includes/footer.php'; ?>