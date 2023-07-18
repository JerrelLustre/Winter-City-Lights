<!DOCTYPE html>
<html lang="en" style="font-size:14px;" class="overflow-x-clip w-screen h-full">

<?php
require_once "../app/init.php";
require_once(get_path("app/data/carousel-cell-data.php"));
$title = "Winter City Lights - Vancouver Winter Festival - Event Passes";
include get_path("public/partials/global/head.php");
?>

<body class="bg-gold-light flex flex-col h-full">

    <!-- Header -->
    <?php include get_path("public/partials/global/header.php"); ?>
    <!-- End:Header -->

    <main class=" md:mb-0 relative flex-1 mb-16">

        <!-- Page heading -->
        <div class="text-navy max-w-lg py-20 mx-auto text-center">
            <h1 class="mb-4 font-serif text-5xl font-bold">Get Your Event Passes</h1>
            <p class="w-3/5 mx-auto font-sans text-2xl">Create New Memories This Winter</p>
        </div>
        <!-- End: page heading -->
        
        <!-- Cards Container -->
        <div class="relative flex flex-wrap items-center justify-center gap-12">

            <!-- bg -->
            <div class="bg-banner -z-10 border-navy top-12 bottom-16 box-border absolute w-screen bg-center bg-no-repeat bg-cover border-t-8 border-b-8"></div>
            <!-- end:bg -->

            <!-- Card 1 -->
            <div class=" max-w-md text-base text-white">
                <h2 class="
                before:content-star before:absolute before:bottom-[10%]  before:scale-50 before:h-auto before:right-3/4 
                after:content-star after:absolute after:top-[10%]  after:scale-50 after:h-auto after:left-[79%] 
                tracking-widest relative top-4 px-5 w-fit py-[0.625rem] border-gold bg-gold-light border-4 font-bold font-serif text-navy rounded-3xl text-3xl text-center shadow-blue ">Family Pass</h2>
                <div class="bg-navy rounded-3xl shadow-blue p-4 py-12 mx-2">
                    <p class="mb-10 italic">Perfect for parents and kids <br> $14.99 per pass</p>
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
            <div class=" max-w-md text-base text-white">
                <h2 class="tracking-widest relative top-4 px-5 w-fit py-[10px] border-gold bg-gold-light border-4 font-bold font-serif text-navy rounded-3xl text-3xl text-center shadow-blue ">Group Pass</h2>
                <div class="bg-navy rounded-3xl shadow-blue p-4 py-12 mx-2">
                    <p class="mb-10 italic">Good for a group outing <br> $16.99 per pass </p>
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
            <div class=" max-w-md text-base text-white">
                <h2 class="tracking-widest relative top-4 px-5 w-fit py-[10px] border-gold bg-gold-light border-4 font-bold font-serif text-navy rounded-3xl text-3xl text-center shadow-blue ">Person Pass</h2>
                <div class="bg-navy rounded-3xl shadow-blue p-4 py-12 mx-2">
                    <p class="mb-10 italic">Create new winter memories <br> $8.99 per pass</p>
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
       <div class="md:static md:mt-12 fixed bottom-0 flex justify-end w-full" >
            <div class="bg-gold-light border-navy rounded-bl-3xl rounded-tl-3xl shadow-blue sm:w-fit flex items-center justify-center w-screen py-4 pr-8 border-4">
                    <a class="btn mx-8" href="./checkout-winter-city-lights.php">Checkout Items</a>
                    <img class="w-28 h-auto mr-4" src="./img/svg/cart.svg" alt="Items in cart amount">
            </div>
        </div>
        <!-- End:Checkout button -->

    </main>
</body>
    <!-- Footer -->
    <?php include get_path("public/partials/global/footer.php"); ?>
    <!-- End:Footer -->
    <!-- Mobile nav controls -->
    <script src="./js/menu.js"></script>
</html>