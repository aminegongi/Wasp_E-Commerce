<?PHP
include "../core/PointsProduitsC.php";
$PointsProduitsAC=new PointsProduitsC();
if (isset($_GET["id"])){
	$PointsProduitsAC->supprimerPointsProduits($_GET["id"]);
	header('Location: CMarketing-PointsProduits.php');
}

?>