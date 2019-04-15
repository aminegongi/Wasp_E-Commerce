<?PHP
include "../core/employeC.php";
$gestionprofilC=new GestionprofilC();
if (isset($_POST["cin"])){
	$gestionprofilC->supprimerGestionprofil($_POST["cin"]);
	header('Location: afficherEmploye.php');
}

?>