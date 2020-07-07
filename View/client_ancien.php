
<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link type="text/css" rel="stylesheet" href="style.css" />
        <title>Connexion BD</title>
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

            <br />
            <br />
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
                <form id="form1" method="get" action="../Controller/recupere_info.php">
                    <fieldset id="field1">
                        <legend id="legend1">Récuperer les informations du client</legend>
                        <select type="text" id="infoclien" name="id_client_physique" value="">
                                <option value="S">--Sélectionner le client --</option>
                                <?php
                                $user = 'root';
                                $password = 'm8ts8hito';
                                try
                                {
                                $db = new PDO('mysql:host=localhost;dbname=banque', $user, $password);

                                }
                                catch(PDOException $e) {
                                echo "Connection Failed : ".$e->getMessage();
                                }

                                $typeC = $db->prepare('SELECT * FROM client_physique');
                                $typeC->execute();
                                while($result = $typeC->fetch(PDO::FETCH_ASSOC)) {;
                                ?>
                                <option value="<?= $result['id_client_physique']?>"><?= $result['id_client_physique']?></option>
                            <?php
                            }
                            ?>
                        </select>
                        <div id="infoClient">
                                <span id="ErrorTypeClient"></span>
                            <div id="infoClient1">
                                <label for="numCni" id="lab1">Numéro CNI* : </label>
                                <input type="text" id="numCni" name="numCni" value="" placeholder="Numéro CNI" />
                                <span id="ErrorCni"></span>
                                <label for="nom" id="lab2">Nom* : </label>
                                <input type="text" id="nom" name="nom" value="" placeholder="Nom" />
                                <span id="ErrorNom"></span>
                                <label for="prenom" id="lab3">Prenom* : </label>
                                <input type="text" id="prenom" name="prenom" value="" placeholder="Prenom" />
                                <span id="ErrorPrenom"></span>
                                <label for="civilite" id="labc">civilité* : </label>
                                <select id="civilite" name="civilite" value="">
                                    <option>--Sélectionner votre civilité--</option>
                                    <option value="Mr">Mr</option>
                                    <option value="Melle">Melle</option>
                                    <option value="Mdme">Mdme</option>
                                </select>
                            </div>
                            <div id="infoClient2">
                                <label for="DateDeNaissance" id="lab1">Date de naissance* : </label>
                                <input type="date" id="DateDeNaissance" name="DateDeNaissance" value="" placeholder="Date de naissance" />
                                <span id="ErrorDateNaissance"></span>
                                <label for="adresse" id="lab1">Adresse* : </label>
                                <input type="text" id="adresse" name="adresse" value="" placeholder="Adresse" />
                                <span id="ErrorAdresse"></span>
                                <label for="email" id="lab1">Email : </label>
                                <input type="email" id="email" name="email" value="" placeholder="Email" />
                                <span id="ErrorEmail"></span>
                                <label for="tel" id="lab1">Téléphone* :</label>
                                <input type="tel" id="telephone" name="telephone" value="" placeholder="Téléphone" />
                                <span id="ErrorTelephone"></span>
                            </div>
                      </div>
                    </fieldset>
                    <br />
                    <br />
                        <span id="ErrorC"></span>
                </form>
            </main>

            <footer>
            </footer>

        </div>
        <script type="text/javascript" src="app.js"></script>
    </body>
</html>
