// Animate Titles


function animatedTitles() {

    // console.log('animated titles')

    // get animated titles
    const quotes = document.querySelectorAll(".animated-title");

    function setupSplits() {

        // animation for each title
        quotes.forEach(quote => {

            // Reset if needed
            if(quote.anim) {
                quote.anim.progress(1).kill();
                quote.split.revert();
            }

            // separate in words and lines with SplitText gsap extension
            quote.split = new SplitText(quote, {
                type: "words",
                linesClass: "split-line"
            });

            gsap.set(quote.split.words, {position: "static"});

            // Animation
            quote.anim = gsap.from(quote.split.words, {
                scrollTrigger: {
                    trigger: quote,
                    toggleActions: "restart reverse restart reverse",
                    start: "top 80%",
                    // scrub: true
                },
                duration: 0.6,
                ease: "circ.out",
                y: 30,
                stagger: 0.1,
                opacity:0
            });

        });

    }

    ScrollTrigger.addEventListener("refresh", setupSplits);

    setupSplits();

}

export default animatedTitles;