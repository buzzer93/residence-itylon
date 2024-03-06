<?php
$dir = "media/photos/best-photo";
$title = "Aux-alentours";
$nav = "alentours";
require './elements/head.php';
require_once './fonctions/function.php';
?>

<div class="row">
    <?php cardBuilder (
                'La plage de ménasina',
                'plage.php',
                'media\photos\best-photo\Plage.jpg',
                'À seulement quelques minutes à pied de votre maison.la plage de Menasina s’étend sur environ 200 mètres. Elle nous offre une magnifique vue jusqu’à la marine de Cargèse. '
    )?>
    <?php cardBuilder (
                'Promenades en mer',
                'https://www.ufilanciu.fr/',
                'https://www.ufilanciu.fr/photo/93/450/0/normal',
                ' Avec <a href="https://www.ufilanciu.fr/">U Filanciu</a> :Un moment insolite entre mer et montagnes pour découvrir la réserve de Scandola et les calanques de Piana lors d’une balade en bateau.'
    )?>
    <?php cardBuilder (
                'Les randonnées',
                'https://www.visorando.com/randonnee-cargese.html',
                'media\photos\best-photo\rando.jpg',
                'En famille ou pour les marcheurs confirmés, en montagne ou sur la côte, il y en a pour tous les goûts.'
    )?>
    <?php cardBuilder (
                'Balade à cheval',
                'https://www.ranchcorse.com/les-balades-de-cargese/',
                'media\photos\best-photo\cheval.jpg',
                'Le Ranch de Cargese vous invite à découvrir les richesses naturelles et historiques de la région. Au départ de la magnifique plage de Chiuni, les balades sont de véritables invitations à l’émerveillement.'
    )?>
    </div>  

    
<?php
require './elements/footer.php';
?>

