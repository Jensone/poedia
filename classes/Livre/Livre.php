<?php 
/**
 * Classe Livre
 * Représentation de Livre
 */

namespace App;

use App\Database;

require_once('./Config/database.php');

class Livre
{
    // Propriétés
    private $id;
    private $titre;
    private $auteur;
    private $categorie;
    private $isbn;
    private $dateParution;
    private $nombrePages;
    private $format;
    private $stock;

    // Constructeur
    public function __construct(Int $id, String $titre, String $auteur, String $categorie, String $isbn, String $dateParution, Int $nombrePages, String $format, Int $stock)
    {
        $this->id = $id;
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->categorie = $categorie;
        $this->isbn = $isbn;
        $this->dateParution = $dateParution;
        $this->nombrePages = $nombrePages;
        $this->format = $format;
        $this->stock = $stock;
    }

    // Méthodes
    public static function afficherUnLivre(Int $id): Array
    {
        $livre = Database::afficherUn('livres', $id);
        return $livre;
    }

    public static function afficherTousLesLivres(): Array
    {
        $db = new Database();
        $query = $db->connect()->prepare("
            SELECT livres.id,
                livres.titre,
                auteurs.nom AS auteur,
                categories.nom AS categorie,
                livres.isbn,
                livres.dateParution,
                livres.nombrePages,
                livres.format,
                livres.stock
            FROM livres
            JOIN auteurs ON livres.idAuteur = auteurs.id
            JOIN categories ON livres.idCategorie = categories.id;
        ");
        $query->execute();
        $livres = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $livres;

        // Utilisez :
        // $livres = Livre::afficherTousLesLivres();
    }

    public static function afficherLesLivresParTitre($titre): Array
    {
        $livreTitre = Database::afficherToutParValeur('livres', 'titre', $titre);
        return $livreTitre;

        // Utilisez : ('hobbit' est un exemple)
        // $livresTitre = Livre::afficherLesLivresParTitre('hobbit');
    }

    // public function afficherLesLivresParAuteur(): Array
    // {

    //     return $livreAuteur;
    // }

    public static function afficherLesLivresParCategorie($categorie): Array
    {
        $db = new Database();
        $query = $db->connect()->prepare("
            SELECT livres.id,
                livres.titre,
                auteurs.nom AS auteur,
                categories.nom AS categorie,
                livres.isbn,
                livres.dateParution,
                livres.nombrePages,
                livres.format,
                livres.stock
            FROM livres
            JOIN auteurs ON livres.idAuteur = auteurs.id
            JOIN categories ON livres.idCategorie = categories.id
            WHERE categories.nom = :categorie;
        ");
        $query->execute(['categorie' => $categorie]);
        $livresCategorie = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $livresCategorie;

        // Utilisez : ('mythe' est un exemple)
        // $livresCategories = Livre::afficherLesLivresParCategorie('mythe');
        // var_dump($livresCategories);
    }

    // public function afficherLesLivresParISBN(): Array
    // {

    //     return $livreISBN;
    // }

    // public function afficherLesLivresParDateParution(): Array
    // {

    //     return $livreDateParution;
    // }

    // public function afficherLesLivresDisponibles(): Array
    // {

    //     return $livreDisponible;
    // }

    public function ajouterLivre(): void
    {

    }

    public function modifierLivre(Int $id): void
    {

    }

    public function supprimerLivre(Int $id): void
    {
        Database::supprimer('livres', $id);
    }

    // Getters et Setters
    public function getId(): Int
    {
        return $this->id;
    }

    public function setId(Int $id): void
    {
        $this->id = $id;
    }

    public function getTitre(): String
    {
        return $this->titre;
    }

    public function setTitre(String $titre): void
    {
        $this->titre = $titre;
    }

    public function getAuteur(): String
    {
        return $this->auteur;
    }

    public function setAuteur(String $auteur): void
    {
        $this->auteur = $auteur;
    }

    public function getCategorie(): String
    {
        return $this->categorie;
    }

    public function setCategorie(String $categorie): void
    {
        $this->categorie = $categorie;
    }

    public function getIsbn(): String
    {
        return $this->isbn;
    }

    public function setIsbn(String $isbn): void
    {
        $this->isbn = $isbn;
    }

    public function getDateParution(): String
    {
        return $this->dateParution;
    }

    public function setDateParution(String $dateParution): void
    {
        $this->dateParution = $dateParution;
    }

    public function getNombrePages(): Int
    {
        return $this->nombrePages;
    }

    public function setNombrePages(Int $nombrePages): void
    {
        $this->nombrePages = $nombrePages;
    }

    public function getFormat(): String
    {
        return $this->format;
    }

    public function setFormat(String $format): void
    {
        $this->format = $format;
    }

    public function getStock(): Int
    {
        return $this->stock;
    }

    public function setStock(Int $stock): void
    {
        $this->stock = $stock;
    }
}
