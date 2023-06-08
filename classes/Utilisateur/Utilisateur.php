<?php
/**
 * Classe Utilisateur
 * Représentation de Utilisateur
 */

namespace App;

use App\Database;

class Utilisateur
{
    // Propriétés
    
        private $id;
        private $nom;
        private $prenom;
        private $email;
        private $role;
        private $motDePasse;
        
    // Méthodes
    public function __construct(
        int $id,
        string $nom,
        string $prenom,
        string $email,
        string $role,
        string $motDePasse
    )
    {

        $this->id = $id;
    
        $this->nom = $nom;

        $this->prenom = $prenom;
    
        $this->email = $email;
    
        $this->role = $role;
    
        $this->motDePasse = $motDePasse;
     
    }



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

public function getEmail(): string
{
    return $this->email;
}

public function getTel(): string
{
    return $this->role;
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

public function setPrenom($prenom): void
{
    $this->prenom = $prenom;
}

public function setEmail($email): void
{
    $this->email = $email;
}

public function setRole($role): void
{
    $this->role = $role;
}

public function setMotDePasse($motDePasse): void
{
    $this->motDePasse = $motDePasse;
}
}

?>
