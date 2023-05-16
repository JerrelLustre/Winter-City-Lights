<header class="bg-navy">
    <div class="max-w-[68rem] mx-auto z-50 sticky top-0 flex justify-between items-center py-2">
        <div class="w-full lg:w-fit flex justify-between items-center mx-8">
            <a class="w-[11.5625rem] block font-serif text-2xl font-bold uppercase text-gold-light " href="#"><img class="w-full h-auto" src="/public/img/logo-wintercitylights.svg" alt="Winter City Lights Logo"></a>
            <div class=" h-full  flex items-center justify-center  lg:hidden z-50">
                <button id="open"  type="button" class="relative " aria-controls="menu" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <img class="cursor-pointer"  src="img/menu-icon.svg" alt="Hamburger menu icon">
                </button>
                <button id="close"  type="button" class="relative hidden" aria-controls="menu" aria-expanded="true">
                    <span class="sr-only">Close main menu</span>
                    <img class=" cursor-pointer"  src="img/menu-icon-close.svg" alt="Close icon">
                </button>
            </div>
        </div>
        <nav id="menu" class="-translate-y-full lg:mx-8 lg:-translate-y-0 transition-transform bottom-0 top-0 right-0 left-0 fixed bg-navy lg:h-auto lg:static box-sizing ">
            <ul class="flex h-full flex-col lg:flex-row items-center justify-between lg:gap-4  lg:py-4  pt-28 lg:mt-0" >
                <li class="w-3/5 mx-auto"><a class="<?php if($title = "Winter City Lights - Vancouver Winter Festival Homepage"){echo("pointer-events-none text-gold");} else {echo("text-navy-light hover:bg-gold hover:text-navy");} ?> font-serif py-8 border-gold pl-4 border-4 lg:border-0  text-6xl w-full block lg:inline lg:text-2xl font-bold uppercase lg:py-2 lg:px-8 rounded transition-all" href="#">Home</a></li>
                <li class="w-3/5 mx-auto"><a class="font-serif py-8 border-gold pl-4 border-4 lg:border-0  text-6xl w-full block lg:inline  lg:text-2xl font-bold uppercase text-gold-fade hover:underline hover:text-gold-light lg:py-2 lg:px-8 rounded transition-all" href="#">Tickets</a></li>
                <li class="w-3/5 mx-auto"><a class="font-serif py-8 border-gold pl-4 border-4 lg:border-0  text-6xl w-full block lg:inline  lg:text-2xl font-bold uppercase text-gold-fade hover:underline hover:text-gold-light lg:py-2 lg:px-8 rounded transition-all" href="#">Events</a></li>
                <li class="w-3/5 mx-auto"><a class="font-serif py-8 border-gold pl-4 border-4 lg:border-0  text-6xl w-full block lg:inline  lg:text-2xl font-bold uppercase text-gold-fade hover:underline hover:text-gold-light lg:py-2 lg:px-8 rounded transition-all" href="#">About</a></li>
                <li class="w-3/5 mx-auto"><a class="font-serif py-8 border-gold pl-4 border-4 lg:border-0  text-6xl w-full block lg:inline  lg:text-2xl font-bold uppercase text-gold-fade hover:underline hover:text-gold-light lg:py-2 lg:px-8 rounded transition-all" href="#">FAQ</a></li>
            </ul>
        </nav>
    </div>
</header>
<script>
    let open = document.querySelector("#open")
    let close = document.querySelector("#close")
    let menu = document.querySelector("#menu")
    open.addEventListener('click', () => {
        menu.classList.remove("-translate-y-full");
        close.classList.remove("hidden");
        open.classList.add("hidden");
});
close.addEventListener('click', () => {
    menu.classList.add("-translate-y-full");
    close.classList.add("hidden");
    open.classList.remove("hidden");
});
</script>

