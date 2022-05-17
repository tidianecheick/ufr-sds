<?php
 include ("./action./database.php");



?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste</title>
    <link rel="stylesheet" href=".//bootstrap.min.css">
    <link rel="stylesheet" href=".//uikit.min.css">
    <link rel="stylesheet" href=".//style.css">
</head>

<body>
    <nav class=one>
        <div>

            <a href="./index.php"> <img src="../image/file.png" alt=""></a>
        </div>
        <span class="one1">
            <div class="">
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

        <h2>Liste des étudiants</h2>
        <?php
$bdd = new PDO("mysql:host = localhost;dbname=ufr_sds","root","");
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

$result = $bdd->query('SELECT * FROM etudiant INNER JOIN users WHERE etudiant.tuteur= users.nom');
if (!$result){
  echo "la recupreration a echoue";
  } else {
      $nombre=$result->rowCount();
      ?>

        <section class="back">
<h2 class="text-center text-uppercase"> vous avez
    <?= $nombre?>  personne enregistrer</h2>
            <div class="container dia col-md-6">

                <table class="table table-bordered">

                    <thead>
                        <tr>
                           
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Date de naissance</th>
                            <th>Email</th>
                            <th>Telephone</th>
                            <th>tuteur</th>
                            <th>id</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                      
                       <?php
                    while ($data = $result->fetch()){
                            
                           echo'<tr>';
                           
                          
                           echo'<td>'.$data["nom"].'</td>';
                           echo' <td>'.$data["prenom"].'</td>';
                           echo' <td>'.$data["date_de_naissance"].'</td>';
                           echo' <td>'.$data["email"].'</td>';
                           echo' <td>'.$data["telephone"].'</td>';
                           echo' <td>'.$data["tuteur"].'</td>';
                           echo' <td>'.$data["id"].'</td>';
                            
                            
                           echo'</tr>';
                            
                    }
                    ?>
                        </tbody>
                      </table>
                      <?php

                      
                    }
                    ?>
                      
            </div>

        </section>




        <footer>
            <div class="five">
                <div>
                    <ul>
                        <li>
                            <h2>BIBLIOTHEQUES</h2>
                        </li>
                        <li>Vous avez accès à plus de 25 000 <br> documents et ouvrages.</li>
                    </ul>
                </div>
                <div>
                    <ul>
                        <li>
                            <h2>UFR/SDS</h2>
                        </li>
                        <li>Science de la santé</li>
                    </ul>
                </div>
                <div>
                    <ul>
                        <li>
                            <h2>Nous Contacter</h2>
                        </li>
                        <li>Email: contact@ujkz.bf</li>
                        <li>Telephone: +226 25 30 70 64 /65</li>
                        <li>Adresse: 03 BP 7021 Ouagadougou 03</li>
                    </ul>
                </div>
            </div>
        </footer>

        <script src=".//bootstrap.bundle.min.js"></script>
        <script src=".//uikit.min.js"></script>
        <script src=".//script.js"></script>
</body>

</html>