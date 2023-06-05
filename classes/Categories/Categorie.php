<?php
/**
 * CLASSES categories
 * Representation d'une categories
 */

namespace App;

use App\Database;

 class categorie{

    //Propriété
    private $id;

    private $nom;

    private $description;


    //Méthodes

    public function modifiercategorie($id):void{
        
    }

    public function afficherLescategories():void{
        Database::afficherTout('categories');
    }

    public function afficherUnecategorie($id):void{
        Database::afficherUn('categories',$id);
    }

    public function ajoutercategorie():void{

    }

    public function supprimercategorie($id):void{
        Database::supprimer($id,'categories');
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