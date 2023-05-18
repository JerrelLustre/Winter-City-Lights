<!DOCTYPE html>
<html lang="en" style="font-size:12px;">

<?php
require_once "../app/init.php";
require_once(get_path("app/data/carousel-cell-data.php"));
$title = "Winter City Lights - Vancouver Winter Festival - Event Passes";
include get_path("public/partials/global/head.php");
?>

<body class="bg-gold-light">

    <!-- Header -->
    <?php include get_path("public/partials/global/header.php"); ?>
    <!-- End:Header -->

    <main class=" relative mb-16 md:mb-0">

        <!-- Page heading -->
        <div class="text-navy max-w-lg mx-auto py-20 text-center">
            <h1 class="font-serif font-bold text-5xl mb-4">Get Your Event Passes</h1>
            <p class="font-sans text-2xl w-3/5 mx-auto">Create New Memories This Winter</p>
        </div>
        <!-- End: page heading -->
        
        <!-- Cards Container -->
        <div class="flex  items-center relative  justify-center gap-12 flex-wrap">

            <!-- bg -->
            <div class="bg-banner absolute w-screen -z-10 box-border border-navy border-8 top-12 bottom-16 bg-center bg-no-repeat bg-cover"></div>
            <!-- end:bg -->

            <!-- Card 1 -->
            <div class="text-white text-base max-w-md ">
                <h2 class="
                before:content-star before:absolute before:bottom-[10%]  before:scale-50 before:h-auto before:right-3/4 
                after:content-star after:absolute after:top-[10%]  after:scale-50 after:h-auto after:left-[79%] 
                tracking-widest relative top-4 px-5 w-fit py-[0.625rem] border-gold bg-gold-light border-4 font-bold font-serif text-navy rounded-3xl text-3xl text-center shadow-blue ">Family Pass</h2>
                <div class="bg-navy mx-2 p-4 rounded-3xl py-12">
                    <p class="italic mb-10">Perfect for parents and kids <br> $14.99 per pass</p>
                    <ul class="mb-10 list-disc list-inside">
                        <li class="mb-2">Valid for 4 family members and/or relatives (Persons age 16+)</li>
                        <li class="mb-2">Includes pass for children below age 16</li>
                        <li class="mb-2">Access to all event festivities</li>
                        <li class="mb-2">15 Vendor Vouchers for the Winter Bazaar</li>
                        <li class="mb-2">Free parking</li>
                    </ul>
                    <p class="mb-10">Passes are general admission and grant access to the Festival Site for the entire event duration</p>
                    <div class="flex justify-center">
                        <a class="btn" href="#">Add to cart</a>
                    </div>
                </div>
            </div>
            <!-- End: Card 1 -->

            <!-- Card 2 -->
            <div class="text-white text-base max-w-md  ">
                <h2 class="tracking-widest relative top-4 px-5 w-fit py-[10px] border-gold bg-gold-light border-4 font-bold font-serif text-navy rounded-3xl text-3xl text-center shadow-blue ">Group Pass</h2>
                <div class="bg-navy mx-2 p-4 rounded-3xl py-12">
                    <p class="italic mb-10">Good for a group outing <br> $16.99 per pass </p>
                    <ul class="mb-10 list-disc list-inside">
                        <li class="mb-2">Valid up to a group of 3</li>
                        <li class="mb-2">Access to all event festivities</li>
                        <li class="mb-2">15 vendor vouchers for the Winter Bazaar</li>
                        <li class="mb-2">Free parking</li>
                    </ul>
                    <p class="mb-10">Passes are general admission and grant access to the Festival Site for the entire event duration</p>
                    <div class="flex justify-center">
                        <a class="btn" href="#">Add to cart</a>
                    </div>
                </div>
            </div>
            <!-- End: Card 2 -->

            <!-- Card 3 -->
            <div class="text-white text-base max-w-md  ">
                <h2 class="tracking-widest relative top-4 px-5 w-fit py-[10px] border-gold bg-gold-light border-4 font-bold font-serif text-navy rounded-3xl text-3xl text-center shadow-blue ">Person Pass</h2>
                <div class="bg-navy mx-2 p-4 rounded-3xl py-12">
                    <p class="italic mb-10">Create new winter memories <br> $8.99 per pass</p>
                    <ul class="mb-10 list-disc list-inside">
                        <li class="mb-2">Valid for one individual</li>
                        <li class="mb-2">Access to all event festivities</li>
                        <li class="mb-2">3 Vendor Vouchers for the Winter Bazaar</li>
                        <li class="mb-2">Free parking</li>
                    </ul>
                    <p class="mb-10">Passes are general admission and grant access to the Festival Site for the entire event duration</p>
                    <div class="flex justify-center">
                        <a class="btn" href="#">Add to cart</a>
                    </div>
                </div>
            </div>
            <!-- End: Card 3 -->

        </div>
       <!-- End: Cards Container -->

       <!-- Checkout button -->
       <div class="flex justify-end w-full fixed md:static bottom-0 md:mt-12" >
            <div class="w-screen py-4 bg-gold-light border-4 border-navy rounded-bl-3xl rounded-tl-3xl flex  justify-center items-center sm:w-fit">
                    <a class="btn mx-8" href="./checkout-winter-city-lights.php">Checkout Items</a>
                    <img class="w-28 h-auto" src="./img/cart.svg" alt="Items in cart amount">
            </div>
        </div>
        <!-- End:Checkout button -->

    </main>
</body>
    <!-- Footer -->
    <?php include get_path("public/partials/global/footer.php"); ?>
    <!-- End:Footer -->
</html>