<?php

namespace App;

use App\Database;
use App\Utilisateur;

include_once './Database/Database.php';
include_once './classes/Utilisateur/Utilisateur.php';

class UserController extends Utilisateur
{

public static function addUser(): void
    {

        $pdo = Database::connect();

        $query = $pdo->prepare(
            'INSERT INTO utilisateurs (nom, prenom, email, password, role) VALUES ( :nom, :prenom, :email, :password, :role)');
        
        $query->bindValue(':nom', $_POST['nom'], \PDO::PARAM_STR);
        $query->bindValue(':prenom', $_POST['prenom'], \PDO::PARAM_STR);
        $query->bindValue(':email', $_POST['email'], \PDO::PARAM_STR);
        $query->bindValue(':password', $_POST['password'], \PDO::PARAM_STR);
        $query->bindValue(':role', $_POST['role'], \PDO::PARAM_STR);       

        $query->execute();

        header('Location: /profil.php');
    }

    public static function deleteUser($id)
    {
        $pdo = Database::connect();

        $query = $pdo->prepare('DELETE FROM utilisateurs WHERE id = :id');

        $query->bindValue(':id', $id, \PDO::PARAM_INT);

        $query->execute();

        header('Location: /profil.php');
    }


}


    ?>

