<?php
//header
$li = '<li><a href="/smarthome/views/connexion.php">Connexion</a></li>';
if(isset($_SESSION['id'])){
    $li = '<li><a href="/smarthome/views/dec.php">Deconnecte [ '.$_SESSION['prenom']. ' ]</a></li>';

}
?>

<header>
    <h1>Luminusme</h1>
            
            <nav class="menu">
                <ul >
                    <li><a href="/smarthome/">Acceuil</a></li>
                    <li><a href="/smarthome/views/eclairage.php">Eclairage</a></li>
                   <?php echo $li; ?>
                </ul> 
            </nav>
 </header>