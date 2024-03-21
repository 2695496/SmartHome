
<!-- Se connecter à la session_start -->
<?php
session_start();

include_once('./../php/data.php');

$err = '';
if(isset($_POST['send'])){

    $data = new DataDAO();
    $elememnt = $data->find('utilisateur', 'email', $_POST['email']);
    if(0 !== count($elememnt)){
       
        $elememnt = $elememnt[0];
        if($elememnt['psswrd'] === $_POST['pass']){
           $_SESSION['id'] = $elememnt['id_utilisateur'] ;
           $_SESSION['prenom'] = $elememnt['prenom']. ' ' . $elememnt['nom'] ;
            header('location:eclairage.php');
            exit();

        }else{
            $err = 'Mot de passe invalide';
        }
    }else{
        $err = 'Adresse electronique invalide';
    }
}

?>


<!DOCTYPE html>
<html lang="en">
    <!-- Le lien de la connexion -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../public/css/reset.css">
    <link rel="stylesheet" href="./../public/css/style.css">
    <link rel="stylesheet" href="./../public/css/connexion.css">
    <title>Document</title>
</head>
<body>

  <main>
  <section>
    <!--formulaire pour la connexion -->
        
            <form method="post" id="formulaire">
               <p><?php echo $err?></p>
                <input type="email" name="email" placeholder="Veuillez entrer votre e-mail">
                <br> <br>
                <input type="password" id="pass" name="pass" placeholder="Entrez votre mot de passe" 
                required maxlength="12">
                 <br> <br>
                <input id="soumettre" name="send" type="submit" value="Soumettre">
               <p>Si vous n'avez pas de compte Veuillez cliquez <a href="./incription.php">ici</a></p>
            </form>
           
</section>
  </main>

</body>
</html>