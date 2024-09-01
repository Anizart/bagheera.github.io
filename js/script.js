'use strikt'

//+ burger:
$(document).ready(() => {
    $('.header__burger').click(() => {
        $('.header__burger, .header__menu').toggleClass('active');
        $('.wrapper').toggleClass('lock');
    });
});

//+ cards:
window.addEventListener('DOMContentLoaded', () => {
    const wrapper = document.querySelector('.cards-wrapper'),
          cards = wrapper.querySelectorAll('.cards-wrapper__card');
        //   images = wrapper.querySelectorAll('.cards-wrapper__img');
          
        if (wrapper && cards) {
            cards.forEach((card, i) => {
                card.addEventListener('click', () => {
                    switch (i) {
                        case 0:
                            location.href='html/mia.html';
                            break;
                        case 1:
                            location.href='html/alis.html';
                            break;
                        case 2:
                            location.href='html/sam.html';
                            break;
                        case 3:
                            location.href='html/ron.html';
                            break;
                    }
                });
            });
        }
    
    // wrapper.addEventListener('click', (event) => {
    //     const targer = event.target;        

    //     if (targer && targer.classList.contains('cards-wrapper__img')) {
    //         images.forEach((item, i) => {
    //             if (item == targer) {
    //                 switch (i) {
    //                     case 0:
    //                         location.href='#';
    //                         break;
    //                     case 1:
    //                         location.href='#';
    //                         break;
    //                     case 2:
    //                         location.href='#';
    //                         break;
    //                     case 3:
    //                         location.href='#';
    //                         break;
    //                 }
                    
    //             }
    //         });
    //     }
    // });
});