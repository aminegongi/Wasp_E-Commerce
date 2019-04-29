<?PHP
include "../../../../FrontOfficeEnactus/Gestion Reclamations/core/reclamationC.php";
include "../../../../FrontOfficeEnactus/Gestion Reclamations/entities/reclamationE.php";
//echo $_POST['designation'];

$reclamationC=new ReclamationC();
if (isset($_POST['designation'])){
	$reclamationC->supprimerReclamation($_POST['designation']);
	header('Location: ../view/afficher_reclamation.php');
}
?>