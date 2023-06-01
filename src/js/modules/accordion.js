// Accordion

function accordion() {

    var acc = document.getElementsByClassName("accordion");
    let get = document.querySelectorAll('.accordion, .panel');

    var i;

    var isActive = false;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {

            get.forEach(element => {
                if((element != this) && (element != this.nextElementSibling)) {
                    element.classList.remove("active");
                }
            });

            var panel = this.nextElementSibling;
            this.classList.toggle("active");
            panel.classList.toggle("active");

            // if(isActive == false) {

            //     console.log('no hay abierto');

            //     // no hay abierto
            //     isActive = true

            //     this.classList.toggle("active");
            //     var panel = this.nextElementSibling;
            //     panel.classList.toggle("active");

            // } else {

            //     isActive = false

            //     // si hay abierto
            //     console.log('si hay abierto');

            //     get.forEach(element => {
            //         element.classList.remove("active");
            //     });

            //     var panel = this.nextElementSibling;
            //     this.classList.toggle("active");
            //     panel.classList.toggle("active");

            // }


            // get.forEach(element => {
            //     element.classList.remove("active");
            // });

            // this.classList.toggle("active");
            // var panel = this.nextElementSibling;
            // panel.classList.toggle("active");

            // if (panel.style.maxHeight) {
            //     panel.style.maxHeight = null;
            // } else {
            //     panel.style.maxHeight = panel.scrollHeight + "px";
            // }

        });
    }

}

export default accordion;