/**
 * SASS
 */
import '../sass/frontend.scss';
import { activateMobileMenu, menuFunctionality } from './components/menu-functionality';
/**
 * JavaScript
 */

import Popup from './parts/popup-window';
import Sliders from './components/swiper-init';

function ready() {
    const popupInstance = new Popup();
    popupInstance.init();

    const siteHeader = document.querySelector('#site-header');
    Sliders.InitSwiperIndustry();
    Sliders.initSwipers();

    // Put here your imported functions and decorators from import section above
    menuFunctionality();

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
