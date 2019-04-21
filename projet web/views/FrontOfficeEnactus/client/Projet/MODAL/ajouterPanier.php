<?php
include "../../../../Back Office ENACTUS/Les Modules/Gestion Commandes/php/core/Commandes.php";
include "../../../../Back Office ENACTUS/Les Modules/Gestion Commandes/php/entities/Commande.php";
session_start();
if($_SESSION["login_in"])
{
$id_client=$_SESSION["ID"];
$id_projet=$_POST['id_Projet'];
$id_produit=$_POST['id_produit'];
$quantite=$_POST['quantite_produit'];



$panier1=new Panier($id_client,$id_projet,$id_produit,$quantite);
$panierC=new Paniers();
$panierC->ajouterPaniers($panier1);
header("location:../../indexClient.php");
}
?>