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
    $host = 'localhost';
    $dbname = 'poedia';
    $user = 'root';
    $password = '';
    try {
      $pdo = new \PDO('mysql:host=' . $host . ';dbname=' . $dbname . ';charset=utf8', $user, $password,);
      $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
      return $pdo;
    } catch (\PDOException $e) {
      echo 'Erreur de connexion : ' . $e->getMessage();
    }
  }

  // Recupérer un item
  public static function Afficherun(string $table, int $id): array
  {
    $pdo = self::connect();
    $query = $pdo->prepare("SELECT * FROM $table WHERE id=:id");
    $query->execute(array('id' => $id));
    $item = $query->fetch(\PDO::FETCH_ASSOC);
    return $item;
  }
  //Recupérer des item
  public static function Affichertout(string $table): array
  {
    $pdo = self::connect();
    $query = $pdo->prepare("SELECT * FROM $table");
    $query->execute();
    $item = $query->fetchAll(\PDO::FETCH_ASSOC);
    return $item;
  }
  //Recupérer des item
  public static function Affichertoutaut(int $id): array
  {
    $pdo = self::connect();
    $query = $pdo->prepare("SELECT l.titre,l.nombrePages,l.id,l.idAuteur,l.idCategorie,c.nom FROM livres l  JOIN (SELECT * FROM categories)c on l.idCategorie=c.id WHERE l.idAuteur=$id");
    $query->execute();
    $item = $query->fetchAll(\PDO::FETCH_ASSOC);
    return $item;
  }
  // supprimer un item 
  public static function supprimerun(string $table, int $id)
  {
    $pdo = self::connect();
    $query = $pdo->prepare("DELETE FROM $table WHERE id=:id");
    $query->execute(array('id' => $id));
    header('location:./auteur.php?all');
  }
  // Récupere un item par une valeur
  public static function Afficherparvaleur(string $table, string $valeur)
  {
    $pdo = self::connect();
    $query = $pdo->prepare("SELECT * FROM $table WHERE (CONVERT($valeur USING utf8)lIKE %$valeur% ");
    $query->execute();
    $query->fetch(\PDO::FETCH_ASSOC);
    return $query;
  }
}
