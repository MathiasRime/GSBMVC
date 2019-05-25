 <!-- Division pour le sommaire -->
    <div id="menuGauche">
     <div id="infosUtil">
    
        <h2>
    
</h2>
    
      </div>  
        <ul id="menuList">
			<li >
				  Comptable :<br>
				<?php echo $_SESSION['prenom']."  ".$_SESSION['nom']  ?>
			</li>
           <li class="smenu">
              <a href="index.php?uc=validéFrais&action=selectionnerUtilisateur" title="validation fiche de frais ">Validation de fiche de frais</a>
           </li>
           <li class="smenu">
              <a href="index.php?uc=etatFrais&action=selectionnerMois" title="suivis des fiches de frais">Suivis fiches de frais</a>
           </li>
            <li class="smenu">
              <a href="index.php?uc=validéFrais&action=recapitulatifFrais" title="Récapitulatifs des fiches de frais">Récapitulatifs Fiche de frais</a>
            </li>
 	   <li class="smenu">
              <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
           </li>
         </ul>
        
    </div>

 