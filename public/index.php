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
            <div class="bg-red-500 border-4 box-border border-navy ">
                <div class="text-center text-white pt-9">
                    <h1 class="font-sans text-lg md:text-2xl lg:text-3xl font-semibold leading-10 drop-shadow-txt ">Vancouver Winter Festival</h1>
                    <p class="font-serif text-5xl md:text-6xl lg:text-8xl drop-shadow-txt mb-3 tracking-widest">Winter City Lights</p>
                    <p class="w-4/5 lg:w-3/5 mx-auto md:text-2xl text-md font-sans lg:text-3xl font-semibold drop-shadow-txt mb-3">where cultures come together <br> in a winter wonderland</p>
                </div>
                <div class="bg-[url('../img/ticket-bg-wintercitylights.svg')] bg-no-repeat bg-[length:100%_100%] w-[98%] sm:w-4/5 md:w-3/5 bg-center lg:w-[46.875rem] lg:h-[18.75rem] mx-auto relative -bottom-14 text-center text-white drop-shadow-blue">
                    <p class="w-4/5 mx-auto pt-4 text-sm sm:text-lg font-serif lg:text-3xl font-semibold drop-shadow-txt ">Create new memories now <br> at this year’s Vancouver winter festival</p>
                    <a class=" my-10 sm:my-12 border-4 py-5 inline-block px-10 border-gold font-extrabold font-sans text-2xl  bg-navy rounded-3xl shadow-simple" href="#">Get Event Pass</a>
                </div>
            </div>


        </main>
    <?php include(get_path('public/partials/footer.php'))  ?>
</body>
</html>