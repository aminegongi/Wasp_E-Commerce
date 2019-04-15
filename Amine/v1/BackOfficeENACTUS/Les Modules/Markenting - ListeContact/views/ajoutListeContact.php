<?PHP
include "../entities/ListeContact.php";
include "../core/ListeContactC.php";

if (isset($_POST['Nom_ListeContact']) )
{
	$ListeContactA=new ListeContact($_POST['Nom_ListeContact']);
	//Partie2
	var_dump($ListeContactA);
	//Partie3
	$ListeContactAC=new ListeContactC();
	$ListeContactAC->ajouterListeContact($ListeContactA);
	header('Location: CMarketing-ListeContact.php');
}
else
{
	echo "vérifier les champs";
}
//*/

?>