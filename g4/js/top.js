var catIndex = 0;

var arrowsLeft  = document.querySelectorAll(".arrow:first-child");
var arrowsRight = document.querySelectorAll(".arrow:nth-child(3)");

var catBlock    = document.querySelectorAll(".categorieContain");

function handleNewCatIndex() {
    for (let i = 0; i < 3; i++) {
        catBlock[i].style.display = (i === catIndex) ? "block" : "none";
    }
}

for (let i = 0; i < 3; i++) {
    arrowsLeft[i].addEventListener("click", function() {
        if (catIndex > 0) {
            catIndex--;
        }
        handleNewCatIndex();
    });
    arrowsRight[i].addEventListener("click", function() {
        if (catIndex < 2) {
            catIndex++;
        }
        handleNewCatIndex();
    });
}
catBlock[1].style.display = "none";
catBlock[2].style.display = "none";