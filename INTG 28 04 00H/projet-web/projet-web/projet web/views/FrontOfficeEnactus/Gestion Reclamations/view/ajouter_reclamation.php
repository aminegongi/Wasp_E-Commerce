<?PHP
session_start();
include "../entities/reclamationE.php";
include "../core/reclamationC.php";

if (isset($_POST['designation']) and isset($_POST['description']) and isset($_POST['nomCategorie'])){
	
		
		$reclamation1=new reclamation($_POST['nomCategorie'],$_POST['designation'],$_POST['description'],"Pas de reponse");	
		$reclamation1->setIDC($_SESSION["ID"]);
		$reclamation1C=new ReclamationC();
		$reclamation1C->ajouterReclamation($reclamation1);	
		header('Location: ../view/afficher_reclamation.php');
	
		
}else{
	echo "vérifier les champs";
}
//*/

?>