

const topPages = () => {
  const sortBtn = document.querySelector('.--sortBtn')
  const filterBtn = document.querySelector('.--filterBtn')
  const sortList = document.querySelector('.--sortList')
  const filterList = document.querySelector('.--filterList')
  const slider = document.querySelector('.slider');
  const output = document.querySelector('.demo');
  const filterClose = document.querySelector('.--filterClose')
  const sortClose = document.querySelector('.--sortClose')
  const overlay = document.querySelector('.overlay')

  const rangeSlider = () => {
    output.innerHTML = slider.value;
    slider.oninput = () => {
      output.innerHTML = this.value;
    }
  }

  const handleActivateMenu = (button, list, closeBtn) => {
    button.addEventListener('click', (e) => {
      list.classList.add('--show')
      overlay.classList.add('--show')
    })
    closeBtn.addEventListener('click', (e) => {
      list.classList.remove('--show')
      overlay.classList.remove('--show')
    })
  }

  handleActivateMenu(sortBtn, sortList, sortClose)
  handleActivateMenu(filterBtn, filterList, filterClose)
  rangeSlider()
}

topPages()

import './burger.js';
