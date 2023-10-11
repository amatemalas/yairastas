$(document).ready(function () {
    const item = $('footer').parent();

    if ($(document).height() > $(window).height()) {
        item.addClass('fixed-bottom w-100');
    }
});
