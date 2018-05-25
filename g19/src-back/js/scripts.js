var headerDeskMenuItem = document.querySelectorAll('.header_deskMenu_item');
var headerDeskMenu = document.querySelector('.header_deskMenu');
var burger = document.querySelector('.header_burger');
var line = document.querySelectorAll('.header_burger_line')
var menu = document.querySelector('.header_menu');
var hblNm = document.querySelectorAll('.hbl-nm');
var hbl1 = document.querySelector('.hbl-1');
var hbl2 = document.querySelector('.hbl-2');
var hmb1 = document.querySelector('.hmb-1');
var hmb2 = document.querySelector('.hmb-2');
var menuItems = document.querySelectorAll('.header_menu_item');

burger.addEventListener('click', function() {
    menu.classList.toggle('is-active')
    hbl1.classList.toggle('is-rotated');
    hbl2.classList.toggle('is-rotatedInv');
    hmb1.classList.toggle('is-Xed');
    hmb2.classList.toggle('is-XedInv');
    for ( var i = 0; i < hblNm.length; i++) {
        hblNm[i].classList.toggle('is-offscreen');

    }
    for (let i = 0; i < menuItems.length; i++) {
        menuItems[i].classList.toggle('is-Yed');
    }
});
window.addEventListener('scroll', function() {
    if (window.scrollY > document.querySelector('.header').offsetHeight -30 ) {
        for (let i = 0; i < line.length; i++) {
            line[i].style.background = '#4A90E2';

        }
        console.log('poulet');
        for (let j = 0; j < headerDeskMenuItem.length; j++) {
            headerDeskMenuItem[j].style.color = '#000';
            // headerDeskMenuItem[j].style.fontFamily = 'Ftr-SemiBold';
            
        }
        headerDeskMenu.style.background = 'linear-gradient(#fff, rgba(255,255,255,0.75))';
    }
    else {
        for (let i = 0; i < line.length; i++) {
            line[i].style.background = '';

        }
        for (let j = 0; j < headerDeskMenuItem.length; j++) {
            headerDeskMenuItem[j].style.color = '';
            // headerDeskMenuItem[j].style.fontFamily = '';
            
        }
        headerDeskMenu.style.background = '';
    }
    
});



var btn_left = document.querySelector('.buttons_left');
var btn_right = document.querySelector('.buttons_right');
var imgs = document.querySelectorAll('.imageBox_img');
var imgs_length = imgs.length;
var counter = 0;
function goRight() {
  if (counter < 8 - 1) { // if the number of the img is > number of imgs
        imgs[counter].classList.remove('is-active-2'); // inactive the actual img
        counter++; // increase the number of the img
        imgs[counter].classList.add('is-active-2'); // active the next img
    }
    else { // when I'm on the last img and I want to active the first img
        counter = 0; // reinizialize the number of the img to 0
        imgs[8-1].classList.remove('is-active-2'); // inactive the last img
        imgs[counter].classList.add('is-active-2'); // active the first img
    }
}

function goLeft() {
  if (counter > 0) { // if the number of the img is > 0
        imgs[counter].classList.remove('is-active-2'); // inactive the actual img
        counter--; // decrease the number of the img 
        imgs[counter].classList.add('is-active-2'); // active the previous img
    }
    else { // when I'm on the first img and I want to active the last img
        counter = 8-1; // reinizialize the number of the img to the last
        imgs[0].classList.remove('is-active-2'); // inactive the first img
        imgs[counter].classList.add('is-active-2'); // active the last img
    }
}

btn_right.addEventListener('click', function() { // when I click on the button "NEXT"
    goRight();
});

btn_left.addEventListener('click', function() { // when I click on the button "PREVIOUS"
    goLeft();
});

var autoLeft = window.setInterval(goLeft, 3000);
function loop() {
    console.log('hey');
    if (window.innerWidth > 768) {
        clearInterval(autoLeft);
    }
    else {
        window.setInterval(goLeft, 3000)
    }
}
window.setInterval(loop, 3000);


var topNav = document.querySelector('.top_nav');
var topMain = document.querySelector('.top_nav_menu_main');
var topMenuList = document.querySelector('.top_nav_menu_list');
var topMenu = document.querySelector('.top_nav_menu');

topMain.addEventListener('click', function() {
    topMenuList.classList.toggle('is-active');
    topMenu.classList.toggle('is-open');
    topMain.classList.toggle('is-padding');
});

var topSpa = document.querySelectorAll('.topSpa');
var topHot = document.querySelectorAll('.topHot');
var topRes = document.querySelectorAll('.topRes');
var topSpaList = document.querySelector('.topSpaList');
var topHotList = document.querySelector('.topHotList');
var topResList = document.querySelector('.topResList');
for (let i = 0; i < 2; i++) {
    topSpa[i].addEventListener('click', function() {
        for (let i = 0; i < 2; i++) {
            topSpa[i].style.background = "#4A90E2";
            topHot[i].style.background = "";
            topRes[i].style.background = "";
            topSpa[i].style.color = "#fff";
            topHot[i].style.color = "";
            topRes[i].style.color = "";
        }
        topMenuList.classList.toggle('is-active');
        topMenu.classList.toggle('is-open');
        topMain.classList.toggle('is-padding');
        topMain.innerHTML = 'Thalasso / SPA';
        topSpaList.style.display = "flex";
        topHotList.style.display = "none";
        topResList.style.display = "none";


    });
    topHot[i].addEventListener('click', function() {
        for (let i = 0; i < 2; i++) {
            topSpa[i].style.background = "#fff";
            topHot[i].style.background = "#4A90E2";
            topRes[i].style.background = "";
            topSpa[i].style.color = "#000";
            topHot[i].style.color = "#fff";
            topRes[i].style.color = "";
        }
        topMenuList.classList.toggle('is-active');
        topMenu.classList.toggle('is-open');
        topMain.classList.toggle('is-padding');
        topMain.innerHTML = 'Hôtels';
        topSpaList.style.display = "none";
        topHotList.style.display = "flex";
        topResList.style.display = "none";


    });
    topRes[i].addEventListener('click', function() {
        for (let i = 0; i < 2; i++) {
            topSpa[i].style.background = "#fff";
            topHot[i].style.background = "";
            topRes[i].style.background = "#4A90E2";
            topSpa[i].style.color = "#000";
            topHot[i].style.color = "";
            topRes[i].style.color = "#fff";
        }
        topMenuList.classList.toggle('is-active');
        topMenu.classList.toggle('is-open');
        topMain.classList.toggle('is-padding');
        topMain.innerHTML = 'Restaurants';
        topSpaList.style.display = "none";
        topHotList.style.display = "none";
        topResList.style.display = "flex";


    });

}
var header = document.querySelector('.header');
var mook = document.querySelector('.mook');
var fiches = document.querySelector('.fiches');
var bonPlans = document.querySelector('.bonPlans');
var aled = document.querySelector('.aled');
var team = document.querySelector('.team');
var contact = document.querySelector('.contact');

var gotoHome = document.querySelectorAll('.gotoHome');
var gotoMook = document.querySelectorAll('.gotoMook');
var gotoFiches = document.querySelectorAll('.gotoFiches');
var gotoBonPlans = document.querySelectorAll('.gotoBonPlans');
var gotoTop = document.querySelectorAll('.gotoTop');
var gotoTeam = document.querySelectorAll('.gotoTeam');
var gotoContact = document.querySelectorAll('.gotoHome');

for (let i = 0; i < 2; i++) {
    gotoHome[i].addEventListener('click', function() {
        header.scrollIntoView({
            behavior: 'smooth',
        });
    });
    gotoMook[i].addEventListener('click', function() {
        mook.scrollIntoView({
            behavior: 'smooth',
        });
    });
    gotoFiches[i].addEventListener('click', function() {
        fiches.scrollIntoView({
            behavior: 'smooth',
        });
    });
    gotoBonPlans[i].addEventListener('click', function() {
        bonPlans.scrollIntoView({
            behavior: 'smooth',
        });
    });
    gotoTop[i].addEventListener('click', function() {
        aled.scrollIntoView({
            behavior: 'smooth',
        });
    });
    gotoTeam[i].addEventListener('click', function() {
        team.scrollIntoView({
            behavior: 'smooth',
        });
    });
    gotoContact[i].addEventListener('click', function() {
        contact.scrollIntoView({
            behavior: 'smooth',
        });
    });
    
}