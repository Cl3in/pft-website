<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/pft-website/includes/config.php';
include BASE_PATH . 'includes/header.php';
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $name = htmlspecialchars($_POST["name"]);
  $email = htmlspecialchars($_POST["email"]);
  $phone = htmlspecialchars($_POST["phone"]);
  $experience = htmlspecialchars($_POST["experience"]);
  $message = htmlspecialchars($_POST["message"]);

  $to = "info@parrishft.com";  // CHANGE TO YOUR EMAIL
  $subject = "New Driver Application - $name";

  $body = "Name: $name\n";
  $body .= "Email: $email\n";
  $body .= "Phone: $phone\n";
  $body .= "Experience: $experience\n\n";
  $body .= "Message:\n$message";

  $headers = "From: $email";

  mail($to, $subject, $body, $headers);

  echo "<div class='bg-green-600 text-white text-center py-4'>Application submitted successfully!</div>";
}
?>

<section class="relative h-[350px] flex items-center justify-center text-white">
  <img src="/pft-website/assets/images/flatbed2.webp"
       class="absolute inset-0 w-full h-full object-cover">
  <div class="absolute inset-0 bg-black/70"></div>
  <div class="relative z-10 text-center">
    <h1 class="text-5xl font-bold">Careers</h1>
  </div>
</section>

<section class="py-20 bg-white">
  <div class="max-w-4xl mx-auto px-6">

    <form method="POST" class="space-y-6">

      <input type="text" name="name" required placeholder="Full Name"
        class="w-full border border-gray-300 p-4 rounded-lg">

      <input type="email" name="email" required placeholder="Email Address"
        class="w-full border border-gray-300 p-4 rounded-lg">

      <input type="tel" name="phone" required placeholder="Phone Number"
        class="w-full border border-gray-300 p-4 rounded-lg">

      <input type="text" name="experience" required placeholder="Years of Experience"
        class="w-full border border-gray-300 p-4 rounded-lg">

      <textarea name="message" rows="5" required
        placeholder="Tell us about your driving experience"
        class="w-full border border-gray-300 p-4 rounded-lg"></textarea>

      <button type="submit"
        class="w-full bg-red-600 text-white py-4 rounded-full hover:bg-red-700 transition">
        Submit Application
      </button>

    </form>

  </div>
</section>

<?php include BASE_PATH . 'includes/footer.php'; ?>