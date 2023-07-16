// Import LIGHTGALLERY
import lightGallery from 'lightgallery';
// lg Gallery
function lgGallery() {
	let media = document.querySelectorAll('.gallery .splide__list');
	console.log(media);

	media.forEach((item) => {
		lightGallery(item, {
			licenseKey: 'RWGFX-KWFPH-57MZ4-GKE8B',
			download: false,
		});
	});
}

export default lgGallery;
