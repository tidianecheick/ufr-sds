<?php
include("./action/connexion_bdd.php");
if(isset($_POST['inscrip'])){
    $nom=$_POST["nom"];
    $prenom=$_POST["prenom"];
    $email=$_POST["email"];
    
    $mot_de_passe=$_POST["mdp"];
    

   $sql=" INSERT INTO admin (nom, prenom, email,mot_de_passe)
VALUES ('$nom', '$prenom', '$email','$mot_de_passe')";

$result=mysqli_query($connexion,$sql);
if($result){
    header(location:../action/auth.php);
    
}
else{
    $errormsg="erreur d'ajout";
}
}




?>