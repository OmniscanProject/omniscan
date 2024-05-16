// /**
//  * First we will load all of this project's JavaScript dependencies which
//  * includes Vue and other libraries. It is a great starting point when
//  * building robust, powerful web applications using Vue and Laravel.
//  */
import 'slick-carousel';

import 'flowbite';

import './../scss/app.scss';

import './trigger';

import $ from 'jquery';

// Service page
document.addEventListener('DOMContentLoaded', () => {
    const initServiceSlider = () => {
        if(window.innerWidth <= 767) {
            $(".service-list").not('.slick-initialized').slick({
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                centerMode: true,
                centerPadding: '30px',
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
});
