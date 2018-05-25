var card = document.querySelector(".card");
var horairesImg = document.querySelector(".horaires-Container-ImgContainer");
var horairesItem = document.querySelector(".horaires-Container-Item");
var background = document.querySelector(".homepage-Image");
var avis = document.querySelector(".avis");

if (card) {
  window.addEventListener("scroll", () => {
    var move = scrollY * 0.2;
    var move2 = scrollY * 0.3;
    var move3 = scrollY * 0.005;
    var move4 = scrollY * 0.4;
    card.style.transform = "translateY(" + (-move) + "px)";
    horairesImg.style.transform = "translateY(" + (-move4) + "px)";
    horairesItem.style.transform = "translateY(" + (-move2) + "px)";
    background.style.filter = "blur(" + (move3) + "px)";
    avis.style.transform = "translateY(" + (-move) + "px)";
  });
}
