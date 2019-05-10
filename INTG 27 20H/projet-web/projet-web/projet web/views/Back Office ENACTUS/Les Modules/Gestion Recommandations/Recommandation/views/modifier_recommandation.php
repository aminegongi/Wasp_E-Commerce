<?php
include "../core/RecommandationC.php";
include "../entities/RecommandationE.php";
if(isset($_POST['valider']) and isset( $_POST['texte']) and isset($_POST['date_debut']) and  isset($_POST['cible'] ) and ($_POST['idProduit'])!="none"){
    $recommandation = new Recommandation($_POST['texte'], $_POST['date_debut'], $_POST['idProduit'], $_POST['cible'], "idAdmin1");
    $recommandationC = new RecommandationC();
    $recommandationC->modifierRecommandation($recommandation, $_GET['id']);
    header('location:afficher_recommandation.php');
}else{
    echo "verifier";
}

?>