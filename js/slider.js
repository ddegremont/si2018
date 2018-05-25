// var btn_left = document.querySelector('.home-previous');
// var btn_right = document.querySelector('.home-next');
// var imgs = document.querySelectorAll('.home-carousel img');
// var counter = Math.floor(Math.random() * imgs.length);
// imgs[counter].classList.add('is-active');
// btn_left.addEventListener('click', function () {
//   if (counter > 0) {
//     imgs[counter].classList.remove('is-active');
//     counter--;
//     imgs[counter].classList.add('is-active');
//   } else {
//     imgs[counter].classList.remove('is-active');
//     counter = 5;
//     imgs[counter].classList.add('is-active');
//   }
// });
// btn_right.addEventListener('click', function () {
//   if (counter < imgs.length - 1) {
//     imgs[counter].classList.remove('is-active');
//     counter++;
//     imgs[counter].classList.add('is-active');
//   } else {
//     imgs[counter].classList.remove('is-active');
//     counter = 0;
//     imgs[counter].classList.add('is-active');
//   }
// });

function slider() {
  
  const images = document.querySelectorAll('.Main__block__slider__imagesImg')
  const buttonPlus = document.querySelector('.Main__block__slider__button--plus')
  const buttonMinus = document.querySelector('.Main__block__slider__button--minus')
  
  let count = 0
  
  buttonPlus.addEventListener('click', () => {
    count = count<images.length-1 ? count+1: 0
    for (const img of images) {
      img.style.transform = `translateX(${-count}00%)`
    }
  })
  buttonMinus.addEventListener('click', () => {
    count = count>0 ? count-1: images.length-1
    for (const img of images) {
      img.style.transform = `translateX(${-count}00%)`
    }
  })
}