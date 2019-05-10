<?PHP
include "../entities/PointsProduits.php ";
include "../core/PointsProduitsC.php";
if (isset($_POST['idref_PointsProduit']) and isset($_POST['point_PointsProduit']) )
{
	$PointsProduitsA=new PointsProduits($_POST['idref_PointsProduit'],$_POST['point_PointsProduit']);
	//Partie2
	var_dump($PointsProduitsA);
	//Partie3
	$PointsProduitsAC=new PointsProduitsC();
	$PointsProduitsAC->ajouterPointsProduits($PointsProduitsA);
	header('Location: CMarketing-PointsProduits.php');
}
else
{
	echo "vérifier les champs";
}
//*/

?>