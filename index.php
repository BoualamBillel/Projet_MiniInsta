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
    <section class="Info">
        <h1>MiniInsta :<br> Une Galerie Créative et Libre</h1>
        <div class="bouton-nav">
        <a href="upload.php"><button>Uploader votre image</button></a>
        <a href="galerie.php"><button>Acceder à la galerie photo</button></a>
        </div>

        <div class="border-text">

            <p>Bienvenue sur <strong>MiniInsta</strong>, un espace où chaque utilisateur devient un artiste.</p>

            <h2>Exprimez votre créativité</h2>

            <p>Plus qu'un simple site d'upload d'images, MiniInsta offre une galerie dynamique où la créativité est
                reine.</p>

            <h2>Un espace pour chaque photo</h2>

            <p>Chaque photo téléchargée est un coup de pinceau sur une toile virtuelle, un instantané partagé avec le
                monde.</p>

            <h2>Une galerie évolutive</h2>

            <p>Ici, la liberté d’expression prend forme dans une galerie évolutive, où chaque image trouve sa place
                parmi les créations des autres.</p>

            <h2>Partagez vos moments</h2>

            <p>Que vous soyez passionné de photographie ou simplement envie de partager un moment, MiniInsta est le lieu
                où votre créativité prend vie aux côtés de celle des autres.</p>

            <h2>Rejoignez notre œuvre collective</h2>

            <p>Exprimez-vous, laissez votre imagination s’épanouir, et faites partie de cette grande œuvre collective !
            </p>

        </div>
    </section>
    <footer>
        <a href="https://github.com/BoualamBillel" target="_blank" rel="noopener noreferrer"><img
                src="images/logo-git-gris.png" alt="logo"></a>
    </footer>
</body>

</html>