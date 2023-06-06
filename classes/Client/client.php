<?php
/**
 * Classe client
 * Représentation de client
 */


namespace App;

use App\Database;

class Client
{
    //Propriétés
    private $id;
    private $nom;
    private $prenom;
    private $adresse;
    private $email;
    private $telephone;
    private $ville;


    //Comstructeur


    public function __construct(int $id, string $nom, string $prenom,string $adresse,string $email, string  $telephone, string $ville)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->adresse = $adresse;
        $this->email = $email;
        $this->telephone = $telephone;
        $this->ville = $ville;
    }


    

    //Méthodes

    // public function ajouterClient(Int $id):void
    // {

    // }

    // public function modifierClient(Int $id):void
    // {

    // }

    // public function supprimerClient(Int $id):void
    // {

    // }

    // public function passerCommande(Int $id):void
    // {

    // }

    // public function retourCommande(Int $id):void
    // {
        
    // }

    // public function afficherLesClient(): array
    // {

    // }

    // public function afficherUnClient(Int $id): array
    // {

    // }

    // public function afficherCommandes(Int $id): array
    // {

    // }
    
    // public function afficherLivreEmpruntes(Int $id): array
    // {

    // }

    public function getId(): int
{
    return $this->id;
}

public function getNom(): string
{
    return $this->nom;
}

public function getPrenom(): string
{
    return $this->prenom;
}

public function getAdresse(): string
{
    return $this->adresse;
}

public function getEmail(): string
{
    return $this->email;
}

public function getTelephone(): string
{
    return $this->telephone;
}

public function getVille(): int
{
    return $this->ville;
}



public function setId($id): void
{
    $this->id = $id;
}

public function setNom($nom): void
{
    $this->nom = $nom;
}

public function setPrenom($prenom): void
{
    $this->prenom = $prenom;
}

public function setAdresse($adresse): void
{
    $this->adresse = $adresse;
}

public function setEmail($email): void
{
    $this->email = $email;
}

public function setTelephone($telephone): void
{
    $this->telephone = $telephone;
}

public function setVille($ville): void
{
    $this->ville = $ville;
}





}

