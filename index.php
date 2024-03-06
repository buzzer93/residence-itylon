<?php
$title = "Résidence-Itylon";
$nav = "index";
require './elements/head.php';
require_once './fonctions/function.php';
?>
<div class="video">
    <video id="background-video" src="media/videos/Vidéo sans titre ‐ Réalisée avec Clipchamp (1).mp4" muted autoplay loop></video>
</div>
<div class="overlay">
    <img id="main-img" src="media/logo-Itylon-mini.png" alt="">
    <div id="main-button" class="container">
        <a type="button" class="btn btn-lg" id="main-button1" href="./contact.php">Réserver</a>
        <a type="button" class="btn btn-lg" id="main-button2" href="./maisons.php">Visitez</a>

    </div>
    <div class="row index">
        <?php cardBuilder(
            "La residence",
            "residence.php",
            "media/photos/PHOTOS ITYLON 2023/PISCINE PLAGE ENTREE/a residence (14).jpg",
            "Profitez d'un cadre paisible et de la nature"
        ) ?>
        <?php cardBuilder(
            'La plage de ménasina',
            'plage.php',
            'media\photos\best-photo\Plage.jpg',
            'À 5 minutes à pied de votre maison.'
        ) ?>
        <?php cardBuilder(
            "les alentours ",
            "alentours.php",
            "media/photos/PHOTOS ITYLON 2023/plage/a plage (3).JPG",
            "une région où se marient mer et montagne."
        ) ?>
    </div>

    <?php
    require './elements/footer.php';
    ?>
</div>