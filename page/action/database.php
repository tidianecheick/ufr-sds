<?php  
try {
    session_start();
$bdd = new PDO('mysql:host=localhost;dbname=ufr_sds', 'root', ''); 
echo'';
} catch (Exception $e) {
die('Erreur : ' . $e->getMessage());
}








?>