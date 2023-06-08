<?php

namespace App;

use App\Database;
use App\Utilisateur;
use App\UserController;

include_once '../classes/Utilisateur/Utilisateur.php';
include_once '../partials/_connectUser.php';

if (isset($_POST['addUser'])) {
    $utilisateur = new Utilisateur(
        $_POST['id'],
        $_POST['nom'],
        $_POST['prenom'],
        $_POST['email'],
        $_POST['password'],
        $_POST['role']
    );
    
    $persist = UserController::addUser($utilisateur);
}