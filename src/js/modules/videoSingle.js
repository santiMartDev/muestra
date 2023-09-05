// lg Gallery
function lgVideoSingle() {
	var media = document.getElementsByClassName('video');

	for (let item of media) {
		lightGallery(item, {
			plugins: [lgVideo],
			share: false,
			selector: 'a',
			speed: 500,
			licenseKey: 'RWGFX-KWFPH-57MZ4-GKE8B',
			counter: false,
			mousewheel: true,
			download: false,
			mobileSettings: {
				showCloseIcon: true,
			},
		});
	}
}

export default lgVideoSingle;
