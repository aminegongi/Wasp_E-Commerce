<?PHP
include "../entities/Produit.php";
include "../core/Produits.php";

include "../entities/Categorie.php";
include "../core/Categories.php";

/*$Produits = new Produits();
$result = $Produits->recupererProduit($_POST['reference']);
$test = "false";
foreach ($result as $row)
{
    if ($row['reference']==$_POST['reference'])
    {$test = "true";
        var_dump($row);}
}
if (!$test) {echo "Rien";}*/

if (isset($_POST['reference']) and isset($_POST['nom']) and isset($_POST['categorie']) and isset($_POST['prixHT']) and isset($_POST['prix']) and isset($_POST['quantite']) and isset($_POST['date']) and isset($_POST['description']) ) {
    $Produit = new Produit($_POST['reference'], $_POST['nom'], $_POST['categorie'], $_POST['prixHT'], $_POST['prix'], $_POST['quantite'], $_POST['date'], $_POST['description']);
    $Categorie = new Categorie($_POST['categorie']);

//var_dump($Produit);
//var_dump($Categorie);

    $Produits = new Produits();
    $Categories = new Categories();
    $Produits->ajouterProduits($Produit);
    $Categories->ajouterCategories($Categorie);

    $result = $Produits->recupererProduit($_POST['reference']);
    var_dump($result);
        if (!file_exists($_POST['reference'])) {
            mkdir($_POST['reference']);
        }
        header("Location: afficherProduit.php");
    } else {
        echo "vérifier les champs";
    }


//*/

?>