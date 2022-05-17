<?php
require('action/database.php');//verification du formulaire
if (isset($_POST['send'])) {


    //verification des champs
    if(!empty($_POST['email']) && !empty($_POST['mdp'])){


         //recuperation des donnes
       
        $email=htmlspecialchars($_POST['email']);
        $motdepasse=htmlspecialchars($_POST['mdp']);

        $checkUserExist= $bdd->prepare("SELECT * FROM admin WHERE email=? ");
        $checkUserExist->execute(array($email));

        if($checkUserExist->rowCount()>0){
            $UserInfo=$checkUserExist->fetch();
            if(password_verify($motdepasse,$UserInfo['mot_de_passe'])){

                $_SESSION['auth']=true;
                $_SESSION['id']=$UserInfo['id'];
                $_SESSION['email']=$UserInfo['email'];
                header('Location:tuteur.php');
            }else{
                $errorMsg="Nom d'utilisateur ou mot de passe incorrect";
            }

        }else{
            $errorMsg="!Nom d'utilisateur ou mot de passe incorrect";
        }
      



    
}else{
    $errorMsg="!Veuillez remplir tous les champs";
}
}
?>




