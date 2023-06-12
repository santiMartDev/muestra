import Splide from '@splidejs/splide';

const gallery = () => {
  var main = new Splide( '.gallery', {
    type       : 'fade',
    heightRatio: 0.5,
    pagination : false,
    arrows     : false,
    cover      : true,
  } );
  
  
  var thumbnails = new Splide( '.thumbs', {
    rewind          : true,
    fixedWidth      : 104,
    fixedHeight     : 58,
    isNavigation    : true,
    gap             : 10,
    focus           : 'center',
    pagination      : false,
    cover           : true,
    dragMinThreshold: {
      mouse: 4,
      touch: 10,
    },
    breakpoints : {
      640: {
        fixedWidth  : 66,
        fixedHeight : 38,
      },
    },
  } );
  
  main.sync( thumbnails );
  main.mount();
  thumbnails.mount();
}

export default gallery;