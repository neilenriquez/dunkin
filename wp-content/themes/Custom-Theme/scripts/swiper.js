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
});

var filled_swiper = new Swiper(".filled-swiper", {
    loopPreventsSliding: true,
    watchOverflow: true,
    slidesPerView: 5,
    centeredSlides: true,
    loop: true,

    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
  });