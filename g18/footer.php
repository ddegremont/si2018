    <?php 
	$sql = "SELECT 
	  `id`, 
	  `img`, 
	  `url`
	FROM
	  moman
	;";
	$stmt = $bdd->prepare($sql);
	$stmt->execute();
	errorHandler($stmt);
	?>
    <div class="partners">
        <div class="container">
           <div class="title">
               <h3>Nos partenaires</h3>
           </div>
            <div class="display-partners">
               <?php 
               $stmt = $bdd->prepare($sql);
               $stmt->execute();
               errorHandler($stmt);
               while(false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)):?>
                <a href="<?=$row["url"]?>" target="blank"><img src="<?=$row["img"]?>" style="max-width:150px;" alt="aeroport"></a>
               <?php endwhile;?>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="flex">
                <div class="left">
                    <ul class="menu">
                        <li>
                            <a href="#">Accueil</a>
                        </li>
                        <li>
                            <a href="#">Partenaires</a>
                        </li>
                        <li>
                            <a href="#">Top 100</a>
                        </li>
                        <li>
                            <a href="#">Fiches pratiques</a>
                        </li>
                        <li>
                            <a href="#">Contact</a>
                        </li>
                        <li>
                            <a href="#">Blog : Là où je vous emmènerai</a>
                        </li>
                    </ul>
                </div>
                <div class="right">
                    Tous droits réservés - © 2018
                </div>
            </div>
        </div>
    </div>


    <script src="assets/js/jquery-3.2.1.slim.min.js"></script>
    <script src="assets/js/jquery.timeago.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>