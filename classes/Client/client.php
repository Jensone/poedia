<?php
/**
 * Classe client
 * Représentation de client
 */


namespace App;

use App\Database;

class client
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

    public function ajouterClient(Int $id):void
    {

    }

    public function modifierClient(Int $id):void
    {

    }

    public function supprimerClient(Int $id):void
    {

    }

    public function passerCommande(Int $id):void
    {

    }

    public function retourCommande(Int $id):void
    {
        
    }

    public function afficherLesClient(): array
    {

    }

    public function afficherUnClient(Int $id): array
    {

    }

    public function afficherCommandes(Int $id): array
    {

    }
    
    public function afficherLivreEmpruntes(Int $id): array
    {

    }





}

