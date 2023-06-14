// Import LIGHTGALLERY
import lightGallery from 'lightgallery';
import lgVideo from 'lightgallery/plugins/video';

// lg Gallery
function lgGallery() {

    console.log('lg gallery');

    var media = document.getElementsByClassName('gallery');

    for (let item of media) {
        lightGallery(item, {
            plugins: [lgVideo],
            share: false,
            selector: 'a',
            speed: 500,
            licenseKey: 'RWGFX-KWFPH-57MZ4-GKE8B',
            counter: false,
            mousewheel: true,
            download: false,
            mobileSettings : {
                showCloseIcon: true
            }
        })
    }

}

export default lgGallery;