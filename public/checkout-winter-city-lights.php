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

    <main class=" relative ">

       <!-- Back button -->
       <div class="flex   md:static " >
            <a class="py-4 pl-10 pr-6 bg-gold-light border-4 border-navy rounded-br-3xl rounded-tr-3xl flex  justify-center items-center sm:w-fit w-full h-full" href="<?php echo get_public_url('/buyPass-winter-city-lights.php') ?>" title="Go back to event pass selection"> <img class="w-14 h-auto" src="<?php echo get_public_url('/img/arrow.svg') ?>" alt=""></a>
        </div>
        <!-- End:back button -->

        <!-- Page heading -->
        <div class="text-navy max-w-md mx-auto mb-12 text-center">
            <h1 class="font-serif font-bold text-5xl mb-4">Checkout</h1>
            <p class="font-sans text-2xl w-4/5 mx-auto">You're almost there. We just have to confirm some things</p>
        </div>
        <!-- End: page heading -->
        
        <!-- Cards Container -->
        <div class="flex  items-center relative  justify-center gap-12 flex-wrap">

            <!-- bg -->
            <div class="bg-banner absolute w-screen -z-10 box-border border-navy border-8 top-12 bottom-16 bg-center bg-no-repeat bg-cover"></div>
            <!-- end:bg -->

            <!-- Card 1 -->
            <div class="text-white text-2xl w-full max-w-md bg-navy mx-2 p-4 rounded-3xl py-12">
                <!-- Orders Container -->
                <ul class="flex flex-col gap-5 py-4">
                    <!-- Order 1 -->
                    <li class="">
                        <p><span class="text-gold">Group Pass: </span> $16.99 CAD</p>
                        <div class="flex gap-12 items-center justify-end h-16">
                            <p>QTY:</p>
                            <img src="<?php echo get_public_url('/img/minus.svg') ?>" class="text-8xl  text-md" alt="-"></img>
                            <div class="relative flex items-center justify-center">
                                <div class="w-12 h-12 rounded-full bg-gold block absolute"></div>
                                <p class="bottom-[0.4rem] text-navy flex justify-center items-center z-20 relative rounded-full font-normal  font-serif  text-4xl">1</p>
                            </div>
                            <img src="<?php echo get_public_url('/img/add.svg') ?>" class="text-8xl text-md" alt="+"></img>
                        </div>
                    </li>
                    <!-- End: order 1 -->
                    
                    <div class="full bg-navy-dark h-2"></div>

                    <!-- Order 2 -->
                    <li class="">
                        <p><span class="text-gold">Group Pass: </span> $16.99 CAD</p>
                        <div class="flex gap-12 items-center justify-end h-16">
                            <p>QTY:</p>
                            <img src="<?php echo get_public_url('/img/minus.svg') ?>" class="text-8xl  text-md" alt="-"></img>
                            <div class="relative flex items-center justify-center">
                                <div class="w-12 h-12 rounded-full bg-gold block absolute"></div>
                                <p class="bottom-[0.4rem] text-navy flex justify-center items-center z-20 relative rounded-full font-normal  font-serif  text-4xl">1</p>
                            </div>
                            <img src="<?php echo get_public_url('/img/add.svg') ?>" class="text-8xl text-md" alt="+"></img>
                        </div>
                    </li>
                    <!-- End: order 2 -->
                </ul>
                <!-- End: Orders container -->
                <div class="flex flex-col gap-4">
                    <div class="w-full h-1 bg-white"></div>
                    <!-- Totals Container -->
                    <div class="w-full flex justify-between text-right">
                        <p class="text-gold font-sans ">Subtotal:</p>
                        <p class="font-sans">26.99 CAD</p>
                    </div>
                    <div class="w-full flex justify-between text-right">
                        <p class="text-gold font-sans ">Estimated Tax:</p>
                        <p class="font-sans">3.24 CAD</p>
                    </div>
                    <div class="w-full flex justify-between text-right">
                        <p class="text-gold font-sans ">Total:</p>
                        <p class="font-sans text-gold">$30.23 CAD</p>
                    </div>
                </div>
                <!-- End:Totals Container     -->
            </div>
            <!-- End: Card 1 -->

            <!-- Card 2 -->
            <div class="text-white w-full text-base max-w-md bg-navy mx-2 p-4 rounded-3xl py-12 font-sans">
                <div class=" mx-8 rounded-3xl bg-gold flex justify-center gap-4 mb-4">
                    <img class="w-24 h-auto py-2" src="./img/mastercard.svg" alt="We accept Mastercard">
                    <img class="w-24 h-auto py-2" src="./img/visa.svg" alt="We accept Visa">
                </div>
                <form id="card" action="#">
                    <label class="text-gold text-xl" for="name">Name on Card</label>
                    <input name="name" class="text-navy w-full rounded-3xl shadow-simple pl-4 py-8 mt-1 mb-4 text-2xl" type="text" placeholder="Name on Card">
                    <label class="text-gold text-xl" for="name">Card Number</label>
                    <input name="name" class="text-navy w-full rounded-3xl shadow-simple pl-4 py-8 mt-1 mb-4 text-2xl" type="text" placeholder="0000 0000 0000">
                    <div class=" flex ">
                        <div class="mr-20">
                            <label class="text-gold block text-xl" for="name">Card Expiration</label>
                            <input name="name" class="text-navy w-20 rounded-3xl shadow-simple pl-4 py-4 mt-1 text-2xl" type="text" placeholder="0/00">
                        </div>
                        <div>
                            <label class="text-gold block text-xl" for="name">CVC</label>
                            <input name="name" class="box-shadow-simple text-navy w-20 rounded-3xl shadow-simple pl-4 py-4 mt-1 text-2xl" type="text" placeholder="000">
                        </div>
                    </div>
                </form>
            </div>
            <!-- End: Card 2 -->
        </div>
       <!-- End: Cards Container -->

       <!-- Checkout button -->
       <div class="flex justify-end w-full md:static mt-12" >
            <div class="w-screen py-4 bg-gold-light border-4 border-navy rounded-bl-3xl rounded-tl-3xl flex  justify-center items-center sm:w-fit">
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
</html>