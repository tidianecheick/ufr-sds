<?php  
try {
   
$bdd = new PDO('mysql:host=localhost;dbname=ufr_sds', 'root', ''); 
} catch (Exception $e) {
die('Erreur : ' . $e->getMessage());
}








?>