/**
 * SASS
 */
import '../sass/frontend.scss';
/**
 * JavaScript
 */
// import Sliders from './components/swiper-init';
import Popup from './parts/popup-window';
import Sliders from './components/swiper-init';

function ready() {
    // const popupInstance = new Popup();
    // popupInstance.init();

    Sliders.InitSwiperIndustry();

    // Put here your imported functions and decorators from import section above
}

window.document.addEventListener('DOMContentLoaded', ready);
