import Splide from '@splidejs/splide';

// const projectGallery = document.querySelector(".project-gallery .gallery");
// const projectThumbs = document.querySelector(".project-gallery .thumbs");

const gallery = () => {
	// get animated titles
	const galleries = document.querySelectorAll('.gallery-wrap');

	// animation for each title
	galleries.forEach((gallery) => {
		const galleryMain = gallery.querySelector('.gallery');
		const galleryThumbs = gallery.querySelector('.thumbs');

		var main = new Splide(galleryMain, {
			type: 'loop',
			pagination: false,
			arrows: true,
			padding: 200,
			autoWidth: true,
			gap: 30,
			breakpoints: {
				992: {
					arrows: false,
					padding: 0,
					autoWidth: false,
					perPage: 1,
				},
			},
		});

		var thumbnails = new Splide(galleryThumbs, {
			rewind: true,
			fixedWidth: 120,
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
					fixedWidth: 66,
					fixedHeight: 38,
				},
			},
		});

		main.sync(thumbnails);
		main.mount();
		thumbnails.mount();
	});
};

export default gallery;
