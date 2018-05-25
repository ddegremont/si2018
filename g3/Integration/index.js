// Burger menu
$('#toggle').click(function() {
  $(this).toggleClass('active');
  $('#overlay').toggleClass('open');
});


// modal
var btn = document.querySelector('.--button');
var modal = document.querySelector('.modal');
var overlay = document.querySelector('.modal-overlay');


btn.addEventListener('click', function() {
  modal.style.display = 'block';
});

overlay.addEventListener('click', function() {
  modal.style.display = '';
});



/// carousel
