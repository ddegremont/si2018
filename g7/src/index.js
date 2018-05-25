import 'flexboxgrid';
import './styles/styles.scss';




const sliderImages = document.querySelectorAll('.slide-in');

function checkSlide(e) {
  sliderImages.forEach(sliderImage => {
    const slidInAt = (window.scrollY + window.innerHeight) - sliderImage.height / 2;
    const imageBottom = sliderImage.offsetTop + sliderImage.height;
    const isHalfShown = slidInAt > sliderImage.offsetTop;
    const isNotScrollPast = window.scrollY < imageBottom;
    if (isHalfShown && isNotScrollPast) {
      sliderImage.classList.add('active');
    } else {
      sliderImage.classList.remove('avtive');
    }
  });
}

window.addEventListener('scroll', checkSlide);

const slider = document.querySelector('.items');
let isDown = false;
let startX;
let scrollLeft;

slider.addEventListener('mousedown', (e) => {
  isDown = true;
  slider.classList.add('active');
  startX = e.pageX - slider.offsetLeft;
  scrollLeft = slider.scrollLeft;
});

slider.addEventListener('mouseleave', () => {
  isDown = false;
  slider.classList.remove('active');
});

slider.addEventListener('mouseup', () => {
  isDown = false;
  slider.classList.remove('active');
});

slider.addEventListener('mousemove', (e) => {
  if (!isDown) return;
  e.preventDefault();
  const x = e.pageX - slider.offsetLeft;
  const walk = (x - startX) * 1.5;
  slider.scrollLeft = scrollLeft - walk;
});
