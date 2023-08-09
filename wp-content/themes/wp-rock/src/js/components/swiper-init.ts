import Swiper, { Navigation, Pagination } from 'swiper';

function initSwipers() {
    // eslint-disable-next-line @typescript-eslint/no-unused-vars
    const swiper = new Swiper('.js-reviews-swiper', {
        modules: [Navigation, Pagination],
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
        breakpoints: {
            300: {
                slidesPerView: 1,
                spaceBetween: 8,
            },
            768: {
                slidesPerView: 1,
            },
            1024: {
                slidesPerView: 1,
                spaceBetween: 14,
            },
        },
    });
}

const Sliders = { initSwipers };
export default Sliders;
