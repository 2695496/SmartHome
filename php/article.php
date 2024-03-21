<?php

class Article{
    private $id;
    private $nom;
    private $prix;
    private $image;
    private $detail;

    public function __construct($id, $nom, $prix, $image, $detail){
        $this->id = $id;
        $this->nom = $nom;
        $this->prix = $prix;
        $this->image = $image;
        $this->detail = $detail;
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getNom(){
        return $this->nom;
    }

    public function setNom($nom){
        $this->nom = $nom;
    }

    public function getPrix(){
        return $this->prix;
    }

    public function setPrix($prix){
        $this->prix = $prix;
    }

    public function getImage(){
        return $this->image;
    }

    public function setImage($image){
        $this->image = $image;
    }

    public function getDetail(){
        return $this->detail;
    }

    public function setDetail($detail){
        $this->detail = $detail;
    }
    
}
