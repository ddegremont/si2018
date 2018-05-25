<?php

require_once './connexion.php';
include './header.php';
?>

<section class="top">
    <nav class="top_nav">
        <h3 class="top_nav_title">Top 100<span class="top_nav_title_span">.</span></h3>
        <nav class="top_nav_menu">
            <p class="top_nav_menu_main">Thalasso / SPA</p>
            <ul class="top_nav_menu_list">
                <li class="top_nav_menu_list_item topSpa">Thalasso / SPA</li>
                <li class="top_nav_menu_list_item topHot">Hôtels</li>
                <li class="top_nav_menu_list_item topRes">Restaurants</li>
            </ul>

        </nav>
        <ul class="top_nav_deskMenu_list">
            <li class="top_nav_menu_list_item topSpa">Thalasso / SPA</li>
            <li class="top_nav_menu_list_item topHot">Hôtels</li>
            <li class="top_nav_menu_list_item topRes">Restaurants</li>
        </ul>
    </nav>
    <ul class="top_list topSpaList">
        <?php
        $sql = "SELECT
  top_id,
  top_class,
  top_title,
  top_city,
  top_select
FROM
  top
  WHERE 
  top_select = 'spa'
  ORDER BY top_class ASC 
;";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        ?>

        <?php while(false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)) :?>
        <li class="top_list_item">
            <p class="top_list_item_nb"><?=$row["top_class"]?>.</p>
            <div class="top_list_item_titleBox">
                <h4 class="top_list_item_titleBox_title"><?=$row["top_title"]?></h4>
                <h5 class="top_list_item_titleBox_subtitle"><?=$row["top_city"]?></h5>
            </div>
        </li>
        <?php endwhile;?>
    </ul>
    <ul class="top_list topHotList">
        <?php


        $sql = "SELECT
  top_id,
  top_class,
  top_title,
  top_city,
  top_select
FROM
  top
  WHERE 
  top_select = 'hotel'
  ORDER BY top_class ASC 
;";

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        ?>
        <?php while(false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)) :?>
            <li class="top_list_item">
            <p class="top_list_item_nb"><?=$row["top_class"]?>.</p>
            <div class="top_list_item_titleBox">
                <h4 class="top_list_item_titleBox_title"><?=$row["top_title"]?></h4>
                <h5 class="top_list_item_titleBox_subtitle"><?=$row["top_city"]?></h5>
            </div>
        </li>
        <?php endwhile;?>
    </ul>
    <ul class="top_list topResList">
        <?php


        $sql = "SELECT
  top_id,
  top_class,
  top_title,
  top_city,
  top_select
FROM
  top
  WHERE 
  top_select = 'restaurant'
  ORDER BY top_class ASC 
;";

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        ?>
        <?php while(false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)) :?>
            <li class="top_list_item">
            <p class="top_list_item_nb"><?=$row["top_class"]?>.</p>
            <div class="top_list_item_titleBox">
                <h4 class="top_list_item_titleBox_title"><?=$row["top_title"]?></h4>
                <h5 class="top_list_item_titleBox_subtitle"><?=$row["top_city"]?></h5>
            </div>
        </li>
        <?php endwhile;?>
    </ul>
    <div class="fichePratique_head_btn">
        <div class="fiches_linkBox" id="btn_back">
            <a href="index.php" class="fiches_linkBox_link">Retour</a>
        </div>
    </div>
</section>
    <script>
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
    </script>
</body>

</html>