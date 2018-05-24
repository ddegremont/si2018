const burgerMenu = document.querySelector('.burger');
const burger = document.querySelector('.header__nav__burger');
const category = document.querySelector('.--category');
const categoryItem = document.querySelectorAll('.burger__container__item__subtitle');
const burgerItem = document.querySelectorAll('.header__nav__burger__item');

burger.addEventListener('click',function () {
   burgerMenu.classList.toggle('--set-position');
   burgerItem[1].classList.toggle('--is-active');
   burgerItem[2].classList.toggle('--set-rotationLeft');
   burgerItem[0].classList.toggle('--set-rotationRight');
});

category.addEventListener('click',function () {
   console.log('j');
   for(let i = 0; i < categoryItem.length; i++){
      console.log('j');
      categoryItem[i].classList.toggle('--is-active');
   }
});

