var closeIcon = document.querySelector('.Menu__closeIcon');
var menuIsActive = document.querySelector('.Menu--isActive');
var burger = document.querySelector('.Menu__burger').addEventListener('click', function () {
        menuIsActive.style.display = 'block';
});

closeIcon.addEventListener('click',  function() {
    menuIsActive.style.display = 'none';
});