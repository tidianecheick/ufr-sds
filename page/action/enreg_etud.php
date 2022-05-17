<?php
require('database.php');

 $host = 'localhost';
 $dbname = 'test';
 $username = 'root';
 $password = '';


// if(isset($_POST['enregistre'])){

  // récupérer les valeurs 
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $datedenaissance = $_POST['date_de_naissance'];
  $email = $_POST['email'];
  $telephone = $_POST['telephone'];
  $nomtuteur = $_POST['tuteur'];

  // Requête mysql pour insérer des données
  $sql = "INSERT INTO etudiant  (nom, prenom,date_de_naissance,email,telephone,tuteur) VALUES (?,?,?,?,?,?)";
   $res = $bdd->prepare($sql);
  $exec = $res->execute(array("$nom","$prenom","$datedenaissance","$email",$telephone,"$nomtuteur" ));

  // vérifier si la requête d'insertion a réussi
  if($exec){
    echo 'Données insérées';
  }else{
    echo "Échec de l'opération d'insertion";
  }
// }

?>

  

