<?php

use App\Database;

require_once './Database/Database.php';
$auteurs = Database::Affichertout('auteurs');

$categories = Database::Affichertout('categories');
//Recupérer des item
function Affichertoutaut($id): array
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
function supprimerun(string $table, int $id)
{
    $pdo = Database::connect();
    $query = $pdo->prepare("DELETE FROM $table WHERE id=:id");
    $query->execute(array('id' => $id));
    header('location:./auteur.php?all');
}
function ajoutAteur(): void
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
function modifierauteur()
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
// on ajouter les auteur apres une verifisation  
if (isset($_POST['action']) && $_POST['action'] == 'Ajouter') {
    ajoutAteur();
}
// on modifie les auteur apres une verifisation  
if (isset($_POST['action']) && $_POST['action'] == 'Modifier') {
    modifierauteur();

}
// on affiche les auteur apres une verifisation  
if (isset($_GET['detaille'])) {
    $id = $_GET['detaille'];
    $auteur = Database::Afficherun('auteurs', $id);
    $livreauts = Affichertoutaut($id);
    print_r(count($livreauts));
}
// on recupert les donnée des auteurs apres une verifisation  
if (isset($_GET['modifier'])) {
    $id = $_GET['modifier'];
    $auteur = Database::Afficherun('auteurs', $id);
    $livreauts = Affichertoutaut($id);
}
// on supprime les donnée des auteurs apres une verifisation  
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    supprimerun('auteurs', $id);
}
include_once 'partials/_head.php'; ?>

<section style="background: linear-gradient(112.84deg, #46BAEB 0.33%, #AF2CFF 38.23%, #F790AF 65.22%, #C1ABFF 100%)">


    <?php include_once 'partials/_navigation.php'; ?>
</section>
// on affiche tous donnée des auteurs apres une verifisation  
<?php if (isset($_GET['all'])) { ?>
    <?php include_once 'partials/_auteurtout.php'; ?>
<?php } ?>
// on affiche les dettail des auteurs apres une verifisation  
<?php if (isset($_GET['detaille'])) { ?>

    <?php include_once 'partials/_auteurdetaille.php'; ?>

<?php } ?>
// on inclut le formulaire d'ajout et de mofication  des auteurs apres une verifisation  

<?php if (isset($_GET['add']) || isset($_GET['modifier'])) { ?>
    <?php include_once 'partials/_formauteur.php'; ?>
<?php } ?>

<?php include_once 'partials/_footer.php'; ?>