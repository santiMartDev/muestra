import Splide from "@splidejs/splide";

const artworksGallery = document.querySelector(".project-artwoks .gallery");
const artworksThumbs = document.querySelector(".project-artwoks .thumbs");


const artworks = () => {
  var main = new Splide(artworksGallery, {
    type: 'loop',
    pagination: false,
    arrows: true,
    padding: 200,
    autoWidth: true,
    gap: 30
  });

  var thumbnails = new Splide(artworksThumbs, {
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

export default artworks;