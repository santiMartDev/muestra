// You need to transpile this code
import Splide from '@splidejs/splide';
import { Video } from '@splidejs/splide-extension-video';

const videoGallery = () => {
	const modules = document.querySelectorAll(
		'.module-video-gallery .module-wrapper'
	);

	modules.forEach((module) => {
		const galleryVideos = module.querySelector('.videos.splide');
		const galleryCovers = module.querySelector('.covers.splide');

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
	});
};

export default videoGallery;
