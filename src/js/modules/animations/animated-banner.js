// Animate Banner


function animatedBanner() {

    // console.log('Animate Banner');

    // get container and elements
    const container = document.querySelectorAll('.banner-bg');
    const elements = document.querySelectorAll('.banner-bg-item');

    // animation for each element
    elements.forEach((element, index) => {

        // get image inside each element
        element.image = element.querySelector("img");

        // init animation [only images]
        gsap.to( element.image , {
            opacity: 1,
            y: 0,
            duration: .5,
            delay: index * 0.2,
        });

        // scrolltrigger animations [for items]
        gsap.to(element, {
            ease: "ease-in-out",
            y: '100%',
            scrollTrigger: {
                trigger: container,
                scrub: index * 0.5,
                start: "top top",
                end: "+=3000",
                // end: () => `+=(5*${element.offsetHeight})`
            }
        });

    })

    // get rotate text
    var element = document.querySelector(".rotating-text");
    element.classList.add("isActive");

    // get words
    let words = element.querySelectorAll(".word");

    // 
    words.forEach((word) => {
        let letters = word.textContent.split("");
        word.textContent = "";
        letters.forEach((letter) => {
            let span = document.createElement("span");
            span.textContent = letter;
            span.className = "letter";
            word.append(span);
        });
    });

    let tl = gsap.timeline({ repeat: -1, defaults: { stagger: 0.05 } });

    words.forEach((word) => {
        tl.from(
            word.childNodes,
            {
                y: -100,
                ease: "expo.out"
            },
            "<0.3"
        );
        tl.to(word.childNodes, {
            delay: 2,
            y: 100,
            ease: "expo.in"
        });
    });

}

export default animatedBanner;