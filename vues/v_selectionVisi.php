<div id="contenu">
      <h2>Validation des fiches de frais</h2>
      <h3>Visiteur à selectionner : </h3>
      <h4>Mois à selectionner</h4>
      <form action="index.php?uc=valideFrais&action=''" method="POST">
      <div class="corpsForm">

      <p>

        Visiteur
        <select name="visiteurs">
            <?php
            foreach ($utilisateur as $utilisateur)
            {

                if ($utilisateur['id'] == $utilisateurASelectionner){
                ?>
                <option selected value="<?php echo $utilisateur['id'] ?>"><?php echo $utilisateur['nom']."".$utilisateur['prenom'] ?> </option>;
                <?php 
                }
                else{ ?>
                <?php echo "<option value=".$utilisateur['id']. " >" .$utilisateur['nom']." ".$utilisateur['prenom']." </option>" ;
                                }
                                }
                ?> 


        Mois
        <select id="lesMois" name="lesMois">
                               <?php
                    $tableMois = $lesMois['id'];
                    $i = 0;
                    foreach ($tableMois as $mois) {
                        if ($lesMois == $Visiteur['id']) {
                            
                        } else {
                            ?>
                            <option value="<?php echo $lesMois; ?>"><?php echo $lesMois['libelle'][$i]; ?></option> 
                            <?php
                        }
                        $i++;
                    }
                    ?>


        </select>
      </p>
      </div>
      <div class="piedForm">
      <p>
          <input id="ok" type="submit" value="Valider"  size="20" />
        <input id="annuler" type="reset" value="Effacer" size="20" />
      </p> 
      </div>

      </form>

