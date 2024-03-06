<?php
$title = "Le Figuier";
require './elements/head.php';
require_once './fonctions/function.php';
?>


<div class="description">
    <h4>
    Le Figuier
    </h4>
    <p>
    Cette grande maison est composée de 3 chambres avec lits en 160, 2 salle de bain dont une privative à l'une des chambres. Elle a une capacité d’accueil allant jusqu’à 8 personnes. La cuisine est bien équipée. La terrasse très spacieuse est munie de transat ainsi que d’un barbecue. La place de parking est très vaste et est située devant la maison. 
    </p>
</div>

<div id="ashpodele" class="gallery" >
<?php imageGallery('./media/photos/PHOTOS ITYLON 2023/FIGUIER') ?>
</div>

<?php
require './elements/footer.php';
?>