import { gsap } from "gsap";

const tabs = () => {
    const anime = () => {
        const display = document.querySelector(".section.active")
        const hide = document.querySelectorAll(".section:not(.active)")
      
        gsap
          .timeline()
          .to(hide, {opacity: 0, duration: 2})
          .to(hide, {display: "none", duration: 0}, "<")
          .to(display, {display: "block", duration: 0}, "<")
          .to(display, {opacity: 1, duration: 2}, "<")
      }
      
      // init
      const tabs = document.querySelectorAll(".tabs button");
      const sections = document.querySelectorAll(".section");
      
      anime();
      
      tabs.forEach((tab) => {
        tab.addEventListener("click", (e) => {
          //Btn clicked
          const targetTab = e.currentTarget;
      
          //Data from Btn
          const targetTabData = e.currentTarget.dataset.tab;
      
          //Tab selected from Btn
          const selectedSection = document.querySelector(targetTabData);
      
          //Tab Anime
          tabs.forEach( (tab) => {
            tab.classList.remove("active");
          })
          targetTab.classList.add("active");
      
          //Sections Anime
          sections.forEach( (section) => {
            section.classList.remove("active");
          })
          selectedSection.classList.add("active");
      
          anime();
      
        });
      });
}

export default tabs;