<?php
$title = "gallery-residence";
$nav = "residence";
$dir = 'media/photos/PHOTOS ITYLON 2023/PISCINE PLAGE ENTREE';
require './elements/head.php';
require_once './fonctions/function.php';
?>
<div class="description">
    <h4> Séjourner à Itylon, c'est être un peu chez
        soi en vacances</h4>   
    <p class="description-text">
        Ici, rien de tape à l'oeil et de clinquant, nichées au milieu des fleurs et du
        maquis, sur un terrain arboré qui jouxte la superbe crique de
        Menasina, à l'entrée de Cargèse.
        <br />
        Jean et Isadora, sa fille, jouent la carte de la décontraction : disponible
        et serein, ils ont su installer à Itylon une ambiance familiale et
        bon enfant.
        <br />
        On se prend à fureter dans les
        recoins du jardin avant de prendre le
        petit chemin qui conduit à la plage. Un luxe simple, mais
        d'autant plus précieux.
    </p>
</div>
<!-- Images used to open the lightbox -->
<div class='container-fluid'>
    <div class="gallery row">
        <?php foreach (dirArray($dir) as $k => $img_name):?>
            <div class="gallery-img-box col-12 col-md-5 col-xl-3">            
                <img src="<?=$dir?>/<?=$img_name?>" onclick="openModal();currentSlide(<?=$k?>)" class="<?=format_class("$dir/$img_name")?> hover-shadow" alt="<?=$img_name?>">
            </div>
        <?php endforeach; ?>
    </div>
</div>
<!-- The Modal/Lightbox -->
<div id="myModal" class="modal">    
    <div class="modal-content">
        <span class="close cursor" onclick="closeModal()">&times;</span>
        
        <?php foreach (dirArray($dir) as $k => $img_name): ?>
            <div class="mySlides">    
                <div class="numbertext"><?=$k+1?>/<?=count(dirArray($dir))?>
                </div>        
                <div class="slide-image-box">
                    <img src="<?=$dir?>/<?=$img_name?>" class="<?=format_class("$dir/$img_name")?>" alt="<?=$img_name?>">
                </div>          
            </div>
        <?php endforeach; ?>

    <!-- Next/previous controls -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    <!-- Thumbnail image controls -->
    </div>
    <div class="modal-content">
        <div class="gallery row">
        <?php foreach (dirArray($dir) as $k => $img_name):?>
            <div class="col-4 col-md-3">
                <img class='demo <?=format_class("$dir/$img_name")?>' src='<?=$dir?>/<?=$img_name?>' onclick='currentSlide(<?=$k?>)' alt='<?=$img_name?>'>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
</div>
<script> 
var slideIndex = 1;
showSlides(slideIndex);
</script>
<?php
require './elements/footer.php';
?>
