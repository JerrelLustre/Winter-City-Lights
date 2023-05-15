<!DOCTYPE html>
<html lang="en" style="font-size:12px;">

<?php
require_once "../app/init.php";
require_once(get_path("app/data/carousel-cell-data.php"));
$title = "Winter City Lights - Vancouver Winter Festival Homepage";
include get_path("public/partials/global/head.php");
?>

<body class="bg-gold-light w-screen overflow-x-hidden">
    <!-- Header -->
    <?php include get_path("public/partials/global/header.php"); ?>

        <main>
        <!-- Banner -->
            <section class="bg-[url('../img/homepageBanner-winter-city-lights.jpg')] mb-[12.1875rem] bg-cover bg-center bg-no-repeat border-4 box-border border-navy flex flex-col items-center justify-center">
                <div class="text-center text-white pt-20 md:pt-[8.25rem] pb-[9.5rem] sm:pb-10">
                    <h1 class="md:text-2xl lg:text-3xl drop-shadow-txt font-sans text-base font-semibold">Vancouver Winter Festival</h1>
                    <p class="md:text-6xl lg:text-8xl drop-shadow-txt my-6 font-serif text-4xl tracking-widest">Winter City Lights</p>
                    <p class="max-w-[18.125rem] md:max-w-[21.25rem] md:text-2xl mx-auto  text-base font-sans lg:text-2xl font-semibold drop-shadow-txt mb-3">where cultures come together in a winter wonderland</p>
                </div>
                <div class="bg-[url('../img/ticket-bg-wintercitylights.svg')] bg-no-repeat bg-[length:100%_100%] w-[26.25rem] h-[15.5rem]  bg-center  relative -bottom-32 md:-bottom-14 text-center text-white drop-shadow-blue">
                    <p class="drop-shadow-txt w-64 pt-8 mx-auto mb-6 font-sans text-base font-semibold text-center">Create new memories now at this year’s Vancouver winter festival</p>
                    <a class="btn" href="#">Get Event Pass</a>
                </div>
            </section>
            
            <section class="carousel xl:h-[37.5rem] mb-52" data-flickity='{ "wrapAround": true, "draggable": false, "fade": true , "lazyLoad": true  }'>
                <!-- All cells are set to max width. In mobile, elemented are formatted normally. At XL (1280px) The image is taken out of the flow with absolute, and its grand-parent is made relative while its direct parent is turned back into static. This allows us to position it to the right, while keeping the content on the left -->
                
                <!-- Foreach() is a "for" loop that runs code once for every value in an array while specifying the values as as variable -->
                <!-- This foreach() loop runs the carousel cell template for every value in the $cells array.For each loop, value is specified with $cellInfo -->
                <?php foreach ($cells as $cellInfo): ?>
                    <?php include("partials/carousel-cell.php"); ?>
                    
                <?php endforeach; ?>
                    <!-- endforeach ends the foreach() loop -->
            </section>
            <!-- <section class="max-w-[80rem] mx-auto">
            <h2 class="px-5 xl:mx-10 py-[0.625rem] w-fit mx-auto border-gold bg-gold-light border-8 font-serif text-navy rounded-3xl text-3xl text-center shadow-blue ">Past Festival Moments</h2>
            <div class="mx-auto grid-cols-12 ">
                    <div class="col-span-12 h-40 relative">
                        <img class="w-full h-full object-cover object-[0_30%]" src="img/familyCelebration2019-gallery-img-winter-city-lights.jpg" alt="">
                        <div class="absolute bottom-4 left-4 md:text-base drop-shadow-txt text-white font-medium">
                            <p>2019 Winter City Lights</p>
                            <p class="italic">Family Celebration</p>
                        </div>
                    </div>
                    <div class="">
                        <img class="w-full h-full" src="img/winterBazaar2018-gallery-img-winter-city-lights.jpg" alt="">
                        <div class="absolute bottom-4 left-4 md:text-base drop-shadow-txt text-white font-medium">
                            <p>2019 Winter City Lights</p>
                            <p class="italic">Winter Bazaar</p>
                        </div>
                    </div>
                    <div class="">
                        <img class="w-full h-full" src="img/iceSculptures2019-gallery-img-winter-city-lights.jpg" alt="">
                        <div class="absolute bottom-4 left-4 md:text-base drop-shadow-txt text-white font-medium">
                            <p>2019 Winter City Lights</p>
                            <p class="italic">Ice Sculpture Gallery</p>
                        </div>
                    </div>
                    <div class="">
                        <img class="w-full h-full" src="img/winterBazaar2022-gallery-img-winter-city-lights.jpg" alt="">
                        <div class="absolute bottom-4 left-4 md:text-base drop-shadow-txt text-white font-medium">
                            <p>2022 Winter City Lights</p>
                            <p class="italic">Winter Bazaar</p>
                        </div>
                    </div>
                    <div class="">
                        <img class="w-full h-full" src="img/lightSculptures2018-gallery-img-winter-city-lights.jpg" alt="">
                        <div class="absolute bottom-4 left-4 md:text-base drop-shadow-txt text-white font-medium">
                            <p>2018 Winter City Lights</p>
                            <p class="italic">Light Sculptures Row</p>
                        </div>
                    </div>


            
            </div>
            </section>
             -->



        </main>
    <!-- Footer -->
    <?php include get_path("public/partials/global/footer.php"); ?>
    <!-- End:Footer -->
    <script src="js/flickity.js"></script>
    <script src="js/flickity-fade.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/script.js"></script>

</body>
</html>