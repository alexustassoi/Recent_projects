import Swiper from 'swiper';
// eslint-disable-next-line import/no-unresolved
import { Navigation } from 'swiper/modules';

function initSwipers() {
    // eslint-disable-next-line @typescript-eslint/no-unused-vars
    const swiper = new Swiper('.js-reviews-swiper', {
        modules: [Navigation],
        spaceBetween: 0,
        slidesPerView: 1,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        // breakpoints: {
        //     300: {
        //         slidesPerView: 1,
        //     },
        //     768: {
        //         slidesPerView: 1,
        //     },
        //     1024: {
        //         slidesPerView: 1,
        //         spaceBetween: 14,
        //     },
        // },
    });
}

function InitSwiperIndustry() {
    // eslint-disable-next-line @typescript-eslint/no-unused-vars
    const swiper = new Swiper('.js-swiper-industry', {
        modules: [Navigation],
        spaceBetween: 16,
        slidesPerView: 1,
        breakpoints: {
            768: {
                slidesPerView: 2,
            },
            991: {
                slidesPerView: 3,
            },
            1280: {
                slidesPerView: 4,
                spaceBetween: 32,
            },
        },
        navigation: {
            nextEl: '.slider-industries__next',
            prevEl: '.slider-industries__prev',
        },
    });
}

const Sliders = { initSwipers, InitSwiperIndustry };
export default Sliders;
