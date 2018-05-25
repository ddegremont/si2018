var imgs = document.querySelectorAll('.img');
imgs = Array.from(imgs);
var parallax = function() {
  imgs.forEach((img, i) => {
    i = i + 1;
    var move = scrollY * (-0.5 * i);
    if (move < -(innerHeight / 3)) {
      move = -(innerHeight / 3);
    }
    TweenMax.to(img, 0.25, {
      y: move,
    });
    TweenMax.to(img, 0.25, {
      webkitFilter: 'blur(' + -move / 200 + 'px)',
    });
  });
};
window.addEventListener('scroll', parallax);
window.addEventListener('load', parallax);
window.addEventListener('resize', parallax);
