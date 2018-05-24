var btn_left = document.querySelector('.home-previous');
var btn_right = document.querySelector('.home-next');
var imgs = document.querySelectorAll('.home-carousel img');
var counter = Math.floor(Math.random() * imgs.length);
imgs[counter].classList.add('is-active');
btn_left.addEventListener('click', function () {
  if (counter > 0) {
    imgs[counter].classList.remove('is-active');
    counter--;
    imgs[counter].classList.add('is-active');
  } else {
    imgs[counter].classList.remove('is-active');
    counter = 5;
    imgs[counter].classList.add('is-active');
  }
});
btn_right.addEventListener('click', function () {
  if (counter < imgs.length - 1) {
    imgs[counter].classList.remove('is-active');
    counter++;
    imgs[counter].classList.add('is-active');
  } else {
    imgs[counter].classList.remove('is-active');
    counter = 0;
    imgs[counter].classList.add('is-active');
  }
});