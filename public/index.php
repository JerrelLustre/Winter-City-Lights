<!DOCTYPE html>
<html lang="en" style="font-size:12px;" class="overflow-x-clip w-screen">

<?php
require_once "../app/init.php";
require_once(get_path("app/data/carousel-cell-data.php"));
$title = "Winter City Lights - Vancouver Winter Festival Homepage";
include get_path("public/partials/global/head.php");
?>

<body class="bg-gold-light w-screen">
    <!-- Header -->
    <?php include get_path("public/partials/global/header.php"); ?>
    <!-- End:Header -->

        <main class="w-screen overflow-x-hidden">
        <!-- Banner Container -->
            <section class="bg-[url('../img/homepageBanner-winter-city-lights.webp')] mb-[12.1875rem] bg-cover bg-center bg-no-repeat border-t-4 border-b-4 box-border border-navy flex flex-col items-center justify-center w-screen">
                <div class="text-center text-white pt-20 md:pt-[8.25rem] pb-[9.5rem] sm:pb-10">
                    <h1 class="md:text-2xl lg:text-3xl drop-shadow-txt font-sans text-lg font-semibold">Vancouver Winter Festival</h1>
                    <p class="md:text-6xl lg:text-8xl drop-shadow-txt my-6 font-serif text-5xl font-bold tracking-widest">Winter City Lights</p>
                    <p class="max-w-[18.125rem] md:max-w-[21.25rem] md:text-2xl mx-auto  text-lg font-sans lg:text-2xl font-semibold drop-shadow-txt mb-3">where cultures come together in a winter wonderland</p>
                </div>

                <!-- Buy Tickets button -->
                <div class="bg-[url('../img/svg/ticket-bg-wintercitylights.svg')] bg-no-repeat bg-[length:100%_100%] w-[30rem] h-[15.5rem]  bg-center  relative -bottom-32 md:-bottom-14 text-center text-white drop-shadow-blue">
                    <p class="drop-shadow-txt w-72 pt-8 mx-auto mb-6 font-sans text-lg font-semibold text-center">Create new memories now at this year’s Vancouver winter festival</p>
                    <a class="btn" href="<?php echo get_public_url('buyPass-winter-city-lights.php') ?>">Get Event Pass</a>
                </div>
                <!--end: Buy Ticket button -->

            </section>
        
        <!-- End:Banner Container -->
        
        <!-- Carousel -->
            <section class="carousel xl:h-[37.5rem] mb-52" data-flickity='{ "draggable": false, "fade": true , "lazyLoad": true  }'>
                <!-- All cells are set to max width. In mobile, elemented are formatted normally. At XL (1280px) The image is taken out of the flow with absolute, and its grand-parent is made relative while its direct parent is turned back into static. This allows us to position it to the right, while keeping the content on the left -->
                
                <!-- This foreach() loop runs the carousel cell template for every value in the $cells array.For each loop, value is specified with $cellInfo -->
                <?php foreach ($cells as $cellInfo): ?>
                    <?php include("partials/carousel-cell.php"); ?>
                <?php endforeach; ?>
                    <!-- endforeach ends the foreach() loop -->
            </section>
        <!-- End:Carousel -->

        <!-- Image gallery -->
            <section class="max-w-[98.75rem] mx-auto flex justify-center flex-col mb-16">
                <h2 class="w-full px-5 md:text-left lg:mx-0 py-[0.625rem] max-w-lg mx-auto border-gold bg-gold-light border-4  font-serif font-bold text-navy rounded-3xl text-3xl text-center shadow-blue ">Past Festival Moments</h2>
                <div class="flex flex-wrap justify-center mx-auto mb-8">
                        <div class="relative -z-10 basis-1/2 md:basis-1/3 max-w-[37.5rem] min-w-[10rem] max-h-[37.5rem]">
                            <img class="JSlazyload object-cover w-full h-full" src="<?php echo get_public_url('img/lazyload/loading-familyCelebration2019-gallery-img-winter-city-lights.webp') ?>" data-src="<?php echo get_public_url('img/familyCelebration2019-gallery-img-winter-city-lights.webp') ?>" alt="A family having fun out in the snow">
                            <div class="bottom-4 left-4 md:text-base drop-shadow-txt absolute z-10 font-medium text-white">
                                <p>2019 Winter City Lights</p>
                                <p class="italic">Family Celebration</p>
                            </div>
                        </div>
                        <div class="relative -z-10 basis-1/2 md:basis-1/3 max-w-[37.5rem] min-w-[10rem]  max-h-[37.5rem]">
                            <img class="JSlazyload object-cover w-full h-full" src="<?php echo get_public_url('img/lazyload/loading-winterBazaar2018-gallery-img-winter-city-lights.webp') ?>" data-src="<?php echo get_public_url('img/winterBazaar2018-gallery-img-winter-city-lights.webp') ?>" alt="A light structure in the shape of a snowflake with light adorned trees in the background">
                            <div class="bottom-4 left-4 md:text-base drop-shadow-txt absolute z-10 font-medium text-white">
                                <p>2019 Winter City Lights</p>
                                <p class="italic">Winter Bazaar</p>
                            </div>
                        </div>
                        <div class="relative -z-10 basis-1/2 md:basis-1/3 max-w-[37.5rem] min-w-[10rem]  max-h-[37.5rem]">
                            <img class="JSlazyload object-cover w-full h-full" src="<?php echo get_public_url('img/lazyload/loading-iceSculptures2019-gallery-img-winter-city-lights.webp') ?>" data-src="<?php echo get_public_url('img/iceSculptures2019-gallery-img-winter-city-lights.webp') ?>" alt="">
                            <div class="bottom-4 left-4 md:text-base drop-shadow-txt absolute z-10 font-medium text-white">
                                <p>2019 Winter City Lights</p>
                                <p class="italic">Ice Sculpture Gallery</p>
                            </div>
                        </div>
                        <div class="relative -z-10 basis-1/2 md:basis-1/3 max-w-[37.5rem] min-w-[10rem]  max-h-[37.5rem]">
                            <img class="JSlazyload object-cover w-full h-full" src="<?php echo get_public_url('img/lazyload/loading-winterBazaar2022-gallery-img-winter-city-lights.webp') ?>" data-src="<?php echo get_public_url('img/winterBazaar2022-gallery-img-winter-city-lights.webp') ?>" alt="">
                            <div class="bottom-4 left-4 md:text-base drop-shadow-txt absolute z-10 font-medium text-white">
                                <p>2022 Winter City Lights</p>
                                <p class="italic">Winter Bazaar</p>
                            </div>
                        </div>
                        <div class="relative -z-10 basis-1/2 md:basis-1/3 max-w-[37.5rem] min-w-[10rem]  max-h-[37.5rem]">
                            <img class="JSlazyload object-cover w-full h-full" src="<?php echo get_public_url('img/lazyload/loading-lightSculptures2018-gallery-img-winter-city-lights.webp') ?>" data-src="<?php echo get_public_url('img/lightSculptures2018-gallery-img-winter-city-lights.webp') ?>" alt="">
                            <div class="bottom-4 left-4 md:text-base drop-shadow-txt absolute z-10 font-medium text-white">
                                <p>2018 Winter City Lights</p>
                                <p class="italic">Light Sculptures Row</p>
                            </div>
                        </div>
                </div>
                <a class="btn mx-auto" href="#">See This Year's Events</a>
            </section>
        <!-- End Image gallery -->



        </main>
    
    
        <!-- Footer -->
    <?php include get_path("public/partials/global/footer.php"); ?>
    <!-- End:Footer -->
    <script src="./js/flickity.js"></script>
    <script src="./js/flickity-fade.js"></script>
    <script src="./js/lazyload.min.js"></script>
    <!-- Scripts moves flickity containers around and initializes lazyload -->
    <script src="./js/script.js"></script>
    <!-- Mobile nav controls -->
    <script src="./js/menu.js"></script>
</body>
</html>