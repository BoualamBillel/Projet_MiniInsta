<?php
$dossier = 'uploads/';
$images = [];
$gestionnaire = opendir('uploads/');
if ($gestionnaire) {
    while (false !== ($file = readdir($gestionnaire))) {
        if ($file != '.' && $file != '..') {
            $images[] = $file;
        }
    }
    closedir($gestionnaire);
}

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Reddit+Sans+Condensed:wght@200..900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&display=swap" rel="stylesheet">
    <title>Mini Insta</title>
</head>

<body>
    <header>
        <a href="index.php" target="_blank" rel="noopener noreferrer"><img src="images/logoMiniInstaSansFond.png"
                alt="logo"></a>
    </header>
    <div class="bouton-nav-galerie">
        <a href="upload.php"><button>Uploader votre image</button></a>
        <a href="index"><button>Retour à la page d'acceuil</button></a>
    </div>
    <section class="GaleriePhoto">
        <h1>Galerie Photo </h1>
        <div class="galerie">
            <?php
            foreach ($images as $image) {
                echo '<div class="photo"><img src="' . $dossier . $image . '" alt="Photo" class="photo"></div>';
            }
            ?>
        </div>
    </section>
    <footer>
        <a href="https://github.com/BoualamBillel" target="_blank" rel="noopener noreferrer"><img
                src="images/logo-git-gris.png" alt="logo"></a>
    </footer>
</body>

</html>