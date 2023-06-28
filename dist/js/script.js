(function () {
  'use strict';

  // import menuHeader from "./modules/header.js";
  // import tabs from "./modules/tabs.js";
  // import lgGallery from "./modules/lightgallery.js";
  // import gallery from "./modules/gallery";
  // import artworks from "./modules/artworks";
  // import podcast from "./modules/podcast";
  // import map from "./modules/map.js";

  // const instance = axios.create({
  //   method: 'post',
  //   // url: 'https://accounts.spotify.com/api/token',
  //   headers: {
  //     'Content-Type': 'application/x-www-form-urlencoded'
  //   }, 
  //   params: {
  //     grant_type: 'client_credentials',
  //     client_id: 'ecaf665a18ec4a92979a7ae31f4ccbb6',
  //     client_secret: '9d744aa03a024388b02429b100e61bd5'
  //   }
  // });

  async function request() {
    const res = await axios.post('https://accounts.spotify.com/api/token');
    console.log(res);
  }
  request();

  // const beforeStart = () => {
  //   menuHeader();

  //   const galleryExist = document.getElementsByClassName("gallery");
  //   if (galleryExist.length > 0) {
  //     // lgGallery();
  //     gallery();

  //   }

  //   const tabsExist = document.getElementsByClassName("tab");
  //   if (tabsExist.length > 0) {
  //     tabs();
  //     artworks();
  //   }
  // };

  // const start = () => {};

  // // load
  // window.addEventListener("load", () => {
  //   beforeStart();

  //   setTimeout(() => {
  //     // const body = document.querySelector("body");
  //     // body.classList.add("loaded");
  //     start();

  //   }, 1000);
  // });

  // map();

})();
