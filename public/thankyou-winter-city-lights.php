<!DOCTYPE html>
<html lang="en" style="font-size:12px;" class="overflow-x-clip w-screen h-full">

<?php
require_once "../app/init.php";
require_once(get_path("app/data/carousel-cell-data.php"));
$title = "Winter City Lights - Vancouver Winter Festival - Thank you";
include get_path("public/partials/global/head.php");
?>

<body class="bg-gold-light flex flex-col h-full">
    <!-- Header -->
    <?php include get_path("public/partials/global/header.php"); ?>
    <!-- End:Header -->
    <main class="flex-1 overflow-x-hidden">

    <!-- Banner -->
    <div class="bg-[url('../img/thankyou-banner-winter-city-lights.jpg')]  text-gold bg-url py-6 border-4 border-navy mb-12 text-center">
        <h1 class="w-4/5 mx-auto font-serif text-4xl font-bold capitalize">Thank you for your purchase</h1>
        <p class="w-4/5 mx-auto font-sans text-4xl">We hope to see you soon</p>
    </div>
    <!-- End: Banner -->

    <!-- Content -->
    <div class="flex flex-col justify-center mb-12">
        <img class="w-72 -z-10 top-8 relative h-auto mx-auto" src="<?php echo get_public_url('/img/checkmark.svg') ?>"  alt="checkmark">
        <p class="rounded-3xl bg-navy shadow-simple w-4/5 max-w-md px-4 py-2 mx-auto mb-8 font-sans text-xl text-center text-white">
            We’ve emailed you your passes, present them upon entering the festival in order to gain access to the event.
        </p>
        <a href="<?php echo get_public_url('index.php') ?>" class="btn w-fit mx-auto mb-8">Return Home</a>
    </div>
    <!-- End: Content -->
    </main>
    <!-- Footer -->
    <?php include get_path("public/partials/global/footer.php"); ?>
    <!-- End:Footer -->
    <!-- Mobile nav controls -->
    <script src="./js/menu.js"></script>
</body>
</html>