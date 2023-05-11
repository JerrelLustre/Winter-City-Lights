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
            <div class="bg-red-500 border-4 box-border border-navy flex flex-col items-center justify-center">
                <div class="text-center text-white pt-20 md:pt-[8.25rem] pb-[9.5rem] sm:pb-10">
                    <h1 class="font-sans text-base md:text-2xl lg:text-3xl font-semibold  drop-shadow-txt ">Vancouver Winter Festival</h1>
                    <p class="font-serif text-4xl md:text-6xl lg:text-8xl drop-shadow-txt my-6 tracking-widest">Winter City Lights</p>
                    <p class="max-w-[18.125rem] md:max-w-[21.25rem] md:text-2xl mx-auto  text-base font-sans lg:text-2xl font-semibold drop-shadow-txt mb-3">where cultures come together in a winter wonderland</p>
                </div>
                <div class="bg-[url('../img/ticket-bg-wintercitylights.svg')] bg-no-repeat bg-[length:100%_100%] w-[26.25rem] h-[15.5rem]  bg-center  relative -bottom-32 md:-bottom-14 text-center text-white drop-shadow-blue">
                    <p class="font-sans w-64 text-center pt-8 mb-6 mx-auto text-base font-semibold  drop-shadow-txt ">Create new memories now at this year’s Vancouver winter festival</p>
                    <a class="border-4 btn" href="#">Get Event Pass</a>
                </div>
            </div>


        </main>
    <?php include(get_path('public/partials/footer.php'))  ?>
</body>
</html>