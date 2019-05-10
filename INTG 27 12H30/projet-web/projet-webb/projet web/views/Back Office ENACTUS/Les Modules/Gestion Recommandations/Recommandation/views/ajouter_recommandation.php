<?php
include "../core/RecommandationC.php";
include "../entities/RecommandationE.php";
session_start();
        $id=$_SESSION["ID"];
        $sql="SELECT * from admin where ID='$id' ";
		$db = config11::getConnexion();
        $currentUSER=$db->query($sql);

if(isset($_POST['valider']) and isset( $_POST['texte']) and isset($_POST['date_debut']) and  isset($_POST['cible'] ) and ($_POST['idProduit'])!="none"){
    $recommandation = new Recommandation($_POST['texte'], $_POST['date_debut'], $_POST['idProduit'], $_POST['cible'], $id);
    $recommandationC = new RecommandationC();
    $recommandationC->ajouterRecommandation($recommandation);
    header('location:afficher_recommandation.php');

}else{
    echo "verifier";
}

?>