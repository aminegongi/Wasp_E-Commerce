<?PHP
include "../core/Produits.php";
$Produits=new Produits();
if (isset($_GET["reference"])){
    $var =$_GET["reference"] ;
    $Produits->supprimerProduits($_GET["reference"]);
        $Produits->Delete_File($var);
    header('Location: afficherProduit.php');
}

?>