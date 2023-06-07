// Main scripts

// console.log('script');

// animations
// import animatedTitles from './modules/animations/animated-titles.js';
// import animatedContent from './modules/animations/animated-content.js';
// import animatedBanner from './modules/animations/animated-banner.js';
// import animatedImageText from './modules/animations/animated-images-stack.js';
// import animatedItems from './modules/animations/animated-items.js';

// modules
import tabs from './modules/tab.js';

// init
// import menu from './init/menu.js';
// import formularios from './modules/forms/formularios';

// before start function
const beforeStart = () => {

    // tabs
    const  tabsExist = document.getElementsByClassName('tab');
    if ( tabsExist.length > 0) { tabs(); }

}

// after start function
const start = () => {}

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


// Resize
const onResize = () => {}

// Window On Resize
window.addEventListener('resize', onResize);