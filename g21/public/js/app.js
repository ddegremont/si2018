/*
    Slider
 */
let buttonLeft = document.querySelector('.slider__button--left');
let buttonRight = document.querySelector('.slider__button--right');
let sliderItem = document.querySelectorAll('.slider__item');
let slider = document.querySelector('.slider__container');
let counter = 0;
let sliderWidth = slider.offsetWidth;

slider.style.width = (sliderWidth * sliderItem.length) + 'px';

buttonLeft.addEventListener('click', function() {
    if (counter > 0) {
        counter--;
    } else {
        counter = sliderItem.length - 1;
    }
    slider.style.marginLeft = (-sliderWidth * counter) + 'px';
});

buttonRight.addEventListener('click', function() {
    if (counter < sliderItem.length - 1) {
        counter++;
    } else {
        counter = 0;
    }
    slider.style.marginLeft = (-sliderWidth * counter) + 'px';
});

/*
    Allow burger menu to appear on click
 */
let headerButton = document.querySelector('.menu__button');
let modal = document.querySelector('.modal');
let body = document.querySelector('body');

headerButton.addEventListener('click', function() {
    if (headerButton.classList.contains('menu__button--active')) {
        headerButton.classList.remove('menu__button--active');
        modal.classList.remove('modal--active');
        body.style.overflow = 'scroll';
    } else {
        body.style.overflow = 'hidden';
        headerButton.classList.add('menu__button--active');
        modal.classList.add('modal--active');
    }
});