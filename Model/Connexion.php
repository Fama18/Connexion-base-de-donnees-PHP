<?php

    //connexion à notre base
    $user = 'root';
    $password = 'm8ts8hito';
    try
    {
      $db = new PDO('mysql:host=localhost;dbname=banque', $user, $password);

    }
    catch(PDOException $e) {
      echo "Connection Failed : ".$e->getMessage();
    }