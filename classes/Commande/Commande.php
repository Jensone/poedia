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
        $this->client = $client['nom'] ['prenom'];
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

public static function afficherToutesLesCommandes(): Array
{
    $db = new Database();
    $query = $db->connect()->prepare("
        SELECT commandes.id,
            clients.id AS clientId,
            livres.id AS livreId,
            commandes.dateDebut,
            commandes.dateRetour,
            commandes.statut
        FROM commandes
        JOIN clients ON commandes.idClient = clients.id
        JOIN livres ON commandes.idLivre = livres.id;
    ");
    $query->execute();
    $commandes = $query->fetchAll(\PDO::FETCH_ASSOC);
    return $commandes;

    // Utilisez :
  
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