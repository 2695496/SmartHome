<?php

session_start();
if(!isset($_SESSION['id'])){
    header('location:connexion.php');
    exit();
}

if(!isset($_GET['id']))
{
    header('location:eclairage.php');
    exit();
}

include_once('./../php/data.php');

$data = new DataDAO();
if($data->setAchat($_GET['id'], $_SESSION['id'])){
    $user = $data->find('utilisateur', 'id_utilisateur', $_SESSION['id'])[0];
    $product = $data->find('article', 'id_article', $_GET['id'])[0];

    
}

?>



<!DOCTYPE html>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation d'achat</title>
    <link rel="stylesheet" href="./../public/css/reset.css">
    <link rel="stylesheet" href="./../public/css/style.css">
    <link rel="stylesheet" href="./../public/css/confirmation.css">
</head>

<body>
    <?php include('./partials/header.php'); ?>

    <main>
        <div class="content">
            <h1>Confirmation d'achat</h1>

            <div class="order-details">
                <h2>ID de commande : <?php  echo $data->countAchat() ?></h2>

                <div class="customer-info">
                    <h3>Informations du client</h3>
                    <p><strong>Prénom :</strong><?php  echo $user['prenom'] ?></p>
                    <p><strong>Nom :</strong> <?php  echo $user['nom'] ?></p>
                    <p><strong>Email :</strong> <?php  echo $user['email'] ?></p>
                </div>

                <div class="product-info">
                    <h3>Informations du produit</h3>
                    <p><strong>Détails :</strong><?php  echo $product['detail'] ?></p>
                    <p><strong>Nom :</strong> <?php  echo $product['nom'] ?></p>
                    <p><strong>Prix :</strong> <?php  echo $product['prix'] ?> €</p>
                </div>
            </div>

            <a href="#" class="btn btn_order">Retour à l'accueil</a>
        </div>
    </main>

    <?php include('./partials/footer.php'); ?>
</body>

</html>
