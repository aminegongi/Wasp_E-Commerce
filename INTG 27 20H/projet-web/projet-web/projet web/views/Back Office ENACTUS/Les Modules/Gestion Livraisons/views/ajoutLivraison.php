<?PHP
include "../entities/livraison.php";
include "../core/livraisonC.php";

if (isset($_POST['nomLivreur']) )  // le contenu du if ne sera pas modifié dans l'integration
{ 

$livraison1=new livraison("fahd att","taha att", "confirme" ,$_POST['designation'],$_POST['nomLivreur']) ;

$livraison1C=new livraisonC();

$livraison1C->ajouterLivraison($livraison1);
$id=$livraison1C->recupererDernierId();
include '../QRCODE/qrCode.php';
include '../../confirmerAchatClientMail.php';
include '../../confirmerAchatAdminMail.php';



}
else{
	echo "vérifier les champs";
}


?>