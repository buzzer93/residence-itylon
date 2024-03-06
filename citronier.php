<?php
$title = "Le Citronier";
require './elements/head.php';
require_once './fonctions/function.php';
?>

<div class="description">
    <h4>
    Le Citronier
    </h4>
    <p>Il s’agit de notre plus petite maison. Parfaite pour un couple, elle est composée d’une chambre avec lit en 160, d’un cuisine équipée de manière simple et fonctionnelle. La petite terrasse couverte est équipée d’un barbecue. La place de parking est juste à côté de la maison. 
 </p>
</div>


<div id="citronier" class="gallery" >
<?php imageGallery('./media/photos/PHOTOS ITYLON 2023/LE CITRONNIER'); ?>
</div>

<?php
require './elements/footer.php';
?>