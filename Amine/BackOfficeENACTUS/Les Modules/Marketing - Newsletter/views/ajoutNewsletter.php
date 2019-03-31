<?PHP
include "../entities/Newsletter.php";
include "../core/NewsletterC.php";

if (isset($_POST['Libelle_Newsletter']) and isset($_POST['ListeAutre_Newsletter']) and isset($_POST['Objet_Newsletter']) and isset($_POST['Message_Newsletter']))
{
	$NewsletterA=new Newsletter($_POST['Libelle_Newsletter'],$_POST['ListeAutre_Newsletter'],$_POST['Objet_Newsletter'],$_POST['Message_Newsletter']);
	//Partie2
	
	var_dump($NewsletterA);

	
	//Partie3
	$NewsletterAC=new NewsletterC();
	$NewsletterAC->ajouterNewsletter($NewsletterA);
	header('Location: CMarketing-Newsletter.php');
}
else
{
	echo "vérifier les champs";
}
//*/

?>