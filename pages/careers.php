<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/pft-website/includes/config.php';
include BASE_PATH . 'includes/header.php';

// Handle Careers Form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $form_type = $_POST['form_type']; // distinguish forms

  if($form_type === "application"){
      $name = htmlspecialchars($_POST["name"]);
      $email = htmlspecialchars($_POST["email"]);
      $phone = htmlspecialchars($_POST["phone"]);
      $experience = htmlspecialchars($_POST["experience"]);
      $message = htmlspecialchars($_POST["message"]);

      $recaptcha_secret = "YOUR_SECRET_KEY"; 
      $recaptcha_response = $_POST['g-recaptcha-response'];
      $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$recaptcha_secret&response=$recaptcha_response");
      $responseKeys = json_decode($response, true);

      if(intval($responseKeys["success"]) !== 1) {
          echo "<div class='bg-red-600 text-white text-center py-4'>Please complete the reCAPTCHA</div>";
      } else {
          $resume = $_FILES['resume'];
          $resumePath = '';
          if($resume && $resume['error'] == 0){
              $allowed = ['pdf','doc','docx'];
              $ext = pathinfo($resume['name'], PATHINFO_EXTENSION);
              if(in_array(strtolower($ext), $allowed)){
                  $resumePath = '/uploads/resumes/' . time() . '-' . basename($resume['name']);
                  move_uploaded_file($resume['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . $resumePath);
              }
          }
          $to = "info@parrishft.com";  
          $subject = "New Job Application - $name";
          $body = "Name: $name\nEmail: $email\nPhone: $phone\nExperience: $experience\nMessage:\n$message\nResume: $resumePath";
          $headers = "From: $email";
          mail($to, $subject, $body, $headers);
          echo "<div class='bg-green-600 text-white text-center py-4'>Application submitted successfully!</div>";
      }
  }

  // Driver profile form submission
  if($form_type === "driver"){
      $driver_email = "dispatch@parrishft.com"; // Dispatch email
      $driver_name = htmlspecialchars($_POST['driver_name']);
      $driver_email_form = htmlspecialchars($_POST['driver_email']);
      $driver_phone = htmlspecialchars($_POST['driver_phone']);
      $driver_birthday = htmlspecialchars($_POST['driver_birthday']);
      $driver_address = htmlspecialchars($_POST['driver_address']);
      $driver_city = htmlspecialchars($_POST['driver_city']);
      $driver_state = htmlspecialchars($_POST['driver_state']);
      $driver_zip = htmlspecialchars($_POST['driver_zip']);
      $driver_experience = htmlspecialchars($_POST['driver_experience']);

      $subject = "New Driver Profile - $driver_name";
      $body = "Driver Name: $driver_name\nEmail: $driver_email_form\nPhone: $driver_phone\nBirthday: $driver_birthday\nAddress: $driver_address\nCity: $driver_city\nState: $driver_state\nZip: $driver_zip\nYears of Driving Experience: $driver_experience";

      mail($driver_email, $subject, $body, "From: $driver_email_form");
      echo "<div class='bg-green-600 text-white text-center py-4'>Driver profile submitted successfully!</div>";
  }
}
?>

<title>Careers & Driver Profiles - Parrish Family Trucking</title>
<meta name="description" content="Parrish Family Trucking careers. Apply for driver and office positions, submit detailed driver profiles, and explore a modern, interactive careers portal.">

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<section class="relative h-[400px] overflow-hidden">
  <!-- Parallax background -->
  <div class="absolute inset-0 bg-gradient-to-r from-gray-900 via-gray-800 to-gray-900 animate-gradient-x bg-cover bg-center" style="background-attachment: fixed;"></div>
  <div class="absolute inset-0 bg-black/60"></div>
  <div class="relative z-10 flex flex-col justify-center items-center h-full text-center text-white">
    <h1 class="text-5xl font-bold mb-4" data-aos="fade-down">Join Our Team</h1>
    <p class="text-lg text-gray-300" data-aos="fade-up">Drive your career forward or submit your driver profile today!</p>
  </div>
</section>

<section class="py-20 bg-gray-900 text-white max-w-6xl mx-auto px-6 space-y-20">

<!-- Why Choose Us -->
<div class="relative rounded-3xl overflow-hidden" data-aos="fade-right">

  <!-- Background Image -->
  <div class="absolute inset-0">
    <img src="/pft-website/assets/images/stepdek1.webp" 
         alt="Truck Background"
         class="w-full h-full object-cover">
  </div>

  <!-- Dark Overlay (for readability) -->
  <div class="absolute inset-0 bg-black bg-opacity-70"></div>

  <!-- Content -->
  <div class="relative z-10 p-12 text-white">
    <h2 class="text-4xl font-bold text-center mb-10">Why Choose Us</h2>

    <div class="grid md:grid-cols-3 gap-10">
<?php
$reasons = [
  ["Reliable Equipment", "Drive modern trucks safely.", "text-white"],
  ["Competitive Pay", "Competitive compensation plus bonuses.", "text-white"],
  ["Family Culture", "We treat drivers like family.", "text-white"],
  ["Flexible Schedules", "Balance work and home life.", "text-white"],
  ["Safety First", "Strict safety standards.", "text-white"],
  ["Career Growth", "Promotion and leadership opportunities.", "text-white"]
];
foreach($reasons as $r){
  echo "<div class='p-8 rounded-xl bg-gray-900 bg-opacity-80 hover:scale-105 transform transition shadow-lg'>
    <h3 class='text-2xl font-semibold mb-3 {$r[2]}'>{$r[0]}</h3>
    <p class='text-gray-300'>{$r[1]}</p>
  </div>";
}
?>
    </div>
  </div>

</div>

  <!-- Driver Benefits -->
  <div class="bg-gray-800 p-12 rounded-3xl shadow-xl" data-aos="fade-left">
    <h2 class="text-4xl font-bold mb-6 text-red-400 text-center">Driver Benefits</h2>
    <ul class="list-disc list-inside text-gray-300 text-lg space-y-3">
      <li>Health, dental, vision insurance</li>
      <li>401(k) retirement plan</li>
      <li>Flexible schedules</li>
      <li>Paid safety training</li>
      <li>Referral bonuses</li>
      <li>Modern trucks with advanced safety features</li>
    </ul>
  </div>

  <!-- Job Search & Filter -->
  <div data-aos="fade-up">
    <h2 class="text-4xl font-bold text-center mb-8">Available Positions</h2>
    <div class="flex justify-center gap-4 mb-6 flex-wrap">
      <button class="job-filter px-8 py-3 rounded-full bg-red-600 hover:bg-red-700 transition text-white font-semibold" data-type="all">All</button>
      <button class="job-filter px-8 py-3 rounded-full bg-gray-700 hover:bg-gray-600 transition text-white font-semibold" data-type="driver">Driver</button>
      <button class="job-filter px-8 py-3 rounded-full bg-gray-700 hover:bg-gray-600 transition text-white font-semibold" data-type="office">Office</button>
    </div>
    <input id="job-search" type="text" placeholder="Search jobs..." class="w-full p-4 rounded-lg bg-gray-800 text-white border border-gray-700 mb-8">
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
            <div class='flip-card-back absolute inset-0 bg-gray-900 rounded-xl p-8 flex flex-col justify-center items-center text-center opacity-0 hover:opacity-100 transition-opacity'>
              <p class='text-gray-300'>More info on position and benefits.</p>
            </div>
          </div>
        </div>";
      }
      ?>
    </div>
  </div>

  <!-- Tabbed Form -->
  <div class="max-w-4xl mx-auto mt-12" data-aos="fade-up">
    <div class="flex justify-center mb-8 space-x-4">
      <button class="tab-btn px-6 py-3 bg-red-600 text-white rounded-full font-semibold" data-tab="application">Job Application</button>
      <button class="tab-btn px-6 py-3 bg-gray-700 text-white rounded-full font-semibold" data-tab="driver">Driver Profile</button>
    </div>

    <!-- Application Form -->
    <div id="application" class="tab-content">
      <form method="POST" enctype="multipart/form-data" class="space-y-6">
        <input type="hidden" name="form_type" value="application">
        <input type="text" name="name" required placeholder="Full Name" class="w-full border border-gray-700 p-4 rounded-lg bg-gray-900 text-white">
        <input type="email" name="email" required placeholder="Email Address" class="w-full border border-gray-700 p-4 rounded-lg bg-gray-900 text-white">
        <input type="tel" name="phone" required placeholder="Phone Number" class="w-full border border-gray-700 p-4 rounded-lg bg-gray-900 text-white">
        <input type="text" name="experience" required placeholder="Years of Experience" class="w-full border border-gray-700 p-4 rounded-lg bg-gray-900 text-white">
        <textarea name="message" rows="5" required placeholder="Tell us about your driving experience" class="w-full border border-gray-700 p-4 rounded-lg bg-gray-900 text-white"></textarea>
        <label class="block text-gray-300">
          Upload Resume:
          <input type="file" name="resume" accept=".pdf,.doc,.docx" required class="mt-2 text-gray-900">
        </label>
         
        <button type="submit" class="w-full bg-red-600 text-white py-4 rounded-full hover:bg-red-700 transition font-bold text-lg">Submit Application</button>
      </form>
    </div>

    <!-- Driver Profile Form -->
    <div id="driver" class="tab-content hidden">
      <form method="POST" class="space-y-6">
        <input type="hidden" name="form_type" value="driver">
        <input type="text" name="driver_name" required placeholder="Full Name" class="w-full border border-gray-700 p-4 rounded-lg bg-gray-900 text-white">
        <input type="email" name="driver_email" required placeholder="Email Address" class="w-full border border-gray-700 p-4 rounded-lg bg-gray-900 text-white">
        <input type="tel" name="driver_phone" required placeholder="Mobile Phone" class="w-full border border-gray-700 p-4 rounded-lg bg-gray-900 text-white">
        <input type="date" name="driver_birthday" required placeholder="Birthday" class="w-full border border-gray-700 p-4 rounded-lg bg-gray-900 text-white">
        <input type="text" name="driver_address" required placeholder="Address" class="w-full border border-gray-700 p-4 rounded-lg bg-gray-900 text-white">
        <input type="text" name="driver_city" required placeholder="City" class="w-full border border-gray-700 p-4 rounded-lg bg-gray-900 text-white">
        <input type="text" name="driver_state" required placeholder="State" class="w-full border border-gray-700 p-4 rounded-lg bg-gray-900 text-white">
        <input type="text" name="driver_zip" required placeholder="Zip Code" class="w-full border border-gray-700 p-4 rounded-lg bg-gray-900 text-white">
        <input type="text" name="driver_experience" required placeholder="Years of Driving Experience" class="w-full border border-gray-700 p-4 rounded-lg bg-gray-900 text-white">
        <button type="submit" class="w-full bg-red-600 text-white py-4 rounded-full hover:bg-red-700 transition font-bold text-lg">Submit Driver Profile</button>
      </form>
    </div>
  </div>

</section>

<!-- Scripts -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script>
AOS.init({ duration: 1000, once: true });

// Job filter
const filterButtons = document.querySelectorAll('.job-filter');
const jobItems = document.querySelectorAll('.flip-card');
const searchInput = document.getElementById('job-search');

filterButtons.forEach(btn => {
  btn.addEventListener('click', () => {
    const type = btn.getAttribute('data-type');
    jobItems.forEach(job => {
      if(type === 'all' || job.getAttribute('data-type') === type){
        job.style.display = 'block';
      } else { job.style.display = 'none'; }
    });
    filterButtons.forEach(b => b.classList.replace('bg-red-600','bg-gray-700'));
    btn.classList.replace('bg-gray-700','bg-red-600');
  });
});

// Live search
searchInput.addEventListener('input', e => {
  const val = e.target.value.toLowerCase();
  jobItems.forEach(job => {
    if(job.innerText.toLowerCase().includes(val)) job.style.display='block';
    else job.style.display='none';
  });
});

// Tab switching
const tabs = document.querySelectorAll('.tab-btn');
const tabContents = document.querySelectorAll('.tab-content');
tabs.forEach(tab => {
  tab.addEventListener('click', () => {
    tabContents.forEach(c => c.classList.add('hidden'));
    document.getElementById(tab.getAttribute('data-tab')).classList.remove('hidden');
    tabs.forEach(t => t.classList.replace('bg-red-600','bg-gray-700'));
    tab.classList.replace('bg-gray-700','bg-red-600');
  });
});

// Animated shadow on hover
function hoverShadow(e, el){
  const rect = el.getBoundingClientRect();
  const x = e.clientX - rect.left;
  const y = e.clientY - rect.top;
  el.style.boxShadow = `${(x-rect.width/2)/10}px ${(y-rect.height/2)/10}px 30px rgba(255,0,0,0.6)`;
}
</script>

<style>
/* Animated gradient */
@keyframes gradient-x {
  0% { background-position: 0% 50%; }
  50% { background-position: 100% 50%; }
  100% { background-position: 0% 50%; }
}
.animate-gradient-x { background-size: 200% 200%; animation: gradient-x 10s ease infinite; }

/* Flip card hover */
.flip-card { perspective: 1000px; position: relative; }
.flip-card-inner { position: relative; transition: transform 0.6s; transform-style: preserve-3d; }
.flip-card:hover .flip-card-inner { transform: rotateY(180deg); }
.flip-card-front, .flip-card-back { backface-visibility: hidden; }
.flip-card-back { transform: rotateY(180deg); position: absolute; top:0; left:0; width:100%; height:100%; }
</style>

<?php include BASE_PATH . 'includes/footer.php'; ?>