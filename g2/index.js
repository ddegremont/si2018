var ui = {
  modal : document.querySelector('.header-nav-modal'),
  menu : document.querySelector('.header-nav-burger'),
  traitOne : document.querySelector('.burger-menu-1'),
  traitTwo : document.querySelector('.burger-menu-2'),
  traitThree : document.querySelector('.burger-menu-3'),
}

ui.menu.addEventListener('click', function(){
  ui.modal.classList.toggle('visible');
  ui.traitOne.classList.toggle('close');
  ui.traitTwo.classList.toggle('close');
  ui.traitThree.classList.toggle('close');
});
