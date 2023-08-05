// You need to transpile this code
import Splide from '@splidejs/splide';
import { Video } from '@splidejs/splide-extension-video';

const videoGallery = () => {
	const galleryVideos = document.querySelector('.videos.splide');
	const galleryCovers = document.querySelector('.covers.splide');
	const module = document.querySelector(
		'.module-video-gallery .module-wrapper'
	);

	const galleryHeight = module.offsetHeight;

	const videosSlider = new Splide(galleryVideos, {
		heightRatio: 0.5625,
		height: '60vh',
		cover: true,
		pagination: false,
		arrows: false,
		video: {
			loop: true,
		},
		breakpoints: {
			991: {
				height: '25vh',
			},
		},
	});

	const coversSlider = new Splide(galleryCovers, {
		direction: 'ttb',
		type: 'loop',
		autoWidth: false,
		autoHeight: true,
		height: '60vh',
		isNavigation: true,
		pagination: false,
		arrows: false,
		gap: 10,
		breakpoints: {
			991: {
				direction: 'ltr',
				autoWidth: true,
				autoHeight: false,
				height: '10vh',
			},
		},
	});

	videosSlider.sync(coversSlider);
	videosSlider.mount({ Video });
	coversSlider.mount();
};

export default videoGallery;
