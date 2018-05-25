var gallerySquares = document.querySelectorAll(".gallery-Square");
gallerySquares = Array.from(gallerySquares);
var modalBack = document.querySelector(".modal-Back");
var modal = document.querySelector(".modal");

for (var i = 0; i < gallerySquares.length; i++) {
  gallerySquares[i].addEventListener("click", function(){
    for (var i = 0; i < gallerySquares.length; i++) {
      gallerySquares[i].style.height = "250px";
    }
    this.style.height = "300px";
    modal.style.display = "block";
  });
}

modalBack.addEventListener("click", function(){
  modal.style.display = "none";
  for (var i = 0; i < gallerySquares.length; i++) {
    gallerySquares[i].style.height = "250px";
  }
});
