 
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