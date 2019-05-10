<?PHP
include "../entities/demandeE.php";
include "../core/demandeC.php";

if(isset($_POST['demander'])){
	
	$choix=$_FILES['choix_image']['name'];
	$targetDir = "../images_demande/";
	$fileName = basename($_FILES['choix_image']['name']);
	$targetFilePath = $targetDir . $fileName;
	$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
	move_uploaded_file($_FILES['choix_image']['tmp_name'],$targetFilePath);
	
}else{
	$choix = "none";
}

if (isset($_POST['id_commande']) and isset($_POST['nomProduit']) and isset($_POST['description']) and isset($_POST['id_client']) ){

	$nomP = $_POST['nomProduit'];

	$sql="SElECT * From produit where nom = '$nomP' ";
	$db = config10::getConnexion();
	
	try{
		$liste=$db->query($sql);
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}
	foreach($liste as $row){
		$id_projet =  $row['id_projet'];
	}

	$demande1=new Demande($_POST['nomProduit'],$targetFilePath,$_POST['id_commande'],$_POST['id_client'], $_POST['description'], $id_projet);		
	$demande1C=new DemandeC();
	$demande1C->ajouterDemande($demande1);
	
	header('Location: ../view/afficher_demande.php');

}else{
echo "vérifier les champs";
}
							



?>