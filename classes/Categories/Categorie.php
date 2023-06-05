<?php
/**
 * CLASSES CATEGORIE
 * Representation d'une Categorie
 */

namespace App;

use App\Database;

 class Categorie{

    //Propriété
    private $id;

    private $nom;

    private $description;


    //Méthodes

    public function modifierCategorie($id):void{
        
    }

    public function afficherLesCategories():void{
        Database::afficherTout('categorie');
    }

    public function afficherUneCategorie($id):void{
        Database::afficherUn('categorie',$id);
    }

    public function ajouterCategorie():void{

    }

    public function supprimerCategorie($id):void{

    }

    //getter et setter

    public function getId():Int{
        return $this->id;
    }

    public function setId():Int{
        return $this->id;
    }

    public function getNom():String{
        return $this->nom;
    }

    public function setNom():String{
        return $this->nom;
    }

    public function getDescription():String{
        return $this->description;
    }

    public function setDescription():String{
        return $this->description;
    }
 }
?>