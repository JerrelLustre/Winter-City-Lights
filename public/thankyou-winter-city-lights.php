<!DOCTYPE html>
<html lang="en" style="font-size:12px;">

<?php
require_once "../app/init.php";
require_once(get_path("app/data/carousel-cell-data.php"));
$title = "Winter City Lights - Vancouver Winter Festival - Thank you";
include get_path("public/partials/global/head.php");
?>

<body>
    <!-- Header -->
    <?php include get_path("public/partials/global/header.php"); ?>
    <!-- End:Header -->
    <main class="overflow-x-hidden">

    <!-- Banner -->
    <div class="bg-[url('../img/thankyou-banner-winter-city-lights.jpg')]  text-gold bg-url py-6 border-4 border-navy mb-12 text-center">
        <h1 class="capitalize w-4/5 mx-auto text-4xl font-bold font-serif">Thank you for your purchase</h1>
        <p class="text-4xl font-sans mx-auto  w-4/5">We hope to see you soon</p>
    </div>
    <!-- End: Banner -->

    <!-- Content -->
    <div class="flex justify-center flex-col">
        <img class="w-72 h-auto relative -z-10 top-8 mx-auto" src="<?php echo get_public_url('/img/checkmark.svg') ?>"  alt="checkmark">
        <p class="rounded-3xl text-center px-4 py-2 text-xl bg-navy font-sans text-white  w-4/5 mx-auto mb-8 shadow-simple max-w-md">
            We’ve emailed you your passes, present them upon entering the festival in order to gain access to the event.
        </p>
        <a href="<?php echo get_public_url('index.php') ?>" class="btn w-fit mx-auto mb-8">Return Home</a>
    </div>
    <!-- End: Content -->
    </main>
</body>
    <!-- Footer -->
    <?php include get_path("public/partials/global/footer.php"); ?>
    <!-- End:Footer -->
</html>