<?php
require_once 'Connexion.php';


/*$sql1='SELECT * FROM clie WHERE idEmploi=?';
$req1=$conn->prepare($sql1);
$req1->execute(array($_GET['idEmploi']));*/

    $numCni = $_GET['numCni'];
    $nom = $_GET['nom'];
    $prenom = $_GET['prenom'];
    $civilite = $_GET['civilite'];
    $DateDeNaissance = $_GET['DateDeNaissance'];
    $adresse = $_GET['adresse'];
    $email = $_GET['email'];
    $telephone = $_GET['telephone'];


     // afficher le résultat

     echo '<h3>Informations récupérées en utilisant GET</h3>';
     echo 'numCni : ' . $numCni . ' nom : ' . $nom . ' Adresse : ' . $adresse;