<?php
/**
 * @Classe Commande
 * Représentation d'une Commande
 */

namespace App;

use App\Database;

require_once('./Database/Database.php');

class Commande
{
    // Propriétés
    private $id;
    private $client;
    private $livre;
    private $dateDebut;
    private $dateRetour;
    private $statut;

    // Constructeur
    public function __construct(int $id, string $client, string $livre, string $dateDebut, string $dateRetour, bool $statut)

    {
        $this->id = $id;
        $this->client = $client;
        $this->livre = $livre;
        $this->dateDebut = $dateDebut;
        $this->dateRetour = $dateRetour;
        $this->statut = $statut;
    }

    // Méthodes (Get et Setter)

    public static function afficherUneCommande(Int $id): Array
    {
        $commande = Database::afficherUn('commandes', $id);
        return $commande;
    }

    public static function afficherUn(Int $id): Array
    {
        $livre = Database::afficherUn('livres', $id);
        return $livre;
    }

    public function getClient(): string
    {
        return $this->client;
    }

    public function getLivre(): string
    {
        return $this->livre;
    }

    public function getDateDebut(): int
    {
        return $this->dateDebut;
    }

    public function getDateRetour(): int
    {
        return $this->dateRetour;
    }

    public function getStatut(): bool
    {
        return $this->statut;
    }
    
}