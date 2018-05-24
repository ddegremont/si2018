const burgerMenu = document.querySelector('.burger');
const burger = document.querySelector('.header__nav__burger');
const burgerItem = document.querySelectorAll('.header__nav__burger__item');

burger.addEventListener('click',function () {
   burgerMenu.classList.toggle('--set-position');
   burgerItem[1].classList.toggle('--is-active');
   burgerItem[2].classList.toggle('--set-rotationLeft');
   burgerItem[0].classList.toggle('--set-rotationRight');
});

