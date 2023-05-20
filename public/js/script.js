 
/* -------------------------------------------------------------------------- */
/*                           Move flickity Containers                         */
/* -------------------------------------------------------------------------- */
 document.addEventListener('DOMContentLoaded', () => {

  // Create the div element with class name 'flickity-nav-container'
  const navContainer = document.createElement('div');
  navContainer.classList.add('flickity-nav-container');

// Select the elements to move
const [previous, next, nav] = document.querySelectorAll('.flickity-button.flickity-prev-next-button.previous, .flickity-button.flickity-prev-next-button.next, .flickity-page-dots');

// Append the nav container to the .flickity-viewport element

document.querySelector('.flickity-viewport').appendChild(navContainer);
// & Append the selected elements to the nav container
navContainer.append(previous, nav, next);
 });

 /* -------------------------------------------------------------------------- */
 /*                            Initialize Lazy load                            */
 /* -------------------------------------------------------------------------- */

 const lazyLoad = new LazyLoad({
    elements_selector: ".JSlazyload"
 });


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