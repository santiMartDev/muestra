import menuHeader from "./modules/header.js";
import tabs from "./modules/tabs.js";
import lgGallery from "./modules/lightgallery.js";
import gallery from "./modules/gallery";
import artworks from "./modules/artworks";
import podcast from "./modules/podcast";
import map from "./modules/map.js";

podcast();

const beforeStart = () => {
  menuHeader();

  const galleryExist = document.getElementsByClassName("gallery");
  if (galleryExist.length > 0) {
    // lgGallery();
    gallery();

  }

  const tabsExist = document.getElementsByClassName("tab");
  if (tabsExist.length > 0) {
    tabs();
    artworks();
  }
};

const start = () => {};

// load
window.addEventListener("load", () => {
  beforeStart();

  setTimeout(() => {
    // const body = document.querySelector("body");
    // body.classList.add("loaded");
    start();

  }, 1000);
});


const mapExist = document.getElementsByClassName("project-map");
if (mapExist.length > 0) {
  map();
}
