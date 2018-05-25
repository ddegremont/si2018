<?php
require_once "includes/connexion.php";
include_once "header.php";

$sql = "SELECT 
  `id`, 
  `text`
FROM
  annonce
;";
$stmt = $bdd->prepare($sql);
$stmt->execute();
errorHandler($stmt);

$sql2 = "SELECT 
  `id`, 
  `img`,
  `titre`
FROM
  kin
;";
$stmt2 = $bdd->prepare($sql2);
$stmt2->execute();
errorHandler($stmt2);

$count=1;
?>

    <section class="homepage">
        <div class="header">
            <div class="container">
                <h3 class="header-title">Une année <br> de voyages</h3>
                <div class="separation"></div>
                <h5 class="header-subtitle">Des voyages testés…<br>
                    Des idées pour partir toute l’année !</h5>
            </div>
        </div>


        <div class="magazine">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 magazine-text">
                        <h1 class="title-magazine">
                            Le Mook
                        </h1>
                        <div class="separation"></div>
                        <p class="description-magazine">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam unde maxime deserunt assumenda est a molestiae numquam. Minus omnis ea sequi consequuntur distinctio iure aspernatur quae eaque, soluta cumque temporibus cupiditate ad recusandae dolor numquam. Eligendi impedit reprehenderit sequi, vero saepe cumque, ullam tenetur quia mollitia illo, perferendis, dolorum aliquid dolores placeat. Temporibus itaque doloremque ullam harum consectetur laudantium beatae adipisci fugiat, culpa, cum. Corporis debitis illo in id quia.
                        </p>
                        <div class="btn-magazine">
                            <a href="#" data-toggle="modal" data-target="#calameo" class="btn btn-theme btn-lg float-right">Voir le magazine</a>
                        </div>
                    </div>
                    <div class="col-md-7 magazine-photo">
                        <a href="#" data-toggle="modal" data-target="#calameo">
                            <img src="assets/img/uadv-couv.jpg" alt="magazine">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="services">
            <div class="container">
                <div class="title">
                    <h1>Nos services</h1>
                </div>
                <div class="row">
                    <div class="col-md-4 item">
                        <div class="circle">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h3 class="title-item">
                            Des fiches pratiques minutieusement détaillées, avec des QR codes  
                        </h3>
                    </div>
                    <div class="col-md-4 item">
                        <div class="circle">
                            <i class="fas fa-window-restore"></i>
                        </div>
                        <h3 class="title-item">
                            Une application sur laquelle nos fiches 
                            seront updatées et téléchargeables 
                        </h3>
                    </div>
                    <div class="col-md-4 item">
                        <div class="circle">
                            <i class="far fa-newspaper"></i>
                        </div>
                        <h3 class="title-item">
                            Un site offrant de vastes fonctionnalitées (achat, bons plans) 
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="bite">
            <div class="container">
                <div class="title">
                    <h3>Annonceurs</h3>
                </div>
                <div class="carousel-display">
                    <div id="annonceur" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#annonceur" data-slide-to="0" class="active"></li>
                            <?php while(false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)):?>
                                <li data-target="#annonceur" data-slide-to="<?=$count?>"></li>
                            <?php 
                            $count++;
                            endwhile;
                            $count=0;
							?>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="petitavion" src="assets/img/planeIcon.svg" alt="plane">
                                <p class="carousel-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi deleniti non asperiores, temporibus tenetur debitis error, ipsam consequuntur. Voluptates, est at eos, cum recusandae consectetur enim sint, quidem tenetur neque ullam. Cupiditate ullam odit voluptates officia iusto illum reprehenderit culpa minus recusandae ad, architecto esse sequi enim tempora accusamus, optio consectetur vero, mollitia doloribus illo cum placeat dolorum magnam aliquam.</p>
                            </div>
                            <?php 
                            $stmt = $bdd->prepare($sql);
                            $stmt->execute();
                            errorHandler($stmt);
                            while(false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)):?>
                            <div class="carousel-item">
                                <img class="petitavion" src="assets/img/planeIcon.svg" alt="plane">
                                <p class="carousel-text"><?=$row["text"]?></p>
                            </div>
                            <?php endwhile;?>
                        </div>
                        <a class="carousel-control-prev" href="#annonceur" role="button" data-slide="prev">
                            <i class="fas fa-chevron-left"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#annonceur" role="button" data-slide="next">
                            <i class="fas fa-chevron-right"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="boiteaimages">
            <div class="container">
                <div class="title">
                    <h3>Boîte à images</h3>
                </div>
                <div class="carousel-display">
                    <div id="boiteaimage" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#boiteaimage" data-slide-to="0" class="active"></li>
                            <?php while(false !== $row2 = $stmt2->fetch(PDO::FETCH_ASSOC)):?>
                            <li data-target="#boiteaimage" data-slide-to="<?=$count?>"></li>
                            <?php 
                            $count++;
                            endwhile;
                            $count=0;
							?>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assets/img/ImgHomePage.jpg" alt="aled">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Montagnes</h5>
                                </div>
                            </div>
                            <?php 
                            $stmt2 = $bdd->prepare($sql2);
                            $stmt2->execute();
                            errorHandler($stmt2);
                            while(false !== $row2 = $stmt2->fetch(PDO::FETCH_ASSOC)):?>
                            <div class="carousel-item">
                                <img src="<?=$row2["img"]?>" alt="aled">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5><?=$row2["titre"]?></h5>
                                </div>
                            </div>
                            <?php endwhile;?>
                        </div>
                        <a class="carousel-control-prev" href="#boiteaimage" role="button" data-slide="prev">
                            <i class="fas fa-chevron-left"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#boiteaimage" role="button" data-slide="next">
                            <i class="fas fa-chevron-right"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" tabindex="-1" role="dialog" id="calameo">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Extrait du magazine</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                        <div style="text-align:center;"><iframe src="https://fr.calameo.com/read/005056440d0fb160a4659" class="calameo" frameborder="0" scrolling="no" allowtransparency allowfullscreen style="margin:0 auto;"></iframe>
                                <div style="margin:4px 0px 8px;"></div>
                            </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </section>
<?php 
include_once "footer.php";
?>

