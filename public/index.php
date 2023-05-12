<!DOCTYPE html>
<html lang="en">

<?php
    require_once('../app/init.php');    
    $title = "Winter City Lights - Vancouver Winter Festival Homepage";
    include(get_path('public/partials/head.php')) 
?>
<body class="bg-gold-light">
    <?php include(get_path('public/partials/header.php'))  ?>
        <main>
            <section class="bg-red-500 mb-[5.3125rem] border-4 box-border border-navy flex flex-col items-center justify-center">
                <div class="text-center text-white pt-20 md:pt-[8.25rem] pb-[9.5rem] sm:pb-10">
                    <h1 class="font-sans text-base md:text-2xl lg:text-3xl font-semibold  drop-shadow-txt ">Vancouver Winter Festival</h1>
                    <p class="font-serif text-4xl md:text-6xl lg:text-8xl drop-shadow-txt my-6 tracking-widest">Winter City Lights</p>
                    <p class="max-w-[18.125rem] md:max-w-[21.25rem] md:text-2xl mx-auto  text-base font-sans lg:text-2xl font-semibold drop-shadow-txt mb-3">where cultures come together in a winter wonderland</p>
                </div>
                <div class="bg-[url('../img/ticket-bg-wintercitylights.svg')] bg-no-repeat bg-[length:100%_100%] w-[26.25rem] h-[15.5rem]  bg-center  relative -bottom-32 md:-bottom-14 text-center text-white drop-shadow-blue">
                    <p class="font-sans w-64 text-center pt-8 mb-6 mx-auto text-base font-semibold  drop-shadow-txt ">Create new memories now at this year’s Vancouver winter festival</p>
                    <a class="border-4 btn" href="#">Get Event Pass</a>
                </div>
            </section>
            
            <section class="max-w-[24.375rem]  ">
                <h2 class="px-10 py-5 border-gold border-8">Don't Miss Out On These Experiences</h2>
                <img class="shadow-simple rounded-full border-white border-[16px]" src="" alt="">
                <div class="bg-navy ">
                    <h3 class="w-max-[21.875rem] upppercase font-serif text-2xl mb-14">Purchase This Year's 2023 Snow Globe Design</h3>
                    <p class="w-max-[21.875rem] font-sans text-xl">Each year Winter City Lights is run, we offer an opportunity to create a unique snowglobe specific to thatt year. Don't miss out on this opportunity to get this beautiful design for a limited time. Once its gone, it will never be featured again so get it while you can!</p>
                </div>
            </section>

            


        </main>
    <?php include(get_path('public/partials/footer.php'))  ?>
</body>
</html>