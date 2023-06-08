<?php

namespace App;

use App\Database;
use App\Utilisateur;
use App\UserController;

require_once './classes/Utilisateur/Utilisateur.php';
require_once './partials/_connectUser.php';

if (isset($_POST['addUser'])) {
    $book = new Utilisateur(
        $_POST['id'],
        $_POST['nom'],
        $_POST['prenom'],
        $_POST['email'],
        $_POST['role'],
        $_POST['motDePasse']
    );
    
    $persist = UserController::addUser($utilisateurs);
}