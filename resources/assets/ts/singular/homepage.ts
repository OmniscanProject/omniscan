import $ from 'jquery';
import 'slick-carousel';

// Vue
import en from '@v/i18n/en.json';
import fr from '@v/i18n/fr.json';
import Analyze from '@v/pages/homepage/Analyze.vue';
import { createApp } from 'vue';
import { createI18n } from 'vue-i18n';

document.addEventListener('DOMContentLoaded', () => {
    const initDiscoverSlider = () => {
        if(window.innerWidth <= 767) {
            $(".discover-list").not('.slick-initialized').slick({
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                dots: true
            });
        } else {
            $(".discover-list");
        }
    }
    initDiscoverSlider();
    window.addEventListener('resize', () => {
        initDiscoverSlider();
    });

    const initObjectiveSlider = () => {
        if(window.innerWidth <= 767) {
            $(".objective-list").not('.slick-initialized').slick({
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
                dots: false
            });
        } else {
            $(".objective-list").unslick;
        }
    }
    initObjectiveSlider();
    window.addEventListener('resize', () => {
        initObjectiveSlider();
    });
    
    // Products section
    const initProductSlider = () => {        
        if(window.innerWidth <= 767) {
            $(".product-list").not('.slick-initialized').slick({
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                dots: true,
                centerMode: true,
                centerPadding: '30px'
            });
        } else {
            $(".product-list").unslick;
        }
    }
    initProductSlider();
    window.addEventListener('resize', () => {
        initProductSlider();
    });

    //Vue
    const i18n = createI18n({
        locale: "fr",
        fallbackLocale: "fr",
        legacy: false,
        messages: { fr, en },
    });
    createApp(Analyze)
        .use(i18n)
        .mount('#analyze-section');
});
