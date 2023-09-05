import Splide from '@splidejs/splide';

const contemporary = () => {
	// get animated titles
	const gallery = document.querySelector('.contemporary-wrap');

	// animation for each title
	const galleryMain = gallery.querySelector('.gallery');
	const galleryThumbs = gallery.querySelector('.thumbs');

	const main = new Splide(galleryMain, {
		type: 'loop',
		pagination: false,
		arrows: true,
		padding: 200,
		height: '50vh',
		autoWidth: true,
		gap: 30,
		breakpoints: {
			992: {
				arrows: false,
				padding: 0,
				autoWidth: false,
				perPage: 1,
				height: '25vh',
			},
		},
	});

	const thumbnails = new Splide(galleryThumbs, {
		rewind: true,
		autoWidth: true,
		fixedHeight: 72,
		isNavigation: true,
		gap: 30,
		focus: 'center',
		pagination: false,
		arrows: false,
		dragMinThreshold: {
			mouse: 4,
			touch: 10,
		},
		breakpoints: {
			640: {
				fixedHeight: 38,
			},
		},
	});

	main.sync(thumbnails);
	main.mount();
	thumbnails.mount();

	const media = gallery.querySelector('.gallery .splide__list');

	lightGallery(media, {
		counter: false,
		licenseKey: 'RWGFX-KWFPH-57MZ4-GKE8B',
		download: false,
	});
};

export default contemporary;
