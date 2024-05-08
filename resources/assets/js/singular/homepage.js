import $ from 'jquery';

import 'slick-carousel';

// Vue
// import en from "@/i18n/en.json";
// import fr from "@/i18n/fr.json";
// import { createApp } from 'vue';
// import { createI18n } from "vue-i18n";

window.jQuery = window.$ = $; 

document.addEventListener('DOMContentLoaded', () => {
    const initServiceSlider = () => {
        if(window.innerWidth <= 767) {
            $(".service-list").slick({
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                dots: true
            });
        } else {
            $(".service-list").unslick;
        }
    }
    initServiceSlider();
    window.addEventListener('resize', () => {
        initServiceSlider();
    });

    const initFeatureSlider = () => {
        if(window.innerWidth <= 767) {
            $(".feature-list").slick({
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
                dots: false
            });
        } else {
            $(".feature-list").unslick;
        }
    }
    initFeatureSlider();
    window.addEventListener('resize', () => {
        initFeatureSlider();
    });

    const initProductSlider = () => {
        if(window.innerWidth <= 767) {
            $(".product-list").slick({
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                dots: true,
                centerMode: true,
                centerPadding: '30px'
            });
        } else {
            $(".feature-list").unslick;
        }
    }
    initProductSlider();
    window.addEventListener('resize', () => {
        initProductSlider();
    });



    //Vue
    // const i18n = createI18n({
    //     locale: "fr",
    //     fallbackLocale: "fr",
    //     messages: { fr, en },
    // });
    // createApp(Analyze)
    //     .use(i18n)
    //     .mount('#analyze-section');


});
