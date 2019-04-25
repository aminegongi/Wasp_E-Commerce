<?php
include "../../../Back Office ENACTUS/Les Modules/Gestion Commandes/php/core/Commandes.php";
include "../../../Back Office ENACTUS/Les Modules/Gestion Commandes/php/entities/Commande.php";
include "../../../Back Office ENACTUS/Les Modules/Gestion produit/php/core/Produits.php";
session_start();
if($_SESSION["login_in"])
{
$id_client=$_SESSION["ID"];
$id_projet=$_POST['id_Projet'];
$id_produit=$_POST['id_produit'];
$quantite=$_POST['quantite_produit'];

$produitC=new Paniers();
$listeProduit=$produitC->recupererPanier_produit($id_produit);
$n=0;
foreach ($listeProduit as $key)
{
$n++;
echo $n;
}

if ($n==0)
{
$panier1=new Panier($id_client,$id_projet,$id_produit,$quantite);
$panierC=new Paniers();
$panierC->ajouterPaniers($panier1);
header("location:../indexClient.php");
}
else
{
    //echo "NOP";
    $panierC=new Paniers();
    $panierC->modifierPanier_quantite($id_produit,$quantite);
    header("location:../indexClient.php");
}
}
?>