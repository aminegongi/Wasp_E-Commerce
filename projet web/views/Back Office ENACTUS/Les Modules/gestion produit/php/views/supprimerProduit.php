<?PHP
include "../core/Produits.php";
$Produits=new Produits();
if (isset($_GET["reference"]) && isset($_GET["id_projet"])){
    $var =$_GET["reference"] ;
    $vare =$_GET["id_projet"] ;
    $Produits->supprimerProduits($_GET["reference"]);
        $Produits->Delete_File('Les Projets/'.$vare.'/'.$var);
    header('Location: afficherProduit.php');
}

?>