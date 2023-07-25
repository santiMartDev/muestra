// Import LIGHTGALLERY
import lightGallery from 'lightgallery';
// lg Gallery
function lgAbout() {
	let media = document.querySelector('.about__image');

	lightGallery(media, {
		licenseKey: 'RWGFX-KWFPH-57MZ4-GKE8B',
		download: false,
	});
}

export default lgAbout;
