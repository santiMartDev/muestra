import Splide from "@splidejs/splide";

const gallery = () => {
  var main = new Splide(".gallery", {
    type: 'loop',
    heightRatio: 0.5,
    pagination: false,
    arrows: true,
    padding: 200,
    autoWidth: true,
    gap: 30
  });

  var thumbnails = new Splide(".thumbs", {
    rewind: true,
    fixedWidth: 120,
    fixedHeight: 72,
    isNavigation: true,
    gap: 30,
    focus: "center",
    pagination: false,
    arrows: false,
    dragMinThreshold: {
      mouse: 4,
      touch: 10,
    },
    breakpoints: {
      640: {
        fixedWidth: 66,
        fixedHeight: 38,
      },
    },
  });

  main.sync(thumbnails);
  main.mount();
  thumbnails.mount();
};

export default gallery;