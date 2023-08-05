import menuHeader from './modules/header.js';
import tabs from './modules/tabs.js';
import gallery from './modules/gallery';
import artworks from './modules/artworks';
import podcast from './modules/podcast';
import accordionMenu from './modules/accordionMenu';
import map from './modules/map.js';
import videoGallery from './modules/videoGallery.js';
import videoSingle from './modules/videoSingle.js';
import menu from './init/menu.js';

document.addEventListener('DOMContentLoaded', () => {
	menuHeader();
	accordionMenu();
	menu();

	const podcastExist = document.querySelector('.podcast');
	if (podcastExist != null) {
		podcast();
	}

	const accordionSpeakerExist = document.querySelector('.speakers');
	if (accordionSpeakerExist != null) {
		new Accordion('.speakers');
	}

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

	const artworksExist = document.querySelector('.gallery');
	if (artworksExist != null) {
		// artworks();
	}

	const videoGalleryExist = document.querySelector('.videos');
	if (videoGalleryExist != null) {
		videoGallery();
	}

	const videoSingleExist = document.querySelector('.video');
	if (videoSingleExist != null) {
		videoSingle();
	}
});

// load
window.addEventListener('load', () => {
	const loader = document.querySelector('.loader');
	setTimeout(() => {
		loader.classList.add('hidden');
		loader.addEventListener('transitionend', () => {
			loader.style.display = 'none';
		});
	}, 1000);
});
