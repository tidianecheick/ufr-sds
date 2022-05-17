<?php
$bdd = new mysqli('localhost', 'root', '', 'ufr_sds');
$query = "SELECT * FROM `users` ORDER BY `nom` DESC";
$solution = mysqli_query($bdd,$query)


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>etudiant</title>
    <link rel="stylesheet" href="../page/bootstrap.min.css">
    <link rel="stylesheet" href="./uikit.min.css">
    <link rel="stylesheet" href=".//style.css">
</head>
<body>

    <nav class=one>
        <div>
            
            <a href="./index.html"><img src="../image/file.png" alt=""></a>
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
<h2>Information de l'etudiant</h2>



<section class="back" >
<form action="action/enreg_etud.php" method="post" class=" col-md-6 ">
    <label for="fname">nom</label>
    <input type="text" id="fname" name="nom" placeholder="Votre nom..">
  
    <label for="lname">prenom</label>
    <input type="text" id="lname" name="prenom" placeholder="Votre prenom..">

    <label for="lname">date de naissance</label>
    <input type="text" id="lname" name="date_de_naissance" placeholder="Votre date de naissance..">

    <label for="lname">email</label>
    <input type="text" id="lname" name="email" placeholder="Votre email..">

    <label for="lname">telephone</label>
    <input type="text" id="lname" name="telephone"   placeholder="Votre tel..">

    <label for="tuteur">tuteur</label>
    <select id="tuteur" name="tuteur">

     <?php
     while($lign=mysqli_fetch_assoc($solution)){
         echo "<option value ='$lign[nom]'>$lign[nom] $lign[prenom] </option>";
     }
     ?>

    </select>

    <center class="four">
        <div >
        <button type="submit" name="enregistre" class="btn btn-outline-success col-3">Enregistre </button>
        <button type="button" class="btn btn-outline-warning col-3"><a href="list .php">Liste</a></button> <br><br>
        <button type="button" class="btn btn-outline-danger col-2"> <a href="tuteur.php">Ajouter </a></button>
        
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