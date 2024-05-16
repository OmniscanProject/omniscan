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

    const pricing = (window as any).pricing;
    const intervalBtns = document.querySelectorAll('.interval-btn');
    const backgroundFocus = document.querySelector('.background-focus');

    let products = document.querySelectorAll('.product');

    if(Object.keys(pricing).length){
        const initValues = (products, interval = 'month') => {
            if(products.length > 0){        
                products.forEach(product => {

                    let productCard = product.querySelector('.product-card');
                    let productId = productCard.dataset.product;

                    console.log(pricing[productId].hasOwnProperty(interval));
                    if(!pricing[productId].hasOwnProperty(interval)){
                        product.classList.add('disabled');
                        return;
                    } else {
                        product.classList.remove('disabled');
                    }

                    let priceSpan = productCard.querySelector("span[data-price]");
                    let intervalSpan = productCard.querySelector("span[data-interval]");
                    let priceIdInput = productCard.querySelector("input[name='price_id']");
                    priceSpan.innerText = pricing[productCard.dataset.product][interval]['price'];
                    intervalSpan.innerText = pricing[productCard.dataset.product][interval]['name'];
                    priceIdInput.value = pricing[productCard.dataset.product][interval]['id'];

                });
            }
        }
        intervalBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                console.log('ddd');
                
                $(".product-list").on('reInit', function(event, slick, direction){
                    console.log(event);
                    console.log(slick);
                    console.log(direction);
                });
                intervalBtns.forEach(btn => {
                    btn.classList.remove('active');
                });
                backgroundFocus.classList.toggle('active');

                let interval = (btn as HTMLElement).dataset.interval;
                initValues(products, interval);
            });
        });
    }

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
