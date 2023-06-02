<?php

/**
 * Classe Utilisateur
 * Représentation de Utilisateur
 */

namespace App;

class Utilisateur
{
    // Propriétés
    
        private $id;
        private $nom;
        private $email;
        private $tel;
        private $motDePasse;
        
    // Méthodes
    public function __construct(
        int $id,
        string $nom,
        string $email,
        string $tel,
        string $motDePasse
    )
    {

        $this->id = $id;
    
        $this->nom = $nom;
    
        $this->email = $email;
    
        $this->tel = $tel;
    
        $this->motDePasse = $motDePasse;
     
    }


    public function seConnecter($id,$nom,$email,$tel,$motDePasse): void
    {
        
    }
    
    public function seDeconnecter($id,$nom,$email,$tel,$motDePasse): void
    {
        
    }
    
    public function creerCompte($id,$nom,$email,$tel,$motDePasse): void
    {
        
    }
    
    public function editCompte($id,$nom,$email,$tel,$motDePasse): void
    {
        
    }
    
    public function supprCompte($id,$nom,$email,$tel,$motDePasse): void
    {
        
    }


    public function getId(): int
{
    return $this->id;
}

public function getNom(): string
{
    return $this->nom;
}

public function getEmail(): string
{
    return $this->email;
}

public function getTel(): string
{
    return $this->tel;
}

public function getMotDePasse(): string
{
    return $this->motDePasse;
}


public function setId($id): void
{
    $this->id = $id;
}

public function setNom($nom): void
{
    $this->nom = $nom;
}

public function setEmail($email): void
{
    $this->email = $email;
}

public function setTel($tel): void
{
    $this->tel = $tel;
}

public function setMotDePasse($motDePasse): void
{
    $this->motDePasse = $motDePasse;
}
}

?>
