import './bootstrap';

import Alpine from 'alpinejs';
import collapse from '@alpinejs/collapse';

import Swiper from 'swiper';

import {
    Navigation,
    Pagination,
    Thumbs,
    Autoplay,
    EffectFade
} from 'swiper/modules';

import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/thumbs';
import 'swiper/css/effect-fade';

window.Alpine = Alpine;

Alpine.plugin(collapse);


window.languageModal = function () {
    return {
        open: false,

       init() {
    setTimeout(() => {
        if (!localStorage.getItem('language-selected')) {
            this.open = true;
        }
    }, 100);
},

        close() {
            this.open = false;
        },

        choose(lang) {
            localStorage.setItem('language-selected', lang);
            this.open = false;

            setTimeout(() => {
                window.location.href = '/' + lang;
            }, 200);
        }
    }
}

Alpine.start();

document.addEventListener('DOMContentLoaded', () => {

    // HERO
    new Swiper('.heroSwiper', {
         modules: [ Autoplay],
         speed: 3400,
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false
        }
    });

new Swiper('.partnerSwiper', {

    modules: [Navigation, Autoplay],

    loop: true,

    spaceBetween: 40,

    autoplay: {
        delay: 2000,
        disableOnInteraction: false,
    },

    navigation: {
        nextEl: '.partner-next',
        prevEl: '.partner-prev',
    },

    breakpoints: {

        0: {
            slidesPerView: 1,
        },

        640: {
            slidesPerView: 2,
        },

        768: {
            slidesPerView: 3,
        },

        1024: {
            slidesPerView: 4,
        }

    }

});

  

// PROJECTS :
new Swiper('.projectSwiper', {

        modules: [Autoplay , Navigation],
    slidesPerView: 1,

    spaceBetween: 20,

    loop: true,

    grabCursor: true,

    autoplay: {
        delay: 2500,
        disableOnInteraction: false
    },

    navigation: {
        nextEl: '.project-next',
        prevEl: '.project-prev',
    },

    breakpoints: {

        640: {
            slidesPerView: 1
        },

        768: {
            slidesPerView: 2
        },

        1024: {
            slidesPerView: 3
        },

        1280: {
            slidesPerView: 3
        }

    }

});




    // RANDOM PROJECTS : 
    new Swiper('.randomSwiper', {

        modules: [Autoplay],
        slidesPerView: 1.5,

        spaceBetween: 3,

        loop: true,

           speed: 800,
    autoplay: {
        delay: 1000,
        disableOnInteraction: false, 
        pauseOnMouseEnter: true
    },

        grabCursor: true,

        centeredSlides: false,

        breakpoints: {

            640: {
                slidesPerView: 1.5
            },

            768: {
                slidesPerView: 3.5
            },

            1024: {
                slidesPerView: 4.5
            },

            1280: {
                slidesPerView: 5.5
            }

        }

    });


    new Swiper('.aboutSwiper', {
modules: [Autoplay],
        slidesPerView: 2,
        spaceBetween: 0,

        loop: false,

          speed: 800,
    autoplay: {
        delay: 1400,
        disableOnInteraction: false, 
        pauseOnMouseEnter: true
    },

    });


    const contactSwiper = new Swiper('.contact', {
        modules: [Autoplay],
    slidesPerView: 1,
    spaceBetween: 0,
    loop: true,                    
    speed: 800,
    autoplay: {
        delay: 1500,
        disableOnInteraction: false, 
        pauseOnMouseEnter: true
    },
    breakpoints: {
        768: {
            slidesPerView: 2,
            spaceBetween: 0
        },
        1280: {
            slidesPerView: 2
        }
    }
});

// PROJECT GALLERY

const thumbsSwiperEl = document.querySelector('.projectThumbs');

if (thumbsSwiperEl) {

    const thumbsSwiper = new Swiper('.projectThumbs', {

        spaceBetween: 12,

        slidesPerView: 4,

        watchSlidesProgress: true,

        breakpoints: {
            640: {
                slidesPerView: 5
            },

            1024: {
                slidesPerView: 7
            }
        }
    });

    new Swiper('.projectSwiper', {

        modules: [
            Navigation,
            Pagination,
            Thumbs,
            Autoplay,
            EffectFade
        ],

        effect: 'fade',

        fadeEffect: {
            crossFade: true
        },

        speed: 800,

        loop: true,

        autoplay: {
            delay: 5000,
            disableOnInteraction: false
        },

        navigation: {
            nextEl: '.project-next',
            prevEl: '.project-prev',
        },

        pagination: {
            el: '.project-pagination',
            type: 'fraction',
        },

        thumbs: {
            swiper: thumbsSwiper,
        }
    });
}





});