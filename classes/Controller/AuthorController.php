<?php
// require_once __DIR__.'/Config/database.php';

class Database
{
    // Méthodes (fonctions)
    public static function connect(): \PDO
    {
        try {
            $pdo = new \PDO('mysql:host=localhost;dbname=bible', 'root', '',);
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (\PDOException $e) {
            echo 'Erreur de connexion : ' . $e->getMessage();
        }
    }
}

 function getAll(){
        // On se connecte à la bdd
        $pdo = Database::connect();

        // On prépare la requête de sélection
        $query = $pdo->prepare('SELECT * FROM authors ORDER BY id DESC');

        // On exécute la requête
        $query->execute();

        // On récupère les données
        $result = $query->fetchAll(\PDO::FETCH_ASSOC);

        // On retourne les données
        return $result;
    }


    print_r(getAll())
?>

