/**
 * SASS
 */
import '../sass/frontend.scss';
import { activateMobileMenu, menuFunctionality } from './components/menu-functionality';
/**
 * JavaScript
 */
// import Sliders from './components/swiper-init';
import Popup from './parts/popup-window';

function ready() {
    const popupInstance = new Popup();
    popupInstance.init();

    const siteHeader = document.querySelector('#site-header');

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
        } else {
            siteHeader && siteHeader.classList.remove('scrolled');
        }
    });

    if (window.scrollY > 100) {
        siteHeader && siteHeader.classList.add('scrolled');
    } else {
        siteHeader && siteHeader.classList.remove('scrolled');
    }
}

window.document.addEventListener('DOMContentLoaded', ready);
