<?PHP
include "../entities/employe.php";
include "../core/employeC.php";

if (isset($_POST['nom_du_produit']) and isset($_POST['categorie']) and isset($_POST['cible']) and isset($_POST['picture']) )
{
$employe1=new recommandation($_POST['nom_du_produit'],$_POST['categorie'],$_POST['cible'],$_POST['picture']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$employe1C=new RecommandationC();
$employe1C->ajouterRecommandation($employe1);
header('Location: afficherEmploye.php');
	
}
else{
	echo "vérifier les champs";
 }
//*/

?>