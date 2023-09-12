import { gsap } from 'gsap';

const menuHeader = () => {
	const btns = document.querySelectorAll('.btnSubmenu');

	btns.forEach((btn) => {
		btn.addEventListener('click', (e) => {
			//Btn clicked
			const target = e.currentTarget;
			console.log(target.lastChild);

			//Data from Btn
			const targetData = e.currentTarget.dataset.submenu;

			//Menu selected from Btn
			const selected = document.querySelector(targetData);

			//Cross anime from Btn
			const targetCross = target.querySelector('.cross');

			const disabled = document.querySelectorAll(
				`.btnSubmenu:not([data-submenu="${e.currentTarget.dataset.submenu}"])`
			);

			//Reset All Menus

			if (!target.classList.contains('active')) {
				//Add active class to Btn
				target.classList.add('active');

				disabled.forEach((el) => {
					el.classList.add('disabled');
				});

				//Menu Anime
				gsap.timeline()
					.to(targetCross, { rotate: -45, duration: 0.6 })
					.to(disabled, { opacity: 0.2, duration: 0.6 }, '<')
					.to(selected, { zIndex: 1, duration: 0 }, '<')
					.to(selected, { opacity: 1, duration: 0.6 }, '<');
			} else if (target.classList.contains('active')) {
				gsap
					.timeline()
					.to(targetCross, { rotate: 0, duration: 0.6 })
					.to(disabled, { opacity: 1, duration: 0.6 }, '<')
					.to(selected, { opacity: 0, duration: 0.6 }, '<')
					.to(selected, { zIndex: 0, duration: 0 }),
					'<';

				target.classList.remove('active');

				disabled.forEach((el) => {
					el.classList.remove('disabled');
				});
			}
		});
	});
};

export default menuHeader;
