<?PHP
include "../core/PersonneC.php";
$personneC=new PersonneC();
if (isset($_GET["cin"])){
	$personneC->supprimerPersonne($_GET["cin"]);
	header('Location: afficherPersonne.php');
}
else echo "pas de valeur recu" ;

?>