/**
 * SASS
 */
import '../sass/frontend.scss';

/**
 * JavaScript
 */
import { Fancybox } from '@fancyapps/ui';
import { activateMobileMenu, footerMenuAction, menuFunctionality } from './components/menu-functionality';
import Popup from './parts/popup-window';
import Sliders from './components/swiper-init';
import displayFileNameForInput from './components/display-file-name-for-input';

// eslint-disable-next-line
declare let jQuery: any;

function ready() {
    jQuery('.employee-reviews__slide-text').mCustomScrollbar();
    const popupInstance = new Popup();
    popupInstance.init();

    Fancybox.bind('[data-fancybox="awards"]', {
        hideScrollbar: false,
    });

    Fancybox.bind('[data-fancybox="certificate"]', {
        hideScrollbar: false,
    });

    const siteHeader = document.querySelector('#site-header');
    Sliders.InitSwiperIndustry();
    Sliders.initSwipers();
    Sliders.InitSwiperCertificates();
    Sliders.employeeReviewsSlider();

    // Put here your imported functions and decorators from import section above
    menuFunctionality();
    footerMenuAction();

    displayFileNameForInput();

    document.body.addEventListener('click', (e): void => {
        const TARGET = e.target as HTMLElement;
        const ROLE = TARGET.dataset?.role;

        switch (ROLE) {
            case 'burger':
                activateMobileMenu();
                break;
            default:
                break;
        }
    });

    window.document.addEventListener('scroll', (): void => {
        const operationType = window.scrollY > 100 ? 'add' : 'remove';
        siteHeader && siteHeader.classList[operationType]('scrolled');
        document.body.classList[operationType]('padding-top');
    });

    {
        const operationType = window.scrollY > 100 ? 'add' : 'remove';
        siteHeader && siteHeader.classList[operationType]('scrolled');
        document.body.classList[operationType]('padding-top');
    }
}

window.document.addEventListener('DOMContentLoaded', ready);
