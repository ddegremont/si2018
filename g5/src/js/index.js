var bg = document.querySelectorAll(".home-carrousel-Bg");

for (let i = 0; i < bg.length; i++) {
  setInterval(function() {
    bg[i].classList.toggle('show');
  }, 6000)
}

// Card Top 100 -----

var btns = document.querySelectorAll('.btn-filter');
var cards = document.querySelectorAll('.card');

for (var a = 0; a < cards.length; a++) {
  if (cards[a].dataset.category === 'Restaurant') {
    cards[a].style.display = '';
  } else {
    cards[a].style.display = 'none';
  }
};

for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener('click', function() {
    for (var a = 0; a < cards.length; a++) {
      if (this.dataset.category === cards[a].dataset.category) {
        cards[a].style.display = '';
      } else {
        cards[a].style.display = 'none';
      }
    }
  });
};


// carrousel

var btn_left = document.querySelector('.left');
var btn_right = document.querySelector('.right');
var imgs = document.querySelectorAll('.carousel-ImgContent img');

var counter = 0;

btn_left.addEventListener('click', function() {
  imgs[counter].classList.remove('is-active');

  if (counter > 0) {
    counter--;
  } else {
    counter = imgs.length - 1;
  }
  imgs[counter].classList.add('is-active');
});

btn_right.addEventListener('click', function() {
  imgs[counter].classList.remove('is-active');

  if (counter < imgs.length - 1) {
    counter++;
  } else {
    counter = 0;
  }
  imgs[counter].classList.add('is-active');
});