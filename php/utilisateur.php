<?php
class Utilisateur {
    private $nom;
    private $prenom;
    private $email;
    private $password;

    public function __construct() {
        $this->nom = null;
        $this->prenom = null;
        $this->email = null;
        $this->password = null;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setWithPost($post){
        $this->nom = $post['nom'];
        $this->prenom = $post['prenom'];
        $this->email = $post['email'];
        $this->password = $post['password'];
    }

    public static function getWithDataBase($post){
        $user = new Utilisateur();
        $user->nom = $post['nom'];
        $user->prenom = $post['prenom'];
        $user->email = $post['email'];
        $user->password = $post['psswrd'];

        return $user;
    }

}
