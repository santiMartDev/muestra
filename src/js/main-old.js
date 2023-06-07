// Main scripts

import animatedTitles from './modules/animations/animated-titles.js';
import animatedContent from './modules/animations/animated-content.js';
import animatedBanner from './modules/animations/animated-banner.js';
import animatedImageText from './modules/animations/animated-images-stack.js';
import animatedItems from './modules/animations/animated-items.js';

// modules
// import swiperValues from './modules/swiper.js';
// import soundWave from './modules/soundwave.js';

// init
import menu from './init/menu.js';
import formularios from './modules/forms/formularios';

menu();
formularios();

// console.log('script');

// Resize
const onResize = () => {

    // animated banner
    const soundWaveExist = document.getElementsByClassName('sound-wave');
    if (soundWaveExist.length > 0) { soundWave(); }

}

// Window On Resize
window.addEventListener('resize', onResize);

const beforeStart = () => {

    // animated banner
    const swiperValuesExist = document.getElementsByClassName('swiper-values');
    if (swiperValuesExist.length > 0) { swiperValues(); }

    // animated banner
    const soundWaveExist = document.getElementsByClassName('sound-wave');
    if (soundWaveExist.length > 0) { soundWave(); }

}

const start = () => {

    // animated titles
    // const animatedTitle = document.getElementsByClassName('animated-title');
    // if (animatedTitle.length > 0) { animatedTitles(); }

    // // animated content
    // const animatedContents = document.getElementsByClassName('animated-content');
    // if (animatedContents.length > 0) { animatedContent(); }

    // // animated banner
    // const animatedBannerItem = document.getElementsByClassName('module-banner');
    // if (animatedBannerItem.length > 0) { animatedBanner(); }

    // // animated image and text
    // const animatedImgText = document.getElementsByClassName('images-stack');
    // if (animatedImgText.length > 0) { animatedImageText(); }

    // // animated items
    // const animatedItemsExist = document.getElementsByClassName('animated-item');
    // if (animatedItemsExist.length > 0) { animatedItems(); }

}

// load
window.addEventListener('load', () => {

    beforeStart();
    // radios();

    setTimeout(() => {
        const body = document.querySelector("body");
        body.classList.add("loaded");
        start();
    }, 1000);


})