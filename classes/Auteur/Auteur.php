<?php
/**
 * Class Auteur 
 * Répresentation de Auteur
 */

 namespace App;


 class Auteur{
    //Propiétés
    private $id;
    private $nom;
    private $prenom;
    private $dateNaissance;
    private $nationalite;
    private $biographi; 

     public function __construct(int $Id, string $nom,string $prenom, string $dateNaissance, string $nationalite,string $biographi )
    {
        $this->nom =$nom;
        $this->prenom =$prenom;
        $this->dateNaissance =$dateNaissance;
        $this->nationalite =$nationalite;
        $this->biographi =$biographi;
    }
    //Getters
    
    public function getNom():string
    {
       return $this -> nom;
    } 
    public function getPrenom():string
    {
      return $this -> prenom;
        
    }
    public function getdateNaissance():string
    {
      return $this -> dateNaissance;
        
    }
    public function getnationalite():string
    {
      return $this -> nationalite;
        
    }
    public function getbiographi():string
    {
      return $this -> biographi;
        
    }
    //setters
    public function setNom($nom):void
    {
        $this ->nom=$nom;
    } 
    public function setPrenom($prenom):void
    {
       $this ->prenom=$prenom;
        
    }
    public function setdateNaissance($dateNaissance):void
    {
       $this ->dateNaissance=$dateNaissance;
        
    }
    public function setnationalite($nationalite):void
    {
       $this ->nationalite=$nationalite;
        
    }
    public function setbiographi($biographi):void
    {
       $this ->biographi=$biographi;
        
    }
 }

 