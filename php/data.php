<?php
include_once('utilisateur.php');
class DataDAO
{
    private $sqlClient;

    //Constructeur
   /* public function __construct()
    {
        try {
            $this->sqlClient = new PDO('mysql:host=dbfatouaudrey.mysql.database.azure.com;dbname=smarthome;charset=utf8', 'root', '');
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }*/

    public function __construct()
{
    try {
        $host = 'dbfatouaudrey.mysql.database.azure.com';
        $dbname = 'smarthome';
        $username = 'fatou'; 
        $password = 'Audrey24';

        $this->sqlClient = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
        $this->sqlClient->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    } catch (Exception $e) {
        die($e->getMessage());
    }
}

   
    public function setInscription(Utilisateur $utilisateur)
    {
        $query = 'INSERT INTO utilisateur(nom, prenom, email, psswrd, date_inscription ) VALUES (:nom, :prenom, :email, :psswrd, NOW())';

        $insert = $this->sqlClient->prepare($query);
        $insert->execute([
            'nom' => $utilisateur->getNom(),
            'prenom' => $utilisateur->getPrenom(),
            'email' => $utilisateur->getEmail(),
            'psswrd' => $utilisateur->getPassword()
        ]);
        return true;
    }

    // retourne les elements d'un table
    public function getArticle()
    {
        $query = "SELECT * FROM article";
        $data = $this->sqlClient->prepare($query);
        $data->execute();
        return $data->fetchAll();
    }

    public function setAchat($id_produit, $id_utilisateur)
    {
        $query = 'INSERT INTO achat(id_produit, id_utilisateur, date_achat ) VALUES (:id_produit, :id_utilisateur, NOW())';

        $insert = $this->sqlClient->prepare($query);
        $insert->execute([
            'id_produit' => $id_produit,
            'id_utilisateur' => $id_utilisateur
        ]);
        return true;
    }


 
    // La methode permettant de rechercher des elements dans la base de donnees.
    public function find($table, $colonne, $element): array
    {
        $sqlQuery = "SELECT * FROM $table WHERE $colonne = :$colonne";
        $data = $this->sqlClient->prepare($sqlQuery);
        $data->execute([$colonne => $element]);
        return $data->fetchAll();
    }

  







    public function countAchat()
    {
        $sqlQuery = "SELECT COUNT(*) FROM achat";
    
        $data = $this->sqlClient->prepare($sqlQuery);
        $data->execute();
    
        $resultat = $data->fetchColumn();
    
        return $resultat;
    }
    



}
