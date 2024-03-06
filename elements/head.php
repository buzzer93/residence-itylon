<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/media/logo_itylon.png" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mooli&display=swap" rel="stylesheet">
    <link href="../css/styles.css" rel="stylesheet" > 
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>    
    <script src="../fonctions/js/gallery.js"></script>
    <title>
        <?php if (isset($title)){echo $title; } 
        else echo("Résidence-Itylon")
        ?>
    </title>
    
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md sticky-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="./index.php">
                    <img src="./media/logo_itylon.png" alt="logo_itylon">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="fas fa-bars fa-lg" style="color: #2d2f31;"></i></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link <?php if ($nav === 'index'):?>active<?php endif;?>" aria-current="page" href="./index.php">Accueil</a>
                        <a class="nav-link <?php if ($nav === 'maisons'):?>active<?php endif;?>" href="./maisons.php">Les maisons</a>
                        <a class="nav-link <?php if ($nav === 'residence'):?>active<?php endif;?>" href="./residence.php">La residence</a>
                        <a class="nav-link <?php if ($nav === 'alentours'):?>active<?php endif;?>" href="./alentours.php">Les alentours</a>
                        <a class="nav-link <?php if ($nav === 'contact'):?>active<?php endif;?>" href="./contact.php">Tarifs & Contact</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>