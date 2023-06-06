<?php
/**
 * CLASSES categories
 * Representation d'une categories
 */

namespace App;

use App\Database;
require_once './Config/database.php';

 class categorie{

    //Propriété
    private $id;

    private $nom;

    private $description;


    //Méthodes

    public static function modifiercategorie($id):void{
        
    }

    public static function afficherLescategories(){
        Database::afficherTout('categories');
    }

    public static function afficherUnecategorie($id):Array{
       return Database::afficherUn('categories',$id);
    }

    // public function static ajoutercategorie():void{

    // }

    public static function supprimercategorie($id):void{
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