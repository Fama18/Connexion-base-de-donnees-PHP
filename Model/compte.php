<?php

    //connexion à notre base
    $user = 'root';
    $password = 'm8ts8hito';
    try
    {
      $db = new PDO('mysql:host=localhost;dbname=banque', $user, $password);
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e) {
      echo "Connection Failed : ".$e->getMessage();
    }

    //preparer la requete
    if(isset($_POST['btn']))
    {
        $numAgence = $_POST['NumAgence'];
        $NumCompte = $_POST['NumCompte'];
        $cleRib = $_POST['cleRib'];
        $sql = $db->prepare('INSERT INTO compte(NumAgence,NumCompte,cleRib) VALUES (:NumAgence, :NumCompte, :cleRib)');

        $sql -> bindValue(':NumAgence',$numAgence, PDO::PARAM_STR);
        $sql -> bindValue(':NumCompte', $NumCompte, PDO::PARAM_STR);
        $sql -> bindValue(':cleRib', $cleRib, PDO::PARAM_STR);


        //executer la requete
        $Insert = $sql ->execute();

        if($Insert) {
          echo "Les données ont bien été insérées dans la base";
        }
        else {
          echo "echec d'insertion";
        }
  }
