<div class="carousel-cell w-screen ">
    <div class="xl:relative mx-auto max-w-[98.75rem] xl:max-h-full xl:h-[37.5rem] ">
        <h2
            class="px-5 xl:mx-10 py-[0.625rem] w-fit mx-auto border-gold bg-gold-light border-8 font-serif text-navy rounded-3xl text-3xl text-center shadow-blue ">
            <?php echo h($cellInfo->heading); ?></h2>
        <div class="xl:static relative flex justify-center my-6">
            <div
                class="absolute inset-y-[10%] xl:bottom-0 w-screen bg-banner bg-cover bg-center bg-no-repeat border-4 box-border border-navy -z-10 ">
            </div>
            <img class="carousel-cell-image relative xl:absolute xl:bottom-0 xl:right-10 shadow-simple mx-auto w-80 h-80 xl:h-full xl:w-auto rounded-full border-white border-[16px] -z-10"
            data-flickity-lazyload="img/<?php echo h($cellInfo->image); ?>" src="img/lazyload/<?php echo h($cellInfo->imagePlaceholder); ?>" alt="<?php echo h($cellInfo->imageAlt); ?>">
        </div>

        <div class="bg-navy w-fit text-gold-light rounded-3xl xl:mx-10 py-5 mx-auto">
            <h3
                class=" max-w-[21.875rem]  sm:max-w-[28rem] xl:w-[30rem] xl:max-w-none px-5 upppercase font-serif text-2xl mb-14 mx-auto">
                <?php echo h($cellInfo->subHeading); ?></h3>
            <p class="max-w-[23.75rem] px-5 font-sans sm:max-w-[28rem] xl:w-[30rem] xl:max-h-60 xl:max-w-none text-xl mx-auto overflow-y-auto">
                <?php echo h($cellInfo->copy); ?>
        </p>
        </div>
    </div>
</div>