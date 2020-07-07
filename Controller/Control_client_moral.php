<?php
require_once '../Model/Connexion.php';

if(isset($_POST['btn22']))
    {

        $nomEmployeur = $_POST['nomEmployeur'];
        $AdresseEmployeur = $_POST['AdresseEmployeur'];
        $raisonSocial = $_POST['raisonSocial'];
        $numIdent = $_POST['numIdent'];


        $req = $db->prepare("INSERT INTO client_moral(nomEmployeur,AdresseEmployeur,raisonSocial,numIdent) VALUES (?,?,?,?)");
        $req->execute(array($nomEmployeur,$AdresseEmployeur,$raisonSocial,$numIdent));
        if($req) {
            echo "Les données ont bien été insérées";
          }
          else {
            echo "echec d'insertion";
          }
}