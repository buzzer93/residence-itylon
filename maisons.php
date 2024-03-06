<?php
$dir = './media/photos/best-photo';
$title = 'Nos-Maisons';
$nav = 'maisons';
require './elements/head.php';
require_once './fonctions/function.php';
?>

    <div class='row'>
        <?php cardBuilder (
            'Le Citronier',
            'citronier.php',
            'media\photos\best-photo\Citronier.jpg',
            'Capacité: 2 personnes<br />Nombre de chambre: 1'
        )?>
        <?php cardBuilder (
            'Les types 1',
            'types_1.php',
            'media\photos\best-photo\Type 1.jpg',
            'Capacité: 2 à 4 personnes<br />Nombre de chambre: 1'
        )?>
        <?php cardBuilder (
            'Kiwi et Cerisier',
            'kiwi_et_cerisier.php',
            'media\photos\best-photo\Kiwi et Cerisier.jpg',
            'Capacité: 2 à 4 personnes<br />Nombre de chambre: 2'
        )?>
        <?php cardBuilder (
            "L'Arbousier",
            'arbousier.php',
            'media\photos\best-photo\Arbousier.jpg',
            'Capacité: 2 à 6 personnes<br />Nombre de chambre: 2'
        )?>
        <?php cardBuilder (
            'Le Datura',
            'datura.php',
            'media\photos\best-photo\Datura.jpg',
            'Capacité: 2 à 5 personnes<br />Nombre de chambre: 2'
        )?>
        <?php cardBuilder (
            "L'Asphodèle",
            'asphodele.php',
            'media\photos\best-photo\Asphodele.jpg',
            'Capacité: 2 à 6 personnes<br />Nombre de chambre: 3'
        )?>
        <?php cardBuilder (
            "L'Amandier",
            'amandier.php',
            'media\photos\best-photo\Amandier.jpg',
            'Capacité: 2 à 6 personnes<br />Nombre de chambre: 3'
        )?>
        <?php cardBuilder (
            'Le Figuier',
            'figuier.php',
            'media\photos\best-photo\Figuier.jpg',
            'Capacité: 2 à 8 personnes<br />Nombre de chambre: 3'
        )?>

</div>  


<?php
require './elements/footer.php';
?>
