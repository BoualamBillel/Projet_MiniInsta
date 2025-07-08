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
    $autorise = array('jpg', 'jpeg', 'png', 'gif', 'webp', 'avif');

    if (in_array($extensionFichier, $autorise)) {
        if ($fileSize < 25000000) {
            $uploadDir = 'uploads/';
            $destination = $uploadDir . $nouveauFichierNom;
            if (move_uploaded_file($fileTmpName, $destination)) {
                header('Location: redirection.php');
                exit;
            }
        } else {
            echo "
                <div class='error-message'>
                    <h2>Erreur de téléchargement</h2>
                    <p>La taille de l'image dépasse la limite autorisée (25 MB).</p>
                    <p><a href='upload.php'><button class='btn-back'>Retour à l'upload</button></a></p>
                </div>
            ";
        }
    } else {
        echo "
            <div class='error-message'>
                <h2>Erreur de format</h2>
                <p>Seuls les formats JPEG, JPG, PNG et GIF sont autorisés.</p>
                <p><a href='upload.php'><button class='btn-back'>Retour à l'upload</button></a></p>
            </div>
        ";
    }
}
?>
