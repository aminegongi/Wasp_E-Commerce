<?PHP
include "../core/ListeContactC.php";
$ListeContactC=new ListeContactC();
if (isset($_GET["Nom"]) ){
	$separation=strpos($_GET["Nom"],";");
	$separation2=strpos($_GET["Nom"],"!");
	$id=substr($_GET["Nom"],0,$separation);
	$nom=substr($_GET["Nom"],$separation+1,$separation2-2);
	$idTable=substr($_GET["Nom"],$separation2+1);

	// echo($id." rr ".$nom." ee ".$idTable );
	// echo($separation2);
	
	$ListeContactC->supprimerAdresseListeContact($id,$nom);
	header('Location: Consulter@ListeContact.php?id='.$idTable);
}

?>