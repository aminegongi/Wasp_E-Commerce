<?PHP
include "../../../../FrontOfficeEnactus/Gestion Reclamations/core/reclamationC.php";
include "../../../../FrontOfficeEnactus/Gestion Reclamations/entities/reclamationE.php";
if (isset($_POST['reponse'])){
	$reclamationC=new reclamationC(); 
	$reclamationC->repondre($_POST['reponse'],$_GET['designation']);


	//repondre($_POST['reponse'], $_GET['designation']);
header('Location: afficher_reclamation.php');

}else{
	echo "vérifier les champs";
}
//*/
?>