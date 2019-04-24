<?PHP
include "../../Front-office/core/demandeC.php";

if(isset($_POST['annuler'])){
    $demandeC = new DemandeC();
    $demandeC->modifierEtatDemande($_GET['id_demande'], "Demande Annulée");
    header('Location: ../view/afficher_demande.php');
}else{
    echo "verifier";
}


?>