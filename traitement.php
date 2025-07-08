<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fileTmpName = $_FILES['photo']['tmp_name'];
    $fileName = $_FILES['photo']['name'];
    $fileSize = $_FILES['photo']['size'];
    $fileError = $_FILES['photo']['error'];
    $fileType = $_FILES['photo']['type'];

    $auteur = $_POST['prenom'];
    $extensionFichier = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    $date = date("YmdHis");
    $nouveauFichierNom = $date . '-' . $auteur . '-' . basename($fileName);
    $autorise = array('jpg', 'jpeg', 'png', 'gif');

    if (in_array($extensionFichier, $autorise)) {
        if ($fileSize < 25000000) {
            $uploadDir = 'uploads/';
            $destination = $uploadDir . $nouveauFichierNom;
            if (move_uploaded_file($fileTmpName, $destination)) {
                header('Location: redirection.php');
                exit;
            }
        } else {
            echo "La taille maximale d'une photo est de 25mb !";
        }
    } else {
        echo "Seul les formats JPEG, JPG, GIF et PNG sont autorisés";
    }
}
?>