<?php
/**
 * Classe Database 
 * Cette classe représente la connexion à la base de données
 */

namespace App;

class Database
{
    // Connexion
    public static function connect(): \PDO
    {
          //Variables de connexion
          $host = getenv('HOST');
          $dbname = getenv('DBNAME');
          $user = getenv('USER');
          $password = getenv('PASSWORD');

        try {
            $pdo = new \PDO('mysql:host=localhost;dbname=bibl', 'root', '',);
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (\PDOException $e) {
            echo 'Erreur de connexion : ' . $e->getMessage();
        }
    }
    //Récupèrer un item
    public static function afficherUn(String $table, Int $id):Array
    {
        $pdo = self::connect();
        $query = $pdo->prepare("SELECT * FROM $table WHERE id = :id");
        $qurey = $query->execute();
        $item = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $item;
    }

    //Récupèrer des items
   
    public static function afficherTout(String $table):Array
    {
        $pdo = self::connect();
        $query = $pdo->prepare("SELECT * FROM $table");
        $qurey = $query->execute();
        $item = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $item;
    }
    //Récupèrer un item par une valeur
    public static function afficherUnParValeur(String $table, String $valeur):Array
    {
        $pdo = self::connect();
    $query = $pdo->prepare("SELECT * FROM $table WHERE (CONVERT($valeur USING utf8)LIKE %$valeur%)");
        $qurey = $query->execute();
        $item = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $item;
    }
    


}
