import Swiper from 'swiper/bundle';
import 'swiper/css';

$(document).ready(function () {
    const swiper = new Swiper('.js-slider', {
        loop: true,
        autoplay: {
            delay: 5000,
        },
        speed: 1000,
        slidesPerView: 1,
    });
});