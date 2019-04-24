<?PHP
include "../core/SocieteC.php";
$societeC=new SocieteC();
if (isset($_GET["matricule"])){
	$societeC->supprimerSociete($_GET["matricule"]);
	header('Location: afficherSociete.php');
}
else echo "pas de valeur recu" ;

?>