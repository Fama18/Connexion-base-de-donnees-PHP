<?php
require_once '../Model/Connexion.php';

if(isset($_POST['btn2']))
    {
      if(isset($_POST['numCni'])!='' && isset($_POST['nom'])!='' && isset($_POST['prenom'])!='' && isset($_POST['civilite'])!='' && isset($_POST['nom'])!='' && isset($_POST['DateDeNaissance'])!=''
       && isset($_POST['adresse'])!='' && isset($_POST['email']) && isset($_POST['telephone']));
        {

        $numCni = $_POST['numCni'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $civilite = $_POST['civilite'];
        $DateDeNaissance = $_POST['DateDeNaissance'];
        $adresse = $_POST['adresse'];
        $email = $_POST['email'];
        $telephone = $_POST['telephone'];


        $req = $db->prepare("INSERT INTO client_physique(numCni,nom,prenom,civilite,DateDeNaissance,adresse,email,telephone) VALUES (?,?,?,?,?,?,?,?)");
        $req->execute(array($numCni,$nom,$prenom,$civilite,$DateDeNaissance,$adresse,$email,$telephone));
        if($req) {
            echo "Les données ont bien été insérées";
          }
          else {
            echo "echec d'insertion";
          }
      }
}