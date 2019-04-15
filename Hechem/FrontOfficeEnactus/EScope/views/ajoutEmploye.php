<?PHP
include "../entities/employe.php";
include "../core/employeC.php";

if (isset($_POST['cin']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['adresse']) and isset($_POST['mail']) and isset($_POST['telephone']))
{
$employe1=new gestionprofil($_POST['cin'],$_POST['nom'],$_POST['prenom'],$_POST['adresse'],$_POST['mail'],$_POST['telephone']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3

$employe1C=new GestionprofilC();
$employe1C->ajouterGestionprofil($employe1);
header('Location: afficherEmploye.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>