<?php

session_start();

if(isset($_POST["envoyer"])){
    require_once('./../php/data.php');

    $utilisateur = new Utilisateur();
    $utilisateur->setWithPost($_POST);

    $base = new DataDAO();
    if($base->setInscription($utilisateur)){
        header('location:connexion.php');
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../public/css/reset.css">
    <link rel="stylesheet" href="./../public/css/style.css">
    
    <link rel="stylesheet" href="./../public/css/inscription.css">
    <title>Document</title>
</head>
<body>

 <?php
 include('./partials/header.php');
  ?>
  <main>
    <!--formulaire d'inscription -->
  <section>
        
            <form method="post" id="formulaire">
                <input id="nom" type="text" name="nom" placeholder="Veuillez entrer votre nom">
                <br> <br>
            <input id="Prenom" type="text" name="prenom" placeholder="Veuillez entrer votre Prenom">
                <br> <br>
                <input type="email" name="email" placeholder="Veuillez entrer votre e-mail">
                <br> <br>
                <input type="password" id="pass" name="password" placeholder="Entrez votre mot de passe" required maxlength="12">
                 <br> <br>
                <input id="soumettre" type="submit" name="envoyer" value="Soumettre">
            </form>
           
</section>
  </main>
  <?php
 include('./partials/footer.php');
  ?>
</body>
</html>
