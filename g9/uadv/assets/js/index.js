const dom = {
  listItem:   document.querySelectorAll('.menu-List-Item'),
  imgNavItm:  document.querySelectorAll('.Images_nav_itm'),
  cards:      document.querySelectorAll('.Images_card'),
  img:        document.querySelector('.Images'),
  contact:    document.querySelector('.Contact'),
  returnButt: document.querySelector('.Images_return'),
  twChoices:  document.querySelector('.Twitter_select'),
  twDisplay:  document.querySelector('.twitter-timeline')
}

for (let i = 0; i < dom.listItem.length; i++) {
  dom.listItem[i].addEventListener('click', () => {
    if (dom.listItem[i] === dom.listItem[3]) {
      dom.contact.style.display = 'flex';
    } else if (dom.listItem[i] === dom.listItem[2]) {
      dom.img.style.display = 'block';
    }
  });
}

for (let a = 0; a < dom.imgNavItm.length; a++) {
  dom.imgNavItm[a].addEventListener('click', () => {
    // active nav
    // let curr = document.querySelectorAll(".--active");
    // curr[0].classList = curr[0].classList.replace(" --active", "");
    // this.classList += " --active";

    // filter
    for (var b = 0; b < dom.cards.length; b++) {
      if (dom.imgNavItm[a].id === dom.cards[b].id) {
        dom.cards[b].style.display = '';
      } else {
        dom.cards[b].style.display = 'none';
      }
    }
  });
}

dom.returnButt.addEventListener('click', () => {
  dom.img.style.display = 'none';
});
