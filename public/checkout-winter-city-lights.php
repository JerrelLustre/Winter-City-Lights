<!DOCTYPE html>
<html lang="en" style="font-size:12px;" class="overflow-x-clip w-screen h-full">

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

    <main class=" relative flex-1">

       <!-- Back button -->
       <div class="md:static flex" >
            <a class="bg-gold-light border-navy rounded-br-3xl rounded-tr-3xl sm:w-fit flex items-center justify-center w-full h-full py-4 pl-10 pr-6 border-4 border-l-0" href="<?php echo get_public_url('/buyPass-winter-city-lights.php') ?>" title="Go back to event pass selection"> <img class="w-14 h-auto" src="<?php echo get_public_url('/img/svg/arrow.svg') ?>" alt=""></a>
        </div>
        <!-- End:back button -->

        <!-- Page heading -->
        <div class="text-navy max-w-md mx-auto my-4 mb-12 text-center">
            <h1 class="mb-4 font-serif text-5xl font-bold">Checkout</h1>
            <p class="w-4/5 mx-auto font-sans text-2xl">You're almost there. We just have to confirm some things</p>
        </div>
        <!-- End: page heading -->
        
        <!-- Cards Container -->
        <div class="relative flex flex-wrap items-center justify-center gap-12">

            <!-- bg -->
            <div class="bg-banner -z-10 border-navy top-12 bottom-16 box-border absolute w-screen bg-center bg-no-repeat bg-cover border-t-8 border-b-8"></div>
            <!-- end:bg -->

            <!-- Card 1 -->
            <div class="bg-navy rounded-3xl shadow-blue w-full max-w-md p-4 py-12 mx-2 text-2xl text-white">
                <!-- Orders Container -->
                <ul class="flex flex-col gap-5 py-4">
                    <!-- Order 1 -->
                    <li class="">
                        <p><span class="text-gold">Group Pass: </span> $16.99 CAD</p>
                        <div class="flex items-center justify-end h-16 gap-12">
                            <p>QTY:</p>
                            <img src="<?php echo get_public_url('/img/svg/minus.svg') ?>" class="text-8xl text-md" alt="-"></img>
                            <div class="relative flex items-center justify-center">
                                <div class="bg-gold absolute block w-12 h-12 rounded-full"></div>
                                <p class="bottom-[0.4rem] text-navy flex justify-center items-center z-20 relative rounded-full font-normal  font-serif  text-4xl">1</p>
                            </div>
                            <img src="<?php echo get_public_url('/img/svg/add.svg') ?>" class="text-8xl text-md" alt="+"></img>
                        </div>
                    </li>
                    <!-- End: order 1 -->
                    
                    <div class="full bg-navy-dark h-2"></div>

                    <!-- Order 2 -->
                    <li class="">
                        <p><span class="text-gold">Group Pass: </span> $16.99 CAD</p>
                        <div class="flex items-center justify-end h-16 gap-12">
                            <p>QTY:</p>
                            <img src="<?php echo get_public_url('/img/svg/minus.svg') ?>" class="text-8xl text-md" alt="-"></img>
                            <div class="relative flex items-center justify-center">
                                <div class="bg-gold absolute block w-12 h-12 rounded-full"></div>
                                <p class="bottom-[0.4rem] text-navy flex justify-center items-center z-20 relative rounded-full font-normal  font-serif  text-4xl">1</p>
                            </div>
                            <img src="<?php echo get_public_url('/img/svg/add.svg') ?>" class="text-8xl text-md" alt="+"></img>
                        </div>
                    </li>
                    <!-- End: order 2 -->
                </ul>
                <!-- End: Orders container -->
                <div class="flex flex-col gap-4">
                    <div class="w-full h-1 bg-white"></div>
                    <!-- Totals Container -->
                    <div class="flex justify-between w-full text-right">
                        <p class="text-gold font-sans">Subtotal:</p>
                        <p class="font-sans">26.99 CAD</p>
                    </div>
                    <div class="flex justify-between w-full text-right">
                        <p class="text-gold font-sans">Estimated Tax:</p>
                        <p class="font-sans">3.24 CAD</p>
                    </div>
                    <div class="flex justify-between w-full text-right">
                        <p class="text-gold font-sans">Total:</p>
                        <p class="text-gold font-sans">$30.23 CAD</p>
                    </div>
                </div>
                <!-- End:Totals Container     -->
            </div>
            <!-- End: Card 1 -->

            <!-- Card 2 -->
            <div class="bg-navy rounded-3xl shadow-blue w-full max-w-md p-4 py-12 mx-2 font-sans text-base text-white">
                <div class=" rounded-3xl bg-gold flex justify-center gap-4 mx-8 mb-4">
                    <img class="w-24 h-auto py-2" src="./img/svg/mastercard.svg" alt="We accept Mastercard">
                    <img class="w-24 h-auto py-2" src="./img/svg/visa.svg" alt="We accept Visa">
                </div>
                <form id="card" action="#">
                    <label class="text-gold text-xl" for="name">Name on Card</label>
                    <input name="name" class="text-navy rounded-3xl shadow-blue w-full py-8 pl-4 mt-1 mb-12 text-2xl" type="text" placeholder="Name on Card">
                    <label class="text-gold text-xl" for="name">Card Number</label>
                    <input name="name" class="text-navy rounded-3xl shadow-blue w-full py-8 pl-4 mt-1 mb-12 text-2xl" type="text" placeholder="0000 0000 0000">
                    <div class=" flex">
                        <div class="mr-20">
                            <label class="text-gold block text-xl" for="name">Card Expiration</label>
                            <input name="name" class="text-navy rounded-3xl shadow-simple w-20 py-4 pl-4 mt-1 text-2xl" type="text" placeholder="0/00">
                        </div>
                        <div>
                            <label class="text-gold block text-xl" for="name">CVC</label>
                            <input name="name" class="box-shadow-simple text-navy rounded-3xl shadow-simple w-20 py-4 pl-4 mt-1 text-2xl" type="text" placeholder="000">
                        </div>
                    </div>
                </form>
            </div>
            <!-- End: Card 2 -->
        </div>
       <!-- End: Cards Container -->

       <!-- Checkout button -->
       <div class="md:static flex justify-end w-full mt-12" >
            <div class="bg-gold-light border-navy rounded-bl-3xl rounded-tl-3xl sm:w-fit flex items-center justify-center w-screen py-4 pr-4 border-4 border-r-0">
                    <!-- If this form was actually functional, this button would redirect to the next page after validation. Because this is just a proof of concept, we just use a link here instead -->
                    <!-- <button type="submit" form="card-details" class="btn mx-8" href="#">Confirm Purchase</button> -->
                    <a class="btn mx-8" href="<?php echo get_public_url('thankyou-winter-city-lights.php') ?>">Confirm Purchase</a>
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