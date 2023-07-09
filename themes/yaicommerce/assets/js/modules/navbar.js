$(document).ready(function () {
    const navbar = $('.c-header');
    const pre = $('.c-prenav');

    $(window).scroll(function () {
        if (navbar.offset().top > 0) {
            pre.slideUp(300);
        } else {
            pre.slideDown(300);
        }
    });
});