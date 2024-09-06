window.addEventListener('DOMContentLoaded', function(){
    const hero_swiper = new Swiper(".hero-slider", {
        slidesPerView: 1, 
        spaceBetween: 4,  
        loop: true, 
        // speed: 700,    
        // keyboard: {
        //     enabled: true,
        //     pageUpDown: true,
        // },       
        // autoplay: {
        //     delay: 4000,            
        //     waitForTransition: true,
        // },  
    });

    const about_swiper = new Swiper(".about-slider", {
        slidesPerView: 1, 
        spaceBetween: 4,   
        loop: true,
        navigation: {
            nextEl: ".swiper-button-next.slider-arrow-next",
            prevEl: ".swiper-button-prev.slider-arrow-prev",
          },
        // speed: 700,    
        // keyboard: {
        //     enabled: true,
        //     pageUpDown: true,
        // },       
        // autoplay: {
        //     delay: 4000,            
        //     waitForTransition: true,
        // },  
    });

});