import 'bootstrap';
import * as THREE from 'https://cdn.skypack.dev/three@v0.122.0';




/* -------CAROSELLO TUTTI I PRODOTTI */


const swiper2 = new Swiper('.swiper2', {
    // Optional parameters
  /*   direction: 'horizontal',
    loop: true, */
    loop: true,
    // If we need pagination
    pagination: {
        el: '.paginazione2',
        clickable: true,
        
    },

    // Navigation arrows
    

   /*  Slide */
   slidesPerView: 2,
   spaceBetween: 30,
   freeMode: true,



   
});

/* ------------------------------------------ */





/* ----------------CAROSELLO NUOVIPRODOTTI SWIPER */





const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev', 
    },

    // And if we need scrollbar
    scrollbar: {
        el: '.swiper-scrollbar',
    },
});


