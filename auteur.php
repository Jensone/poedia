<?php

use App\Database;
use App\Auteur;

require_once './Database/Database.php';
require_once './classes/Auteur/Auteur.php';
$auteurs = Database::Affichertout('auteurs');

$categories = Database::Affichertout('categories');

// on ajouter les auteur apres une verifisation  
if (isset($_POST['action']) && $_POST['action'] == 'Ajouter') {
    Auteur::ajoutAteur();
}
// on modifie les auteur apres une verifisation  
if (isset($_POST['action']) && $_POST['action'] == 'Modifier') {
    Auteur::modifierauteur();

}
// on affiche les auteur apres une verifisation  
if (isset($_GET['detaille'])) {
    $id = $_GET['detaille'];
    $auteur = Database::Afficherun('auteurs', $id);
    $livreauts = Auteur::Affichertoutaut($id);
}
// on recupert les donnée des auteurs apres une verifisation  
if (isset($_GET['modifier'])) {
    $id = $_GET['modifier'];
    $auteur = Database::Afficherun('auteurs', $id);
    $livreauts = Auteur::Affichertoutaut($id);
}
// on supprime les donnée des auteurs apres une verifisation  
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    Auteur::supprimerun('auteurs', $id);
}
include_once 'partials/_head.php'; ?>

<section style="background: linear-gradient(112.84deg, #46BAEB 0.33%, #AF2CFF 38.23%, #F790AF 65.22%, #C1ABFF 100%)">
    <?php include_once 'partials/_navigation.php'; ?>
</section>
<?php if (isset($_GET['all'])) { ?>
    <?php include_once 'partials/_auteurtout.php'; ?>
<?php } ?>
<?php if (isset($_GET['detaille'])) { ?>
    <?php include_once 'partials/_auteurdetaille.php'; ?>
<?php } ?>

<?php if (isset($_GET['add']) || isset($_GET['modifier'])) { ?>
    <?php include_once 'partials/_formauteur.php'; ?>
<?php } ?>

<?php include_once 'partials/_footer.php'; ?>