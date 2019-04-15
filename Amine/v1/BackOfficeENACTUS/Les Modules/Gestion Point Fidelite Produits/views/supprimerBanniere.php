<?PHP
include "../core/BanniereC.php";
$BanniereC=new BanniereC();
if (isset($_GET["id"])){
	$BanniereC->supprimerBanniere($_GET["id"]);
	header('Location: CMarketing-Banniere.php');
}

?>