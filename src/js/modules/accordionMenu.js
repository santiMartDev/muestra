const accordionMenu = () => {
  new Accordion(".navbar--mobile", {
    onOpen: () => {
      const acNotActive = document.querySelectorAll('.ac:not(.is-active)');
      console.log(acNotActive)
      acNotActive.forEach( el => {
        el.classList.add('is-disable')
      })

    },
    onClose: () => {
      const acNotActive = document.querySelectorAll('.ac:not(.is-active)');
      acNotActive.forEach( el => {
        el.classList.remove('is-disable')
      })
    }
  });
};

export default accordionMenu;
