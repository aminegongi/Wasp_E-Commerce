<?PHP
include "../entities/reclamationE.php";
include "../core/reclamationC.php";
$reclamationC=new ReclamationC();
if (isset($_POST["designation"])){
	$reclamationC->supprimerReclamation($_POST["designation"]);
	header('Location: ../view/afficher_reclamation.php');
}else{
	echo "verifier les champs";
}
?>