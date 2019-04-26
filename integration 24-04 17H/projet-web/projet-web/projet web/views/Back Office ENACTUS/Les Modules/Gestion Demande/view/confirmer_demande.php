<?PHP
include "../../Front-office/core/demandeC.php";

if(isset($_POST['confirmer'])){
    $demandeC = new DemandeC();
    $demande = $demandeC->recupererDemande($_GET['id_demande']);
    foreach($demande as $row){
            $id_client = $row['id_client'];
			$id_commande = $row['id_commande'];
			$nomProduit = $row['nomProduit'];
    }
    $demandeC->ajouterLivraison($nomProduit, $id_commande, $id_client);
    $demandeC->modifierEtatDemande($_GET['id_demande'], "Demande Confirmée");
    header('Location: ../view/afficher_demande.php');
}else{
    echo "verifier";
}


?>