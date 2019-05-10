<?PHP
include "../entities/societe.php";
include "../core/societeC.php";

if (isset($_POST['matriculeFiscal']) and isset($_POST['nom']) and isset($_POST['mail']) ) // les champs obligatoires pour passer la requette ?? ! 
{ 

$societe1=new Societe($_POST['matriculeFiscal'],$_POST['nom'], $_POST['mail'] ,$_POST['mobile'],$_POST['fix'] ,$_POST['fax'] );

$societe1C=new societeC();

$societe1C->ajouterSociete($societe1);
header('Location: afficherSociete.php');

}else{
	echo "vérifier les champs";
}


?>