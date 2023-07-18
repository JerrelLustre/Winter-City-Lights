/* -------------------------------------------------------------------------- */
/*                            Mobile Menu Controls                            */
/* -------------------------------------------------------------------------- */

let openMenu = document.querySelector("#open")
let closeMenu = document.querySelector("#close")
let menuNav = document.querySelector("#menu")

openMenu.addEventListener('click', () => {
    menuNav.classList.remove("-translate-y-[200%]");
    closeMenu.classList.remove("hidden");
    openMenu.classList.add("hidden");
});
closeMenu.addEventListener('click', () => {
menuNav.classList.add("-translate-y-[200%]");
closeMenu.classList.add("hidden");
openMenu.classList.remove("hidden");
});