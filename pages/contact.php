<?php include __DIR__ . '/../includes/header.php'; ?>

<section class="py-16">
<div class="max-w-7xl mx-auto px-4 grid md:grid-cols-2 gap-10">

<!-- FORM -->
<div class="bg-white p-8 shadow rounded">
<h2 class="text-3xl font-bold mb-6">Contact Us</h2>

<form action="/pft-website/forms/contact-form.php" method="POST" enctype="multipart/form-data" class="space-y-4">

<input name="name" required placeholder="Name" class="w-full border p-3 rounded">
<input name="email" required placeholder="Email" class="w-full border p-3 rounded">
<textarea name="message" required placeholder="Message" class="w-full border p-3 rounded h-32"></textarea>

<input type="file" name="file" class="w-full">

<button class="bg-red-600 text-white px-6 py-3 rounded w-full">Send Message</button>

</form>
</div>

<!-- INFO -->
<div>
<h3 class="text-2xl font-bold mb-4">Contact Information</h3>

<p class="mb-3">📞 1-423-680-1299</p>
<p class="mb-3">📍 4295 Cromwell Rd Ste 418 Chattanooga, TN</p>

<p class="mb-2">✉ info@parrishft.com</p>
<p class="mb-2">operations@parrishft.com</p>
<p class="mb-2">dispatch@parrishft.com</p>
</div>

</div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>