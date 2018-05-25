/*var li = document.querySelectorAll('.topBar_menu');
console.log(li);

for (var i = 0; i < li.length; i++) {
  li[i].addEventListener('click', function(){
    li[i].style.backgroundColor = "rgb(74, 144, 226)";})
  }
  */

/*.addEventListener('click', function(){
  li[i].style.backgroundColor = "rgb(74, 144, 226)";})*/

var l1 = document.querySelector('#l1');
var l2 = document.querySelector('#l2');
var l3 = document.querySelector('#l3');

l1.addEventListener('click', function(){
  l1.classList.add('is-swipswip');
  l2.classList.remove('is-swipswip');
  l3.classList.remove('is-swipswip');
  swipToBar();
})
l2.addEventListener('click', function(){
  l2.classList.toggle('is-swipswip');
  l1.classList.remove('is-swipswip');
  l3.classList.remove('is-swipswip');
  swipToHotel();
})
l3.addEventListener('click', function(){
  l3.classList.toggle('is-swipswip');
  l2.classList.remove('is-swipswip');
  l1.classList.remove('is-swipswip');
  swipToRestaurants();
})

var fichesImgs = document.querySelectorAll('.fiches_article img');
console.log(fichesImgs[0].src);

function swipToBar(){
  fichesImgs[0].src = "assets/imgs/drink.png";
  fichesImgs[1].src = "assets/imgs/moonshiner.png";
  fichesImgs[2].src = "assets/imgs/birdies.png";
}
function swipToHotel(){
  fichesImgs[0].src = "assets/imgs/hilton.png";
  fichesImgs[1].src = "assets/imgs/sofitel.png";
  fichesImgs[2].src = "assets/imgs/crown.png";
}
function swipToRestaurants(){
  fichesImgs[0].src = "assets/imgs/exotique.png";
  fichesImgs[1].src = "assets/imgs/george.png";
  fichesImgs[2].src = "assets/imgs/stakehouse.png";
}
