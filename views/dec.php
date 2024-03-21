<?php
session_start();

// Supprime toutes les variables de session
session_unset();

// Détruit la session
session_destroy();

header('location:connexion.php');
?>
