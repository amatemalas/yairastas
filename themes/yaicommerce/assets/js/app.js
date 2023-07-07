window.$ = window.jQuery = require('jquery');
window.Popper = require('popper.js');
require('bootstrap');

import '@fortawesome/fontawesome-free/js/all.js';

$(document).ready(function () {
    const navbar = $('.c-header');
    const pre = $('.c-prenav');

    $(window).scroll(function () {
        if (navbar.offset().top > 100) {
            pre.slideUp(300, 'ease');
        } else {
            pre.slideDown(300, 'ease');
        }
    });
});