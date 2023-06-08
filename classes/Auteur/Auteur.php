<?php
/**
 * Class Auteur 
 * Répresentation de Auteur
 */

 namespace App;


 class Auteur{
    //Propiétés
    private $id;
    private $nom;
    private $prenom;
    private $dateNaissance;
    private $nationalite;
    private $biographi; 

     public function __construct(int $Id, string $nom,string $prenom, string $dateNaissance, string $nationalite,string $biographi )
    {
        $this->nom =$nom;
        $this->prenom =$prenom;
        $this->dateNaissance =$dateNaissance;
        $this->nationalite =$nationalite;
        $this->biographi =$biographi;
    }
    //Getters
    
    public function getNom():string
    {
       return $this -> nom;
    } 
    public function getPrenom():string
    {
      return $this -> prenom;
        
    }
    public function getdateNaissance():string
    {
      return $this -> dateNaissance;
        
    }
    public function getnationalite():string
    {
      return $this -> nationalite;
        
    }
    public function getbiographi():string
    {
      return $this -> biographi;
        
    }
    //setters
    public function setNom($nom):void
    {
        $this ->nom=$nom;
    } 
    public function setPrenom($prenom):void
    {
       $this ->prenom=$prenom;
        
    }
    public function setdateNaissance($dateNaissance):void
    {
       $this ->dateNaissance=$dateNaissance;
        
    }
    public function setnationalite($nationalite):void
    {
       $this ->nationalite=$nationalite;
        
    }
    public function setbiographi($biographi):void
    {
       $this ->biographi=$biographi;
        
    }

    //Recupérer des item
public static function Affichertoutaut($id): array
{
    $pdo = Database::connect();
    $query = $pdo->prepare("SELECT livres.id, `titre`, `idAuteur`, `idCategorie`, `isbn`, `dateParution`, `nombrePages`, `format`, `stock`,auteurs.nom FROM `livres`
    LEFT JOIN auteurs ON livres.idAuteur = auteurs.id
    WHERE livres.idAuteur=$id");
    $query->execute();
    $item = $query->fetchAll(\PDO::FETCH_ASSOC);
    return $item;
}
// supprimer un item 
public static function supprimerun(string $table, int $id)
{
    $pdo = Database::connect();
    $query = $pdo->prepare("DELETE FROM $table WHERE id=:id");
    $query->execute(array('id' => $id));
    header('location:./auteur.php?all');
}
public static function ajoutAteur(): void
{
    // On se connecte à la bdd
    $pdo = Database::connect();

    // On prépare la requête d'insertion
    $query = $pdo->prepare(
        'INSERT INTO auteurs ( nom, prenom, dateNaissance,nationalite, biographie) VALUES ( :nom, :prenom,:dateNaissance, :nationalite, :biographie )'
    );
    // On fait matcher les valeurs du formulaire avec les paramètres de la requête
    $query->bindValue(':nom', $_POST['nom'], \PDO::PARAM_STR);
    $query->bindValue(':prenom', $_POST['prenom'], \PDO::PARAM_STR);
    $query->bindValue(':dateNaissance', $_POST['dateNaissance'], \PDO::PARAM_STR);
    $query->bindValue(':nationalite', $_POST['nationalite'], \PDO::PARAM_STR);
    $query->bindValue(':biographie', $_POST['biographie'], \PDO::PARAM_INT);

    // On exécute la requête
    $query->execute();

    header('Location: /index.php');
}
// la fonction qui permet la modification des auteur
public static function modifierauteur()
{
    // On se connecte à la bdd
    $pdo =  Database::connect();
    // On prépare la requête d'insertion
    $query = $pdo->prepare("UPDATE auteurs SET nom=:nom,prenom=:prenom,dateNaissance=:dateNaissance,nationalite=:nationalite,biographie=:biographie  WHERE id=:id ");
    // On fait matcher les valeurs du formulaire avec les paramètres de la requête
    $query->bindParam(':id', $_POST['id'], \PDO::PARAM_INT);
    $query->bindParam(':nom', $_POST['nom'], \PDO::PARAM_STR);
    $query->bindParam(':prenom', $_POST['prenom'], \PDO::PARAM_STR);
    $query->bindParam(':dateNaissance', $_POST['dateNaissance'], \PDO::PARAM_STR);
    $query->bindParam(':nationalite', $_POST['nationalite'], \PDO::PARAM_STR);
    $query->bindParam(':biographie', $_POST['biographie'], \PDO::PARAM_STR);

    $query->execute();

    header('location:index.php');

}
 }

 