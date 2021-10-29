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

const play = document.querySelector('.btn-don');

play.addEventListener('click', function() {
  gsap.timeline()
    .fromTo('.btn-don', {scale: 1.1, duration: 0.3, backgroundColor: 'white', ease: "ease-in-out"},
                        {scale: 1, backgroundColor: 'white', ease: "ease-in-out"})
    .to('.text-don', {scale: 1, duration: 0.1, color: '#4EA5D9', ease: "ease-in-out"},)
});

const animation = gsap.timeline({
  defaults: { 
    y: '400%',
    ease: 'back'
  }
})
  .from('.arbret1', {})
.from('.arbret2', {})
 ;
