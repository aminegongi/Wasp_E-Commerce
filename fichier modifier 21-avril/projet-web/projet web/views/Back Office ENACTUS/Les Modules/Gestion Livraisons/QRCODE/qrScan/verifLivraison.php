<?php
include "../../core/livraisonC.php";
if (isset($_GET['id'])  )
{	$id=$_GET['id'] ;
$livraison1C=new livraisonC();
$etat=$livraison1C->recupererEtatLivraison($id);
	$dbhandle= new mysqli('localhost','root','','bweb');
echo $dbhandle->connect_error;

if ($etat=="confirme")
{
$sql="	UPDATE `livraison` SET `etat`='encours' ,`dateDebutLiv`=now() WHERE `id`=$id ";
$result=$dbhandle->query($sql);
}
elseif ($etat=="encours") {
	$sql="	UPDATE `livraison` SET `etat`='livre' ,`dateFinLiv`=now() WHERE `id`=$id ";
$result=$dbhandle->query($sql);
}
}
?>