var update = document.querySelector(".article_item_update");
var cancel = document.querySelector(".article_item_update_cancel");
var article = document.querySelector(".article");
var articleForm = document.querySelector(".article_form");

update.addEventListener("click", function() {
    articleForm.style.display = "block";
    article.style.display = "none";
});
cancel.addEventListener("click", function(event) {
    event.preventDefault();
    articleForm.style.display = "none";
    article.style.display = "block";
});