// Menu function

function menu() {
  let bodyEl = document.body,
    content = document.querySelector("#wrapper"),
    openbtn = document.getElementById("menu-open"),
    closebtn = document.getElementById("menu-close"),
    botones = document.querySelectorAll(".sidenav a"),
    isOpen = false;

  function init() {
    initEvents();
  }

  function initEvents() {
    openbtn.addEventListener("click", toggleMenu);
    if (closebtn) {
      closebtn.addEventListener("click", toggleMenu);
    }

    botones.forEach(function (element) {
      element.addEventListener("click", toggleMenu);
    });

    // close the menu element if the target it´s not the menu element or one of its descendants..
    content.addEventListener("click", function (ev) {
      var target = ev.target;
      if (isOpen && target !== openbtn) {
        toggleMenu();
      }
    });
  }

  // toggle menu
  function toggleMenu() {
    if (isOpen) {
      bodyEl.classList.remove("menu-open");
    } else {
      bodyEl.classList.add("menu-open");
    }
    isOpen = !isOpen;
  }

  // init
  init();
}

export default menu;
