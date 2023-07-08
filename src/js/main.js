import menuHeader from './modules/header.js';
import tabs from './modules/tabs.js';
import gallery from './modules/gallery';
import artworks from './modules/artworks';
import podcast from './modules/podcast';
import accordionMenu from './modules/accordionMenu';
import map from './modules/map.js';
import videoGallery from './modules/videoGallery.js';
import menu from './init/menu.js';

const beforeStart = () => {
	menuHeader();
	accordionMenu();
	menu();

	const mapExist = document.getElementsByClassName('project-map');
	if (mapExist.length > 0) {
		map();
	}

	const galleryExist = document.getElementsByClassName('gallery');
	if (galleryExist.length > 0) {
		gallery();
	}

	const tabsExist = document.getElementsByClassName('tab');
	if (tabsExist.length > 0) {
		tabs();
	}

	const artworksExist = document.querySelector('.artworks > .gallery');
	if (artworksExist != null) {
		artworks();
	}

	const videoGalleryExist = document.querySelector('.videos');
	if (videoGalleryExist != null) {
		videoGallery();
	}
};

const start = () => {
	const podcastExist = document.querySelector('.podcast');
	if (podcastExist != null) {
		podcast();
	}
};

// load
window.addEventListener('load', () => {
	beforeStart();

	setTimeout(() => {
		// const body = document.querySelector("body");
		// body.classList.add("loaded");
		start();
	}, 1000);
});
