import menuHeader from "./modules/header.js";
// import gallery from "./modules/gallery";
// import tabs from "./modules/tabs.js";
// import map from "./modules/map.js";

const beforeStart = () => {
  menuHeader();
  // tabs();
  // gallery();
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
