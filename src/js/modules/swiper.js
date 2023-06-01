// swiper
import Swiper from 'swiper/bundle';

// function banner
function swiperValues(){

    console.log('swiper gallery');

    const swiper = new Swiper('.swiper-values', {
        slidesPerView: "auto",
        spaceBetween: 30,
        scrollbar: {
            el: '.swiper-scrollbar',
            draggable: true,
        },
    });

}

export default swiperValues;