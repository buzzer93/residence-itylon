<?php

$title = "L'Arbousier";
require './elements/head.php';
require_once './fonctions/function.php';
?>



<div class="description">
    <h4>
    L'Arbousier
    </h4>
    <p>
    L'Arbousier est une maison pouvant accueillir entre 4 à 6 personnes. Elle est composée de 2 chambres avec lits en 140. Dans le salon/séjour il y a un canapé lit. La cuisine est équipée de manière simple mais fonctionnelle. La terrasse assez spacieuse est munie de transats ainsi que d'un barbecue. L’espace de parking est très vaste et situé juste devant la maison. 
    </p>
</div>


<div id="arbousier" class="gallery" >
<?php imageGallery('./media/photos/PHOTOS ITYLON 2023/L_ARBOUSIER') ?>
</div>

<?php
require './elements/footer.php';
?>
