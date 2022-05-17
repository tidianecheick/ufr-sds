<?php
include("./action/signupAction.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription</title>
    <link rel="stylesheet" href="../page/bootstrap.min.css">
    <link rel="stylesheet" href="../page/uikit.min.css">
    <link rel="stylesheet" href="../page/style.css">
</head>
<body>
    <nav class=one>
        <div>
            
            <a href="./index.php"> <img src="../image/file.png" alt=""> </a>
        </div>
        <span class="one1">
            <div class="" >
                <div class="heures"></div>
                <div class="date"></div>

            </div> 
            <marquee behavior="" direction=""> UFR/SDS</marquee> 
        </span>
        
    </nav>
    <center class="tow">
        <div class="tow2">
    <h2 class="tow1">BIENVENUE SUR NOTRE PLATFORME</h2> 
</div> <br>
<h2>Veillez vous inscrire</h2>

<section class="back" >
<form action="" method="post" class=" col-md-6 ">
    
    <label for="fname">Nom</label>
    <input type="text" id="fname" name="nom" placeholder="Votre nom..">
  
    <label for="lname">Prenom</label>
    <input type="text" id="lname" name="prenom" placeholder="Votre prenom..">

    <label for="lname">Email</label>
    <input type="text" id="lname" name="email" placeholder="Votre email..">



    <label for="lname">Mot de passe</label>
    <input type="password" id="lname" name="mdp" placeholder="Votre mdp..">

  
    
       <?php if(isset($errorMsg)){echo '<p style="font-size:20px; color:red">'.$errorMsg.'</p>';} ?>
    <center class="four">
        <div >
        <button type="submit" class="btn btn-outline-success col-2" name="inscrip">S'inscrire  </button>
        <button type="submit" class="btn btn-outline-warning col-3"> <a href="auth.php">Se Connecter </a></button> 
        </div>
        </center>
   
  </form>
</section>


  <footer >
    <div class="five">
        <div>
<ul>
    <li><h2>BIBLIOTHEQUES</h2></li>
    <li>Vous avez accès à plus de 25 000 <br> documents et ouvrages.</li>
</ul>
</div>
<div>
<ul>
    <li><h2>UFS/SDS</h2></li>
    <li>Science de la santé</li>
</ul>
</div>
<div>
<ul>
    <li><h2>Nous Contacter</h2></li>
    <li>Email: contact@ujkz.bf</li>
    <li>Telephone: +226 25 30 70 64 /65</li>
    <li>Adresse: 03 BP 7021 Ouagadougou 03</li>
</ul>
</div>
</div>
</footer>

    
    









  <script src="../page/bootstrap.bundle.min.js"></script>
  <script src="../page/uikit.min.js"></script>  
  <script src="../page/script.js"></script>
</body>
</html>