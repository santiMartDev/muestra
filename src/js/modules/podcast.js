import { Player } from '../../../node_modules/shikwasa/dist/shikwasa.es';

const podcast = () => {
	const podcasts = document.querySelectorAll('.podcast');

	podcasts.forEach((item) => {
		const title = item.dataset.title;
		const intervenants = item.dataset.intervenants;
		const cover = item.dataset.cover;
		const file = item.dataset.file;

		const player = new Player({
			container: item,
			audio: {
				title: title,
				artist: intervenants,
				cover: cover,
				src: file,
			},
			fixed: {
				type: 'static',
			},
		});
	});
};

export default podcast;
