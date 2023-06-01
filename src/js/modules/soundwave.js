// soundwave

function soundWave() {

    // console.log('soundwave 1.0');

    jQuery('.sound-wave-items:not(:first-child)').remove();

    if ( window.innerWidth < 768 ) {
        console.log('menos de 768');
        var n = 2;
    } else if((window.innerWidth >= 768) && (window.innerWidth < 1600) ) {
        console.log('entre 768 y 1600');
        var n = 4;
    }
    else {
        console.log('mas de 992');
        var n = 6;
    }

    while (n > 0) {

        jQuery(".sound-wave").append(
            jQuery(".sound-wave").children().first().clone()
        );

        n -= 1;

    }

}

export default soundWave;