import menuHeader from "./modules/header.js";
import tabs from "./modules/tabs.js";
import lgGallery from "./modules/lightgallery.js";
import gallery from "./modules/gallery";
import artworks from "./modules/artworks";
import accordionMenu from "./modules/accordionMenu";
import map from "./modules/map.js";
import menu from "./init/menu.js";

const beforeStart = () => {
  menuHeader();
  accordionMenu();
  menu()

  const galleryExist = document.getElementsByClassName("gallery");
  if (galleryExist.length > 0) {
    // lgGallery();
    // gallery();

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
