<section class="bg-[#0f0f0f] py-24 px-6 relative">


<!-- TAB STYLE TITLE -->
<div class="flex justify-center mb-14">

    <div class="relative inline-block">

        <!-- Oval Background -->
        <div class="absolute inset-0 bg-red-600 rounded-full shadow-lg"></div>

        <!-- Text -->
        <h2 class="relative z-10 text-white text-3xl md:text-4xl font-bold
                   px-12 py-4 tracking-wide">
            Our Fleet
        </h2>

    </div>

</div>

    <!-- Updated Description -->
    <p class="text-gray-400 text-center max-w-3xl mx-auto mb-16 leading-relaxed">
        Reliable flatbed, stepdeck and oversize load trailers engineered for performance, safety
        and dependable nationwide hauling solutions.
    </p>

    <!-- Masonry Layout -->
    <div id="fleetContainer" class="columns-1 sm:columns-2 lg:columns-3 xl:columns-4 gap-6 space-y-6">

        <?php
        $fleetImages = [
            BASE_URL . "assets/images/loading.jpg",
            BASE_URL . "assets/images/stepdek5.webp",
            BASE_URL . "assets/images/stepdek6.webp",
            BASE_URL . "assets/images/flatbed1.webp",
            BASE_URL . "assets/images/flatbed2.webp",
            BASE_URL . "assets/images/flatbed3.webp",
            BASE_URL . "assets/images/flatbed6.webp",
            BASE_URL . "assets/images/stepdek.webp",
            BASE_URL . "assets/images/stepdek1.webp",
            BASE_URL . "assets/images/stepdek2.webp",
            BASE_URL . "assets/images/stepdek9.webp",
            BASE_URL . "assets/images/stepdek8.webp",
            BASE_URL . "assets/images/flatbed.webp",
            BASE_URL . "assets/images/stepdek7.webp"
        ];

        foreach ($fleetImages as $image) :
        ?>

        <div class="relative break-inside-avoid cursor-pointer group fleet-item opacity-0 translate-y-10 transition-all duration-700">

            <img src="<?= $image; ?>"
                 class="w-full rounded-xl shadow-lg transition duration-700 group-hover:scale-105">

            <!-- Specs Overlay -->
            <div class="absolute inset-0 bg-black/70 rounded-xl
                        opacity-0 group-hover:opacity-100
                        flex items-center justify-center text-white text-center
                        transition duration-500 px-4">

                <!-- <div>
                    <h3 class="text-lg font-semibold">Equipment Specs</h3>
                    <p class="text-sm text-gray-300 mt-2">
                        Heavy-duty trailers built for flatbed, stepdeck & oversize freight.
                    </p>
                </div> -->

            </div>

        </div>

        <?php endforeach; ?>

    </div>

</section>