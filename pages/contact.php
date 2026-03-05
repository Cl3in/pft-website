<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/pft-website/includes/config.php';
include BASE_PATH . 'includes/header.php';
?>

<section class="py-20 bg-[#141414] text-white">
<div class="max-w-7xl mx-auto px-6">

    <!-- Opening Sentence -->
    <div class="text-center mb-16">
        <h2 class="text-4xl font-bold text-red-600 mb-4">Get In Touch</h2>
        <p class="max-w-2xl mx-auto text-gray-300 text-lg leading-relaxed">
            We’d love to hear from you. Whether you are a driver, partner,
            or customer, Parrish Family Trucking is committed to professional,
            responsive, and reliable communication.
        </p>
    </div>

    <div class="grid md:grid-cols-2 gap-16">

        <!-- FORM COLUMN -->
        <div class="bg-[#1a1a1a] p-10 rounded-2xl shadow-xl border border-[#222]">

            <form method="POST" class="space-y-6">

                <!-- Name -->
                <input type="text" name="name" required placeholder="Full Name"
                class="w-full border border-gray-700 p-4 rounded-lg bg-gray-900 text-white focus:outline-none focus:border-red-600">

                <!-- Email -->
                <input type="email" name="email" required placeholder="Email Address"
                class="w-full border border-gray-700 p-4 rounded-lg bg-gray-900 text-white focus:outline-none focus:border-red-600">

                <!-- Phone -->
                <input type="tel" name="phone" required placeholder="Phone Number"
                class="w-full border border-gray-700 p-4 rounded-lg bg-gray-900 text-white focus:outline-none focus:border-red-600">

                <!-- Subject -->
                <!-- Subject Dropdown -->
<div>
    <select id="subjectSelect" name="subject"
        required
        class="w-full border border-gray-700 p-4 rounded-lg bg-gray-900 text-white focus:outline-none focus:border-red-600">

        <option value="" disabled selected>Select Subject</option>
        <option value="General Inquiry">General Inquiry</option>
        <option value="Driver Application">Driver Application</option>
        <option value="Customer Support">Customer Support</option>
        <option value="Load Booking">Load Booking</option>
        <option value="Partnership Opportunity">Partnership Opportunity</option>
        <option value="Other">Other</option>
    </select>
</div>

<!-- Other Subject Input (Hidden by Default) -->
<div id="otherSubjectContainer" class="hidden">
    <input type="text"
        id="otherSubjectInput"
        name="other_subject"
        placeholder="Please specify subject"
        class="w-full border border-gray-700 p-4 rounded-lg bg-gray-900 text-white focus:outline-none focus:border-red-600">
</div>

                <!-- Address -->
                <input type="text" name="address" required placeholder="Street Address"
                class="w-full border border-gray-700 p-4 rounded-lg bg-gray-900 text-white focus:outline-none focus:border-red-600">

                <!-- City / State / Zip -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <input type="text" name="city" required placeholder="City"
                    class="border border-gray-700 p-4 rounded-lg bg-gray-900 text-white focus:outline-none focus:border-red-600">

                    <input type="text" name="state" required placeholder="State"
                    class="border border-gray-700 p-4 rounded-lg bg-gray-900 text-white focus:outline-none focus:border-red-600">

                    <input type="text" name="zip" required placeholder="Zip Code"
                    class="border border-gray-700 p-4 rounded-lg bg-gray-900 text-white focus:outline-none focus:border-red-600">
                </div>

                <!-- Message -->
                <textarea name="message" rows="5" placeholder="Your Message"
                class="w-full border border-gray-700 p-4 rounded-lg bg-gray-900 text-white focus:outline-none focus:border-red-600"></textarea>

                <!-- Submit -->
                <button type="submit"
                class="w-full bg-red-600 text-white py-4 rounded-full hover:bg-red-700 transition font-bold text-lg">
                    Send Message
                </button>

            </form>

        </div>

        <!-- CONTACT INFO COLUMN -->
       <div class="relative flex flex-col justify-center space-y-6 p-8 rounded-xl overflow-hidden shadow-2xl border border-gray-800">

    <!-- Background Image -->
    <div class="absolute inset-0 bg-cover bg-center opacity-80"
         style="background-image:url('<?= BASE_URL . "assets/images/flatbed5.webp" ?>');">
    </div>

    <!-- Gradient Overlay -->
    <div class="absolute inset-0 bg-gradient-to-br from-black/80 via-black/60 to-black/40"></div>

    <!-- Content -->
    <div class="relative z-10 bg-black/40 backdrop-blur-sm p-6 rounded-lg">

        <h3 class="text-2xl font-bold text-red-600 drop-shadow-lg">
            Contact Information
        </h3>

        <div class="space-y-4 text-gray-100 text-lg mt-4 font-medium">

            <p class="drop-shadow-md">
                📞 <strong>Phone:</strong> 1-423-680-1299
            </p>

            <p class="drop-shadow-md">
                📍 <strong>Address:</strong><br>
                4295 Cromwell Rd Ste 418<br>
                Chattanooga, TN
            </p>

            <p class="drop-shadow-md">
                ✉ <strong>Email:</strong><br>
                info@parrishft.com<br>
                operations@parrishft.com<br>
                dispatch@parrishft.com
            </p>

        </div>

    </div>

</div>s
    </div>
</div>
</section>

<script>
const subjectSelect = document.getElementById('subjectSelect');
const otherSubjectContainer = document.getElementById('otherSubjectContainer');
const otherSubjectInput = document.getElementById('otherSubjectInput');

subjectSelect.addEventListener('change', function() {

    if (this.value === 'Other') {
        otherSubjectContainer.classList.remove('hidden');
        otherSubjectInput.setAttribute('required', 'required');
    } else {
        otherSubjectContainer.classList.add('hidden');
        otherSubjectInput.removeAttribute('required');
    }

});
</script>

<?php include BASE_PATH . 'includes/footer.php'; ?>