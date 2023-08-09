import Swiper from 'swiper';
// eslint-disable-next-line import/no-unresolved
// import { Navigation } from 'swiper/modules';

function initSwipers() {
    // eslint-disable-next-line @typescript-eslint/no-unused-vars
    const swiper = new Swiper('.swiper-wrapper', {
        spaceBetween: 8,
        slidesPerView: 3,
        breakpoints: {
            300: {
                slidesPerView: 1.26,
                spaceBetween: 8,
            },
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 14,
            },
        },
    });
}

function InitSwiperIndustry() {
    // eslint-disable-next-line @typescript-eslint/no-unused-vars
    const swiper = new Swiper('.js-swiper-industry', {
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
