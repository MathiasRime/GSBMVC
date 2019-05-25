<?php
include("vues/v_sommaireComptable.php");
$idUtilisateur = $_SESSION['idUtilisateur'];
$action = $_REQUEST['action'];
$derniersMois=6;
$numAnnee = substr($derniersMois, 0, 4);
$numMois = substr($derniersMois, 4, 2);
switch ($action) {
    
    case 'selectionnerVisiteurEtDerniersMois':{
        
        $visiteurs=$pdo->tousLesVisiteurs();
        $lesMois= lesSixMois($derniersMois);
        $visiteurASelectionner = $visiteurs[0]['id'];
        include("vues/v_suiviFicheFrais.php");
        break;
        
    }
    
    
    
    
}
