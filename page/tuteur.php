<?php
include("./action/enreg_tu.php");

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tuteur</title>
    <link rel="stylesheet" href="../page/bootstrap.min.css">
    <link rel="stylesheet" href="./uikit.min.css">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <nav class=one>
        <div>
            
            <a href="./index.php"> <img src="../image/file.png" alt=""></a>
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
<a href="./action/Logout.php">deconnecter</a>
<h2>Renseignement du tuteur</h2>


<section class="back" >

<form action="" method="post" class="col-md-4">
    <div class="imgcontainer">
      <img src="../image/homme-serieux.jpg" alt="Avatar" class="avatar" >
    </div>
  
    <div class="container">
      <label for="uname"><b>nom</b></label>
      <input type="text" placeholder="Enter nom" name="nom" required>

      <label for="uname"><b>prenom</b></label>
      <input type="text" placeholder="Enter prenom" name="prenom" required>

      <label for="uname"><b>telephone</b></label>
      <input type="text" placeholder="Entre votre tel" name="telephone" required>
  
  
      <button type="submit" name="envoyer">Envoyer</button>
    
    </div>
  
     <!-- <div class="container" style="background-color:#f1f1f1">
      <button type="button" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div> -->
  </form> 
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
    <li><h2>UFR/SDS</h2></li>
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
</section>





    

    <script src="../page/bootstrap.bundle.min.js"></script>
    <script src="../page/uikit.min.js"></script>
    <script src="../page/script.js"></script>
</body>
</html>