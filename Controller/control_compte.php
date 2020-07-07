<?php
require_once '../Model/Connexion.php';

if(isset($_POST['btn']))
    {

        $numagence = $_POST['numagence'];
        $NumCompte = $_POST['NumCompte'];
        $cleRib = $_POST['cleRib'];
        $infoclient = $_POST['id_client_physique'];
        $TypeCompte = $_POST['id_Compte'];


        $req = $db->prepare("INSERT INTO compte(numagence,NumCompte,cleRib,id_client_physique,id_Compte,id_client_moral) VALUES (?,?,?,?,?)");
        $req->execute(array($numagence,$NumCompte,$cleRib,$infoclient,$TypeCompte));
        if($req) {
            echo "Les données ont bien été insérées";
          }
          else {
            echo "echec d'insertion";
          }
}