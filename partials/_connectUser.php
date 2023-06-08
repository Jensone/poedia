<?php

use App\Database;

require_once './Database/Database.php';

if (isset($_POST['submit'])) {
    $nom = isset($_POST['nom']) ? $_POST['nom'] : "";
    $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : "";
    $email = isset($_POST['email']) ? $_POST['email'] : "";
    $motdepasse = isset($_POST['motdepasse']) ? $_POST['motdepasse'] : "";

    if (!empty($nom) && !empty($prenom) && !empty($email) && !empty($motdepasse)) {
        
        header('Location: projet-book-app/profil.php');

    } else {
        echo "Veuillez remplir tous les champs.";
    }
}

?>
