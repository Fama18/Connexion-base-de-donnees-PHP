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

            $typeC = $db->prepare('SELECT * FROM typecompte');
            $typeC->execute();
            ?>
            <select id="typeCompte" name="id_Compte" value="" onchange="testCompte()">
            <option value="">--Sélectionner un type de compte--</option>
        <?php
            while($result = $typeC->fetch(PDO::FETCH_ASSOC)) {?>
          <option value="<?php echo $result['id_Compte'];?>"><?php echo $result['libelle'];?></option>
          <?php
        }
        ?>
         </select>
