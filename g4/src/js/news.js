var company = document.querySelector("select[name=company]");
var submit = document.querySelector("input[type=submit]");
var articleList = document.querySelectorAll("article");

function applyFilter(filterType, filterValue) {
    var articleCriteriaList = [];
    for (let i = 0; i < articleList.length; i++) {
        articleCriteriaList.push(document.querySelectorAll(".news_articles_item_" + filterType)[i]);
    }
    console.log(articleCriteriaList);
    for (let i = 0; i < articleList.length; i++) {
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
    var companyValue = company.value;
    applyFilter("company", companyValue);
});