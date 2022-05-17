<?php  
require('action/database.php');


  

//verification du formulaire
if (isset($_POST['inscrip'])) {

    
    //verification des champs
    if(  !empty($_POST['nom'])  && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['mdp'])){
 

         //recuperation des donnes
      
        $nom=htmlspecialchars($_POST['nom']);
        $prenom=htmlspecialchars($_POST['prenom']);
          $email=htmlspecialchars($_POST['email']);
        $motdepasse= password_hash($_POST['mdp'], PASSWORD_DEFAULT);
        



        //controller si l,utilisateur existe deja
        $ifUserexist= $bdd->prepare("SELECT * FROM admin WHERE email=?  ");
        $ifUserexist->execute(array($email));
        if($ifUserexist->rowCount()==0){


            
            $insert=$bdd->prepare("INSERT INTO admin(nom,prenom,email,mot_de_passe) VALUES(?,?,?,?)");
            $insert->execute(array($nom,$prenom,$email,$motdepasse));


              //recuperer les donnes de l'utilisateur
            $getUserInfo= $bdd->prepare("SELECT id,email,nom,prenom FROM admin WHERE nom=? AND email=? ");
            $getUserInfo->execute(array($nom,$email));


            //authentification de l'utilisateur
            $userInfo=$getUserInfo->fetch();
            $_SESSION['auth']=true;
            $_SESSION['id']=$userInfo['id'];
             $_SESSION['nom']=$userInfo['nom'];
            $_SESSION['email']=$userInfo['email'];
           
           
            header('Location: ./auth.php');  




            
        }else{
           $errorMsg="!Cet utilisateur existe déjà";
        }

  
}else{
    $errorMsg="!Veuillez remplir tous les champs";
}
}
?>