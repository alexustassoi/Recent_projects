/**
 * SASS
 */
import '../sass/frontend.scss';
import { Fancybox } from '@fancyapps/ui';
import { activateMobileMenu, footerMenuAction, menuFunctionality } from './components/menu-functionality';
/**
 * JavaScript
 */
import Popup from './parts/popup-window';
import Sliders from './components/swiper-init';
import displayFileNameForInput from './components/display-file-name-for-input';

function ready() {
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
                '';
        }
    });

    window.document.addEventListener('scroll', (): void => {
        if (window.scrollY > 100) {
            siteHeader && siteHeader.classList.add('scrolled');
            document.body.classList.add('padding-top');
        } else {
            siteHeader && siteHeader.classList.remove('scrolled');
            document.body.classList.remove('padding-top');
        }
    });

    if (window.scrollY > 100) {
        siteHeader && siteHeader.classList.add('scrolled');
        document.body.classList.add('padding-top');
    } else {
        siteHeader && siteHeader.classList.remove('scrolled');
        document.body.classList.remove('padding-top');
    }
}

window.document.addEventListener('DOMContentLoaded', ready);
