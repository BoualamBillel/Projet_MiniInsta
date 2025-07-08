<?php

if (isset($_GET['image'])) {
    $image = $_GET['image'];
    $imagePath = 'uploads/' . $image;
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
    <title>Mini Insta - Upload !</title>
</head>

<body>
    <header>
        <a href="index.php" target="_blank" rel="noopener noreferrer"><img src="images/logo-miniInsta.png"
                alt="logo"></a>
    </header>
    <section class="upload">
        <h1>Upload sur Mini Insta !</h1>
        <div class="formulaire">
            <form action="traitement.php" method="POST" enctype="multipart/form-data">
                <label for="prenom">Prénom :</label>
                <input type="text" name="prenom" id="prenom" required>
                <label for="photo">Photo :</label>
                <input type="file" name="photo" id="photo" accept="image/*" required>
                <button type="submit">Envoyer</button>
            </form>
        </div>
    </section>

    <?php
    if (isset($image)) {
        echo '<h2>Image téléchargée :</h2>';
        echo '<img src="' . $imagePath . '" alt="Image téléchargée" style="max-width: 500px; height: auto;">';
    }
    ?>

    <footer>
        <a href="https://github.com/BoualamBillel" target="_blank" rel="noopener noreferrer"><img
                src="images/logo-git-gris.png" alt="logo"></a>
    </footer>
</body>

</html>