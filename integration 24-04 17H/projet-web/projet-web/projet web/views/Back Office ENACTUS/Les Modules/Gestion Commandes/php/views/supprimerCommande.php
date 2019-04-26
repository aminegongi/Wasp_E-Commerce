<?PHP
include "../core/Commandes.php";
$Commandes=new Commandes();
if (isset($_GET["reference"])){
    $var =$_GET["reference"] ;
    $Commandes->supprimerCommandes($_GET["reference"]);
    header('Location: afficherCommande.php');
}

?>