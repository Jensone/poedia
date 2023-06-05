<?php
/**
 * Classe Database
 * 
 * Cette classe représente la connexion à la base de données
 * 
 * @package BiblioApp
 * @subpackage Database
 */

namespace App;

class Database
{
    // Connexion
    public static function connect(): \PDO
    {
        $host = getenv('HOST');
        $dbname = getenv('DBNAME');
        $user = getenv('USER');
        $password = getenv('PASSWORD');
        try {
            $pdo = new \PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8,'.$user, $password);
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (\PDOException $e) {
            echo 'Erreur de connexion : ' . $e->getMessage();
        }
    }

    //Récupérer un item
    public static function afficherUn(String $table, Int $id):Array
    {

        $pdo = self::connect();
        $query = $pdo->prepare("SELECT * FROM $table WHERE id = :id");
        $query->execute(['id'=>$id]);
        $items = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $items;
    }
    //Récupérer des item
    public static function afficherTout(String $table):Array
    {

        $pdo = self::connect();
        $query = $pdo->prepare("SELECT * FROM $table");
        $query->execute();
        $items = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $items;
    }
    //Récupérer un item par une valeur
    public static function afficherUnParValeur(String $table, String $valeur):Array
    {

        $pdo = self::connect();
        $query = $pdo->prepare("SELECT * FROM $table WHERE (CONVERT($valeur USING utf8) LIKE %$valeur%");
        $query->execute();
        $items = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $items;
    }

    //Supprimer un item 
    public static function supprimer(Int $id, String $table){
        $pdo = self::connect();
        $query = $pdo->prepare("DELETE FROM $table WHERE id = :id");
        $query->execute(['id'=>$id]);
    }

}
