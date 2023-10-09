import simpleParallax from 'simple-parallax-js';

$(document).ready(function () {
    const images = document.querySelectorAll('.js-parallax');
    const parallax = new simpleParallax(images, {
        scale: 1.5,
    });
});
