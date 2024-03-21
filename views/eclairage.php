<?php

session_start();

include_once './../php/data.php';
$data = new DataDAO();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eclairage</title>
    <link rel="stylesheet" href="./../public/css/reset.css">
    <link rel="stylesheet" href="./../public/css/style.css">
    <link rel="stylesheet" href="./../public/css/eclairage.css">
   
</head>

<body>
    <?php
    include('./partials/header.php');
     ?>
     <main>
            <div>
                <div class="content">
                        <?php 
                            foreach (($data->getArticle()) as $item){
                        ?>
                        <div class="container">
                            <div class="thumbnail">
                                <img src="./../public/image/<?php echo $item['image'] ?>" alt="La lampe sur pied  " id="image1">
                                <div class="tex1">
                                    <div >
                                    <?php echo $item['prix'] ?>
                                    </div>
                                    <div class="caption">
                                        <h2><?php echo $item['nom'] ?></h2>
                                        <p><?php echo $item['detail'] ?></p>
                                        <a href="./confirmation.php?id=<?php echo $item['id_article']?>" class="btn btn_order" role="button"><span
                                                class="glyphicon glyphicon-shopping-cart"></span>Acheter</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php 
                            
                    
                            }

                        ?>

                    

                </div>
            </div>
     </main>
     <?php
    include('./partials/footer.php');
     ?>
    


</body>

</html>