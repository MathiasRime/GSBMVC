<?php
include("vues/v_sommaire_compta.php");
$idutilisateur = $_SESSION['idutilisateur'];
$nom = $_SESSION['nom'];
$prenom = $_SESSION['prenom'];
$action = $_REQUEST['action'];
        switch($action){
	case 'selectionnerUtilisateur':{
		$utilisateur=$pdo->afficherVisiteur();
                $utilisateurASelectionner = $utilisateur[0]['id'];
                $lesCles = array_keys( $utilisateur );
                $lesMois= lesSixMois($derniersMois);
                $lesCles = array_keys( $lesMois );
		$$moisASelectionner = $lesCles[0];
		include("vues/v_selectionVisi.php");
		break;
        }
        case 'recapitulatifFrais':{
		$utilisateur=$pdo->afficherVisiteur();
                $lesCles = array_keys( $utilisateur );
		$UtilisateurASelectionner = $lesCles[0];
		include("vues/v_selectionVisi.php");
		break;
        }
        }


