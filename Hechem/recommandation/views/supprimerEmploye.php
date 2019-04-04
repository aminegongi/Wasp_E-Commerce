<?PHP
include "../core/employeC.php";
$recommandationC=new RecommandationC();
if (isset($_POST["nom_du_produit"])){
	$recommandationC->supprimerRecommandation($_POST["nom_du_produit"]);
	header('Location: afficherEmploye.php');
}

?>