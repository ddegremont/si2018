var category = document.querySelector("select[name=category]");
var submit = document.querySelector("input[type=submit]");
var articleList = document.querySelectorAll("article");

function applyFilter(filterType, filterValue) {
    var articleCriteriaList = [];
    for (let i = 0; i < articleList.length; i++) {
        articleCriteriaList.push(document.querySelectorAll(".factsheets_articles_item_" + filterType)[i]);
    }
    for (let i = 0; i < articleList.length; i++) {
        console.log(articleCriteriaList[i].textContent);
        if (filterValue === "none" || articleCriteriaList[i].textContent === filterValue) {
            articleList[i].style.display = "block";
        }
        else {
            articleList[i].style.display = "none";
        }
    }
}

submit.addEventListener("click", function(event) {
    event.preventDefault();
    var articleList = document.querySelectorAll("article");
    var categoryValue = category.value;
    applyFilter("category", categoryValue);
});