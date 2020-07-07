

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
                            <option value="<?= $result['id_client_physique']?>"><?= $result['numCni']?></option>

                           <?php
                           }
                           ?>
                           <option>--Choisir le client moral--</option>
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

                            $typeC = $db->prepare('SELECT * FROM client_moral');
                            $typeC->execute();
                            while($result = $typeC->fetch(PDO::FETCH_ASSOC)) {;
                            ?>
                            <option value="<?= $result['id_client_moral']?>"><?= $result['nomEmployeur']?></option>

                           <?php
                           }
                           ?>