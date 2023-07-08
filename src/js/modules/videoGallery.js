// You need to transpile this code
import Splide from '@splidejs/splide';
import { Video } from '@splidejs/splide-extension-video';

const videoGallery = () => {
	const galleryVideos = document.querySelector('.videos.splide');
	const galleryCovers = document.querySelector('.covers.splide');

	const galleryHeight = galleryVideos.offsetHeight;

	const videosSlider = new Splide(galleryVideos, {
		heightRatio: 0.5625,
		cover: true,
		pagination: false,
		arrows: false,
		video: {
			loop: true,
		},
	});

	const coversSlider = new Splide(galleryCovers, {
		direction: 'ttb',
		type: 'loop',
		height: galleryHeight,
		rewind: true,
		autoHeight: true,
		isNavigation: true,
		pagination: false,
		arrows: false,
		gap: 10,
		// padding: { top: 0, bottom: -40 },
	});

	videosSlider.sync(coversSlider);
	videosSlider.mount({ Video });
	coversSlider.mount();
};

export default videoGallery;
