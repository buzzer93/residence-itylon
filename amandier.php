<?php
$title = "L'Amandier";
require './elements/head.php';
require_once './fonctions/function.php';
?>



<div class="description">
    <h4>
        L’Amandier
    </h4>
    <p>L’Amandier est une maison confortable composée de 3 chambres avec lit en 140, 2 salle d’eau et un toilette séparé. Elle peut accueillir 6 personnes. La cuisine est bien équipée. Une salle à manger vous permettra de prendre vos repas à l’intérieur avec la vue sur la montagne. La terrasse très spacieuse est équipée de transats ainsi que d’un barbecue. La place de parking est située juste à côté de la maison.</p>
</div>

<div id="amandier" class="gallery" >
<?php imageGallery('./media/photos/PHOTOS ITYLON 2023/L_AMANDIER') ?>
</div>

<?php
require './elements/footer.php';
?>
