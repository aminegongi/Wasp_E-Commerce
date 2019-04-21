<?PHP
include "../core/ListeContactC.php";
$ListeContactC=new ListeContactC();
if (isset($_GET["id"])){
	$ListeContactC->supprimerListeContact($_GET["id"]);
	header('Location: CMarketing-ListeContact.php');
}

?>