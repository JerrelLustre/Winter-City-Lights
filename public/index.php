<!DOCTYPE html>
<html lang="en">

<?php
require_once "../app/init.php";
$title = "Winter City Lights - Vancouver Winter Festival Homepage";
include get_path("public/partials/global/head.php");
?>

<body class="bg-gold-light">
    <?php include get_path("public/partials/global/header.php"); ?>
        <main>
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
            
            <section class="carousel" data-flickity='{ "wrapAround": true, "draggable": false, "fade": true  }'>
                <!-- All cells are set to max width. In mobile, elemented are formatted normally. At XL (1280px) The image is taken out of the flow with absolute, and its grand-parent is made relative while its direct parent is turned back into static. This allows us to position it to the right, while keeping the content on the left -->
                <div class="carousel-cell w-screen">
                    <div class="xl:relative mx-auto max-w-[98.75rem] xl:max-h-full xl:pb-36 ">
                        <h2 class="px-5 xl:mx-10 py-[0.625rem] w-fit mx-auto  border-gold bg-gold-light border-8 font-serif text-navy rounded-3xl text-3xl text-center shadow-blue ">Don't Miss Out On These Experiences</h2>
                        <div class="xl:static relative flex justify-center my-6">
                            <div class="absolute inset-y-[10%] xl:bottom-0 w-screen bg-banner bg-cover bg-center bg-no-repeat border-4 box-border border-navy -z-10 "></div>
                            <img class="relative xl:absolute xl:bottom-0 xl:right-10 shadow-simple mx-auto w-80 h-80 xl:h-full xl:w-auto rounded-full border-white border-[16px] z-10" src="img/snowglobeDesign-winter-city-lights.jpg" alt="">
                        </div>
                        
                        <div class="bg-navy w-fit text-gold-light rounded-3xl xl:mx-10 py-5 mx-auto">
                            <h3 class=" max-w-[21.875rem]  sm:max-w-[28rem] xl:max-w-[30rem]   px-5 upppercase font-serif text-2xl mb-14 mx-auto">Purchase This Year's 2023 Snow Globe Design</h3>
                            <p class="max-w-[21.875rem] px-5 font-sans sm:max-w-[28rem] xl:max-w-[30rem]   text-xl mx-auto">Each year Winter City Lights is run, we offer an opportunity to create a unique snowglobe specific to that year. Don't miss out on this opportunity to get this beautiful design for a limited time. Once its gone, it will never be featured again so get it while you can!</p>
                        </div>
                    </div>
                </div>

                <div class="carousel-cell w-screen">
                    <div class="xl:relative mx-auto max-w-[98.75rem] xl:max-h-full xl:pb-36 ">
                        <h2 class="px-5 xl:mx-10 py-[0.625rem] w-fit mx-auto  border-gold bg-gold-light border-8 font-serif text-navy rounded-3xl text-3xl text-center shadow-blue ">Don't Miss Out On These Experiences</h2>
                        <div class="xl:static relative flex justify-center my-6">
                            <div class="absolute inset-y-[10%] xl:bottom-0 w-screen bg-banner bg-cover bg-center bg-no-repeat border-4 box-border border-navy -z-10 "></div>
                            <img class="relative xl:absolute xl:bottom-0 xl:right-10 shadow-simple mx-auto w-80 h-80 xl:h-full xl:w-auto rounded-full border-white border-[16px] z-10" src="img/snowglobeDesign-winter-city-lights.jpg" alt="">
                        </div>
                        
                        <div class="bg-navy w-fit text-gold-light rounded-3xl xl:mx-10 py-5 mx-auto">
                            <h3 class=" max-w-[21.875rem]  sm:max-w-[28rem] xl:max-w-[30rem]   px-5 upppercase font-serif text-2xl mb-14 mx-auto">Purchase This Year's 2023 Snow Globe Design</h3>
                            <p class="max-w-[21.875rem] px-5 font-sans sm:max-w-[28rem] xl:max-w-[30rem]   text-xl mx-auto">Each year Winter City Lights is run, we offer an opportunity to create a unique snowglobe specific to that year. Don't miss out on this opportunity to get this beautiful design for a limited time. Once its gone, it will never be featured again so get it while you can!</p>
                        </div>
                    </div>
                </div>


            </section>

            



        </main>
    <?php include get_path("public/partials/global/footer.php"); ?>
    <script src="js/flickity.js"></script>
    <script src="js/flickity-fade.js"></script>
    <script src="js/script.js"></script>
</body>
</html>