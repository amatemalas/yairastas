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
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    const carousel = new Swiper('.js-carousel', {
        loop: true,
        autoplay: {
            delay: 5000,
        },
        speed: 1000,
        slidesPerView: 1,
        breakpoints: {
            400: {
                slidesPerView: 1
            },
            760: {
                slidesPerView: 2
            },
            1280: {
                slidesPerView: 4
            },
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
});