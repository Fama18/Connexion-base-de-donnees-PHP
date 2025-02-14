<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link type="text/css" rel="stylesheet" href="style.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <title>Creation d'un compte</title>
    </head>
    <body>
        <div id="container">
            <header>
                <div id="entete">
                    <img alt="logo" src="images/logo bancaire.jpg" id="img1" />
                    <div id="text1"><h2>Bienvenue à la banque du peuple</h2></div>
                </div>
                <div id="lien">
                    <ul id="naviguer">
                        <li><a href="../View/Accueil.php">Home</a></li>
                        <li><a href="../Model/liste_client_physique.php">Clients physiques</a></li>
                        <li><a href="../Model/liste_client_moral.php">Clients morals</a></li>
                        <li><a href="../Model/liste_compte.php">Comptes</a></li>
                    </ul>
                </div>
                <br />
            </header>


            <main>
                <div id="text2">
                    <h2>Ouverture de compte</h2>
                </div>
                <nav>
                    <ul id="navigation">
                        <li><a href="client.php">Client</a></li>
                        <li><a href="compte.php">Compte</a></li>
                    </ul>
                </nav>
                <br />
                <form id="form2" action="../Controller/control_compte.php" method="post">
                    <fieldset id="field3">
                        <legend id="legend3">Informations Compte</legend>
                        <label for="typeCompte">Selectionner un type de compte* : </label>
                        <?php
                        require_once '../Model/TypeCompte.php';
                        ?>
                        <span id="ErrorTypeCompte"></span><br />
                        <div id="compte">
                        <div id="fraiss">
                            <label for="NumAgence">Numéro de l'agence* : </label>
                            <input type="text" id="NumAgence" name="numagence" placeholder="Numero de l'agence" />
                            <label for="cleRib">Clé Rib* : </label>
                            <input type="text" id="cleRib" name="cleRib" value="" placeholder="Cle Rib" />
                            <label for="DateOuverture" id="labOuv">Date d'ouverture* : </label>
                            <input type="date" id="DateOuverture" name="DateOuverture" value="" placeholder="Date d'ouverture" />
                        </div>
                        <div id="infoC">
                            <label for="NumCompte">Numéro du compte* : </label>
                            <input type="text" id="NumCompte" name="NumCompte" value="" placeholder="Numero de Compte" />
                            <label for="infoclient">Info client* : </label>
                            <!--<select type="text" id="infoclien" name="id_client_physique" value="">
                            <option value="S">--Sélectionner un client --</option>
                            <option value="S">--Choisir le client physique --</option>

                             </select>-->
                             <input type="text" name="prenom" id="prenom" placeholder="Sélectionner le client" />
                             <div id="ListPrenom">
                             </div>
                            <label for="DateEcheance" id="labEch">Date d'écheance* : </label>
                            <input type="date" id="DateEcheance" name="DateEcheance" value="" placeholder="Date d'écheance" />
                        </div>
                        </div><br />
                    </fieldset><br />
                    <label id="h" >Ce type de compte nécessite des frais qui s'élévent à 15000F</label><br />
                    <input type="checkbox" id="fraisCompte" value="frais" />
                    <label id="labfrais" >j'accepte les conditions de creation de compte</label>

                    <label id="h1" >Ce type de compte nécessite des agios qui s'élévent à 5000F/ 3 mois</label><br />
                    <input type="checkbox" id="AgiosCompte" value="agios" />
                    <label id="labAgios" >j'accepte les conditions de creation de compte</label><br /><br />
                    <input type="submit" name="btn" value="Valider" id="btn" />
                </form>
                    <br />
                <form id="form_Employeur" method="post" action="../Controller/Control_client_moral.php">
                    <fieldset id="field4">
                        <legend id="legend2">Informations Employeur</legend>
                                      <div id="infoSupp">
                                          <div id="infoSupp1">
                                              <label for="nomEmployeur" id="labE">Nom Entreprise* : </label>
                                              <input type="text" id="nomEmployeur" name="nomEmployeur" value="" placeholder="Nom de votre Employeur" />
                                              <span id="ErrorEmployeur"></span>
                                              <label for="AdresseEmployeur" id="labAdr">Adresse Entreprise* : </label>
                                              <input type="text" id="AdresseEmployeur" name="AdresseEmployeur" value="" placeholder="Adresse Employeur" />
                                              <span id="ErrorAdrEmployeur"></span>
                                              <label for="salaire" id="labAdr">Salaire* : </label>
                                              <input type="number" id="salaire" name="salaire" value="" placeholder="Salaire" />
                                              <span id="ErrorAdrEmployeur"></span>
                                          </div>
                                          <div id="infoSupp2">
                                              <label for="raisonSocial" id="labRai">Raison sociale* : </label>
                                              <input type="text" id="raisonSocial" name="raisonSocial" value="" placeholder="Raison Sociale" />
                                              <span id="ErrorRaisonSocial"></span>
                                              <label for="numIdent" id="labNd">Numéro d'identification* : </label>
                                              <input type="text" id="numIdent" name="numIdent" value="" placeholder="Numéro d'identification" />
                                              <span id="ErrorNumIdent"></span>
                                          </div>
                                      </div>
                    </fieldset>
                    <br />
                    <span id="Error"></span>
                </form>
            </main>

            <footer>
            </footer>

        </div>
        <script type="text/javascript" src="appCompte.js"></script>
    </body>
</html>
<script>
$(document).ready(function() {
    $('#prenom').keyup(function() {
        var query = $(this).val();
        if(query != '') {
            $.ajax({
                url:"search.php",
                method:"POST",
                data:{query:query},
                success:function(data) {
                    $('#ListPrenom').fadeIn();
                    $('#ListPrenom').html(data);
                }
            });
        }
    });
    $(document).on('click', 'li', function() {
        $('#prenom').val($(this).text());
        $('#ListPrenom').fadeOut();
    });
});
</script>