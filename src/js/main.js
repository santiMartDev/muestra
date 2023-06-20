import menuHeader from "./modules/header.js";
import tabs from "./modules/tabs.js";
import lgGallery from "./modules/lightgallery.js";
import gallery from "./modules/gallery";
import map from "./modules/map.js";

const beforeStart = () => {
  menuHeader();

  // animated banner
  const galleryExist = document.getElementsByClassName("gallery");
  if (galleryExist.length > 0) {
    lgGallery();
  }

  // animated banner
  const tabsExist = document.getElementsByClassName("tab");
  if (tabsExist.length > 0) {
    tabs();
    gallery();
    map();
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

// map();
