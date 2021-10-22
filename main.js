import * as Popper from '@popperjs/core';
import 'bootstrap';
import 'bootstrap/dist/css/bootstrap.css';
import './style.scss';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css';
import Swiper from 'swiper';
import { gsap } from "gsap";
import SwiperCore, { Navigation, Pagination } from 'swiper';
SwiperCore.use([Navigation, Pagination]);


var Swipes = new Swiper('.swiper-container', {
    loop: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: '.swiper-pagination',
    },
});


gsap.from('.navbar-toggler-icon', 
        {x: 0, 
         duration: 5, 
         });


const hamburger = document.querySelector(".navbar-toggler");
const hover = gsap.to(hamburger, {
  y:'-20%',
  duration: 0.5,
  paused: true,
  ease: "ease-in-out"
});


hamburger.addEventListener("mouseenter", () => hover.play());
hamburger.addEventListener("mouseleave", () => hover.reverse());
