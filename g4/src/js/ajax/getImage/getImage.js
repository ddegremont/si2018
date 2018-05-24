const host = "localhost:8000";
var btn = document.querySelector("#imagebox_generator");
var cat = document.querySelector(".category");
var catPrev = document.querySelector(".category_prevbtn");
var catNext = document.querySelector(".category_nextbtn");
var catList = [
    "cat1",
    "cat2",
    "cat3",
    "cat4"
];
var catIndex = 0;
var catText = catList[catIndex];
var imagebox = {
    self: document.querySelector(".imagebox"),
    title: document.querySelector(".imagebox_title"),
    subtitle: document.querySelector(".imagebox_subtitle"),
    image: document.querySelector(".imagebox_image"),
};

function putImageInDOM(data) {
    imagebox.self.style.display = "block";
    imagebox.title.textContent = data.title;
    imagebox.subtitle.textContent = data.subtitle;
    imagebox.image.src = "src/img/" + data.imgSrc;
    imagebox.image.title = data.title;
    imagebox.image.alt = data.imgAlt;
}

function getNewImage() {
    fetch("http://" + host + "/src/js/ajax/getImage/getImage.php?category=" + catText, {
        method: "get"
    })
        .then(function(response) {
            return response.json();
        })
        .then(function(data) {
            if (data) {
                putImageInDOM(data);
            }
        });
}

catNext.addEventListener("click", function() {
    if (catIndex < 3) {
        catIndex++;
    }
    catText = catList[catIndex];
    cat.textContent = catText;
});
catPrev.addEventListener("click", function() {
    if (catIndex > 0) {
        catIndex--;
    }
    catText = catList[catIndex];
    cat.textContent = catText;
});
btn.addEventListener("click", function() {
    getNewImage();
});