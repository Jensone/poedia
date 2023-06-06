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
        // Variables de connexion
        $host = 'localhost';
        $dbname = 'poedia';
        $user = 'root';
        $password = 'root';

        try {
            $pdo = new \PDO('mysql:host=' . $host . ';dbname=' . $dbname . ';charset=utf8', $user, $password);
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (\PDOException $e) {
            echo 'Erreur de connexion : ' . $e->getMessage();
        }
    }

    // Récupérer un item
    public static function afficherUn(String $table, Int $id): Array
    {
        $pdo = self::connect();
        $query = $pdo->prepare("SELECT * FROM $table WHERE id = :id");
        $query->execute(['id' => $id]);
        $item = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $item;
    }

    // Récupérer des items
    public static function afficherTout(String $table): Array
    {
        $pdo = self::connect();
        $query = $pdo->prepare("SELECT * FROM $table");
        $query->execute();
        $items = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $items;
    }

    // Récupérer des items par une valeur
    public static function afficherToutParValeur(String $table, String $colonne, String $valeur): Array
    {
        $pdo = self::connect();
        $query = $pdo->prepare("SELECT * FROM $table WHERE $colonne LIKE '%$valeur%'");
        $query->execute();
        $item = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $item;
    }

    // Supprimer un item
    public static function supprimer(String $table, Int $id): void
    {
        $pdo = self::connect();
        $query = $pdo->prepare("DELETE FROM $table WHERE id = :id");
        $query->execute(['id' => $id]);
    }

}
