  


<?php
require('action/database.php');

 $host = 'localhost';
 $dbname = 'test';
 $username = 'root';
 $password = '';


if(isset($_POST['envoyer'])){

  // récupérer les valeurs 
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $telephone = $_POST['telephone'];

  // Requête mysql pour insérer des données
  $sql = "INSERT INTO users(nom, prenom,telephone) VALUES (?,?,?)";
   $res = $bdd->prepare($sql);
  $exec = $res->execute(array($nom,$prenom,$telephone ));

  // vérifier si la requête d'insertion a réussi
  if($exec){
      header("location:etudi.php");

  }else{
    echo "Échec de l'opération d'insertion";
  }
}

?>
  

