// Animate Image and Text


function animatedImageText() {

    console.log('Image and Text');

    // get container and elements
    const containers = document.querySelectorAll('.images-stack');

    containers.forEach((container) => {

        const elementsItems = container.querySelectorAll('img');

        // animation for each element
        elementsItems.forEach((element, index) => {

            // get image inside each element
            // element.image = element.querySelector("img");

            element.classList.add('animated');

            // scrolltrigger animations [for items]
            gsap.from(element, {
                ease: "ease-in-out",
                opacity: 0,
                y: '100%',
                scrollTrigger: {
                    trigger: container,
                    scrub: index * 0.5,
                    start: "top bottom",
                    end: "top top"
                }
            });

        })

    })

}

export default animatedImageText;