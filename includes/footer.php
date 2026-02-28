<footer class="bg-[#1c1c1c] text-white mt-20 border-t border-[#222]">
<div class="max-w-7xl mx-auto px-4 py-12 grid md:grid-cols-3 gap-8">

<div>
<h3 class="font-bold text-xl mb-4"><?php echo SITE_NAME; ?></h3>
<p>Professional freight and logistics solutions nationwide.</p>
</div>

<div>
<h3 class="font-bold mb-4">Quick Links</h3>
<ul class="space-y-2">
<li><a href="/pft-website/index.php">Home</a></li>
<li><a href="/pft-website/pages/about.php">About</a></li>
<li><a href="/pft-website/pages/contact.php">Contact</a></li>
</ul>
</div>

<div>
<h3 class="font-bold mb-4">Contact</h3>
<p>📞 1-423-680-1299</p>
<p>📍 Chattanooga, TN</p>
<p>✉ info@parrishft.com</p>
</div>

</div>

<div class="text-center py-4 border-t border-white/20">
© <?php echo date("Y"); ?> <?php echo SITE_NAME; ?>
</div>
</footer>
<script>
const menuBtn = document.getElementById("menuBtn");
const closeMenu = document.getElementById("closeMenu");
const mobileMenu = document.getElementById("mobileMenu");
const mobileOverlay = document.getElementById("mobileOverlay");

const mobileServicesBtn = document.getElementById("mobileServicesBtn");
const mobileServicesMenu = document.getElementById("mobileServicesMenu");
const mobileServicesIcon = document.getElementById("mobileServicesIcon");


// OPEN MENU
menuBtn.addEventListener("click", () => {
    mobileMenu.classList.remove("translate-x-full");
    mobileOverlay.classList.remove("hidden");
});

// CLOSE MENU
function closeMobileMenu() {
    mobileMenu.classList.add("translate-x-full");
    mobileOverlay.classList.add("hidden");
}
closeMenu.addEventListener("click", closeMobileMenu);
mobileOverlay.addEventListener("click", closeMobileMenu);


// ACCORDION WITH FADE + CLOSE OTHERS
mobileServicesBtn.addEventListener("click", function () {

    const isOpen = mobileServicesMenu.style.maxHeight;

    // Close first (if open)
    mobileServicesMenu.style.maxHeight = null;
    mobileServicesMenu.classList.add("opacity-0");
    mobileServicesIcon.classList.remove("rotate-180");

    if (!isOpen) {
        mobileServicesMenu.style.maxHeight = mobileServicesMenu.scrollHeight + "px";
        mobileServicesMenu.classList.remove("opacity-0");
        mobileServicesIcon.classList.add("rotate-180");
    }

});
</script>

</body>
</html>