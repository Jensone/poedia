<?php
/**
 * Classe Database
 * 
 * Cette classe représente la connexion à la base de données
 * 
 * @package BiblioApp
 * @subpackage Database
 */

namespace BiblioApp;

class Database
{
    // Méthodes (fonctions)
    public static function connect(): \PDO
    {
        try {
            $pdo = new \PDO('mysql:host=localhost;dbname=bibl', 'root', '',);
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (\PDOException $e) {
            echo 'Erreur de connexion : ' . $e->getMessage();
        }
    }
}
