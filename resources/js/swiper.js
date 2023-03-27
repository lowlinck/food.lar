import Swiper from 'swiper/bundle';

const swiper = new Swiper('.swiper', {
  // Optional parameters
  slidesPerView: 4,
  spaceBetween: 30,
  autoplay: {
    delay: 1000, // время задержки между прокрутками в миллисекундах
     disableOnInteraction: false // автоматическая прокрутка останавливается при взаимодействии пользователя со слайдером
  },
  loop: true,
  

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.button-next',
    prevEl: '.button-prev',
  },
  breakpoints:{
    375:{
      slidesPerView: 2,  
    },
    768:{
      slidesPerView: 4,  
    },
    1440:{
      slidesPerView: 4,  
    }
    },
 
  });