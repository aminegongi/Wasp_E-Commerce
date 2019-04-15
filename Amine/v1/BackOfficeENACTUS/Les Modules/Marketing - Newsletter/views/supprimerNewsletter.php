<?PHP
include "../core/NewsletterC.php";
$NewsletterC=new NewsletterC();
if (isset($_GET["id"])){
	$NewsletterC->supprimerNewsletter($_GET["id"]);
	header('Location: CMarketing-Newsletter.php');
}

?>