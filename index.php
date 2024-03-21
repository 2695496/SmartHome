<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/reset.css">
    <link rel="stylesheet" href="./public/css/style.css">
    <title>Document</title>
</head>
<body>
 <?php
 include('./views/partials/header.php');
  ?>
  <main>
  <section class="acceuil">
        <!---- Le Titre -->
        <h1 id = "titre"> SMART HOME </h1>
        <h4 id="slogan">Construisons votre futur</h4>
        <!---La description des produits-->
        <p id="contexte">SMART HOME vous propose la gestion manuelle ou automatique
           <br> de votre habitation afin de vous garantir une gestion optimale 
            de votre <br> maison et surtout de votre énergie là où elle n'est
            pas utile, et vous <br> permets de visualiser et commander à distance !!
        </p>
       <!-- Image -->
        <img id = "image" src="./public/image/Maison_intelligente.jpg">
        
        
        <h3> N'hésiter pas de nous faire part en quelque ligne vos attentes :</h3>
         <!--Le commentaire pour les besoins du client -->
             <form id="comment">
                 <textarea cols="30" rows="20"></textarea>
             </form>
             <br>
         <form id="formulaire">
             <input id="nom" type="text" name=" nom" placeholder="Veuillez entrer votre nom">
             <br> <br>
         <input id="Prenom" type="text" first_name=" Prenom" placeholder="Veuillez entrer votre Prenom">
             <br> <br>
             <input type="email" placeholder="Veuillez entrer votre e-mail">
             <br> <br>
             <input type="tel" id="phone" name="phone" placeholder="Entrez votre numéro" 
              pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required maxlength="12">
              <br> <br>
             <input id="soumettre" type="submit" value="Soumettre">
         </form>
           
</section>
  </main>
  <?php
 include('./views/partials/footer.php');
  ?>
</body>
</html>