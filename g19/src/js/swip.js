/*swip se prononce [souipe], j'y tiens beaucoup*/

  var swip = document.querySelector('.fiche_articleBox');
  var body = document.querySelector('body');
  var fiches = document.querySelectorAll('.fiches_article');

  if(body.offsetWidth >= 768){
    delete swip.dataset.flickity;
    fiches[1].style.float = "right";
    fiches[1].style.marginTop = "-0px";
    fiches[1].style.marginRight = "50px";
    fiches[3].style.float = "right";
    fiches[3].style.marginTop = "-0px";
    fiches[3].style.marginRight = "50px";
    fiches[5].style.float = "right";
    fiches[5].style.marginTop = "-0px";
    fiches[5].style.marginRight = "50px";
    for (var i = 0; i < fiches.length; i++) {
      fiches[i].style.marginLeft = "50px";
    }
  }else if (body.offsetWidth <= 768) {

  }
