<?php
/**
 * @Classe Commande
 * Représentation d'une Commande
 */

namespace App;

use App\Database;

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