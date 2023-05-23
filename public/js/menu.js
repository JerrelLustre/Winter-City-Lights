/* -------------------------------------------------------------------------- */
/*                            Mobile Menu Controls                            */
/* -------------------------------------------------------------------------- */

let open = document.querySelector("#open")
let close = document.querySelector("#close")
let menu = document.querySelector("#menu")

open.addEventListener('click', () => {
    menu.classList.remove("-translate-y-[200%]");
    close.classList.remove("hidden");
    open.classList.add("hidden");
});
close.addEventListener('click', () => {
menu.classList.add("-translate-y-[200%]");
close.classList.add("hidden");
open.classList.remove("hidden");
});