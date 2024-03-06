<?php

$title = 'Maisons-type-1';
require './elements/head.php';
require_once './fonctions/function.php';
?>


<div class="description">
            <h4>
                Type 1
            </h4>
            <p>
                Les maisons de type 1 peuvent accueillir 2 à 4 personnes. Elles sont composées d’une chambre avec lit en 140 ainsi que d’un salon/séjour avec canapé lit.<br/>
                La cuisine est équipée de manière simple mais fonctionnelle. La terrasse est munie d’un barbecue, de transats et de parasols. Il y a également une place de parking privée pour chaque hébergement. 
            </p>
        </div>

<!-- Tab links -->
<div class="tab">    
    <button class="tablink btn" id='romarin'>Le Romarin</button>
    <button class="tablink btn" id='eucalyptus'>L&apos;Eucalyptus</button>
    <button class="tablink btn" id='laurier'>Le Laurier</button>
    <button class="tablink btn" id='olivier'>L&apos;Olivier</button>    
    <button class="tablink btn" id='rosier'>Le Rosier</button>
    <button class="tablink btn" id='ciste'>Le Ciste</button>
    <button class="tablink btn" id='myrte'>Le Myrte</button>
    <button class="tablink btn" id='lentisque'>Le Lentisque</button>    
</div>

<!-- Tab content -->
<div class="tabcontent eucalyptus">
    <?= galleryBuilder('./media/photos/PHOTOS ITYLON 2023/type 1/L_EUCALYPTUS'); ?>
</div>
<div class="tabcontent olivier">
    <?php galleryBuilder('./media/photos/PHOTOS ITYLON 2023/type 1/L_OLIVIER'); ?>  
</div>
<div class="tabcontent ciste">
    <?php galleryBuilder('./media/photos/PHOTOS ITYLON 2023/type 1/LE CISTE'); ?>
</div>
<div class="tabcontent laurier">
    <?php galleryBuilder('./media/photos/PHOTOS ITYLON 2023/type 1/LE LAURIER'); ?>
</div>
<div class="tabcontent myrte"> 
    <?php galleryBuilder('./media/photos/PHOTOS ITYLON 2023/type 1/LE MYRTE'); ?> 
</div>
<div class="tabcontent romarin"> 
    <?php galleryBuilder('./media/photos/PHOTOS ITYLON 2023/type 1/LE ROMARIN'); ?> 
</div>
<div class="tabcontent rosier">
    <?php galleryBuilder('./media/photos/PHOTOS ITYLON 2023/type 1/LE ROSIER'); ?>
</div>
<div class="tabcontent lentisque">
    <?php galleryBuilder('./media/photos/PHOTOS ITYLON 2023/type 1/LE LENTISQUE'); ?>
</div>

<?php
require './elements/footer.php';
?>