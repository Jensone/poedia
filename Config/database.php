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
    // connexion
    public static function connect(): \PDO
    {
        $host=getenv('HOST');
        $dbname=getenv('DBNAME');
        $user=getenv('USER');
        $password=getenv('PASSWORD');
        try {
            $pdo = new \PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8'.$user,'',);
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (\PDOException $e) {
            echo 'Erreur de connexion : ' . $e->getMessage();
        }
    }

    // Recupérer un item
    public static function Afficherun(string $table, int $id): Array{
      $pdo=self::connect();
      $query=$pdo->prepare("SELECT * FROM $table WHERE id=:id");
      $query->execute(array('id'=>$id));
      $item=$query->fetch(\PDO::FETCH_ASSOC);
      return $item;

    }
    //Recupérer des item
    public static function Affichertout(string $table, int $id):Array{
        $pdo=self::connect();
        $query=$pdo->prepare("SELECT * FROM $table WHERE id=:id");
        $query->execute(array('id'=>$id));
        $item=$query->fetch(\PDO::FETCH_ASSOC);
      return $item;
  
      }
    // Récupere un item par une valeur
    public static function Afficherparvaleur( string $table, string $valeur,){
        $pdo=self::connect();
        $query=$pdo->prepare("SELECT * FROM $table WHERE (CONVERT($valeur USING utf8)lIKE %$valeur% ");
        $query->execute();
        $query->fetch(\PDO::FETCH_ASSOC);
        return $query;
  
      }
   
}
