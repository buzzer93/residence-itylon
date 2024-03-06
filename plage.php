<?php
$title = "La plage";
require './elements/head.php';
require_once './fonctions/function.php';
?>


<div class="description">
            <h4>
            La plage de Ménasina
            </h4>
            <p>
            Cette plage est un véritable trésor naturel. Avec son sable fin et doré, ses eaux cristallines d'un bleu azur et son cadre pittoresque entouré de végétation méditerranéenne, elle offre un paysage spectaculaire.
            <br/>
            Moins fréquentée que d'autres plages de la région, elle offre une tranquillité et une atmosphère paisible. C'est l'endroit idéal pour se détendre, se baigner et profiter du soleil tout en admirant la vue imprenable sur la mer Méditerranée et les montagnes environnantes.
            <br/>
            En somme, la plage de Ménasina est un lieu préservé et enchanteur, offrant une escapade naturelle et reposante pour tous les amoureux de la mer et de la nature.
            </p>
        </div>


<div id="ashpodele" class="gallery" >
<?php imageGallery('./media/photos/PHOTOS ITYLON 2023/plage') ?>
</div>

<?php
require './elements/footer.php';
?>