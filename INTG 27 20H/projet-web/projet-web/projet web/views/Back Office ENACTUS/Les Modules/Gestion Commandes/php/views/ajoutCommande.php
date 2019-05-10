<?PHP
include "../entities/Commande.php";
include "../core/Commandes.php";


if (isset($_POST['reference']) and isset($_POST['nom_client']) and isset($_POST['type_client']) and isset($_POST['prix_total']) and isset($_POST['paiment']) and isset($_POST['etat']) and isset($_POST['date']) and isset($_POST['description']) ){
    $Commande=new Commande($_POST['reference'],$_POST['nom_client'],$_POST['type_client'],$_POST['prix_total'],$_POST['paiment'],$_POST['etat'],$_POST['date'],$_POST['description']);
    //$Categorie=new Categorie($_POST['categorie']);

//var_dump($Produit);
var_dump($Commande);

    $Commandes=new Commandes();
   // $Categories=new Categories();
    $Commandes->ajouterCommandes($Commande);
   // $Categories->ajouterCategories($Categorie);

     header("Location: afficherCommande.php");
}else{
    echo "vérifier les champs";
}

?>