<?php
session_start();
$bdd = new PDO("mysql:host=127.0.0.1;dbname=bweb;charset=utf8", "root", "");
if(isset($_GET['t'],$_GET['p']) AND !empty($_GET['t']) AND !empty($_GET['p']) )
{

    $type=$_GET['t'];
    $idp=$_GET['p'];
    $idc=$_SESSION['ID'];
    echo "<br>";
    echo $type;
    echo "<br>";
    echo $idp;
    echo "<br>";
    echo $idc;
    echo "<br>";
    $check = $bdd->prepare('SELECT id FROM produit WHERE reference = ?');
    $check->execute(array($idp));
    if($check->rowCount() == 1) {
        if($type == 1) {
            $check_like = $bdd->prepare('SELECT id FROM like_produit WHERE id_prod = ? AND id_client = ?');
            $check_like->execute(array($idp,$idc));

            $del = $bdd->prepare('DELETE FROM dislike_produit WHERE id_prod = ? AND id_client = ?');
            $del->execute(array($idp,$idc));
            if($check_like->rowCount() == 1) {
                $del = $bdd->prepare('DELETE FROM like_produit WHERE id_prod = ? AND id_client = ?');
                $del->execute(array($idp,$idc));
                
            } else {
                $ins = $bdd->prepare("INSERT INTO like_produit (id_prod, id_client) VALUES ('".$idp."', '".$idc."')");
                $ins->execute();
            }
           
        } 
        elseif($type == 2) {
            $check_like = $bdd->prepare('SELECT id FROM dislike_produit WHERE id_prod = ? AND id_client = ?');
            $check_like->execute(array($idp,$idc));
            $del = $bdd->prepare('DELETE FROM like_produit WHERE id_prod = ? AND id_client = ?');
            $del->execute(array($idp,$idc));
            if($check_like->rowCount() == 1) {
                $del = $bdd->prepare('DELETE FROM dislike_produit WHERE id_prod = ? AND id_client = ?');
                $del->execute(array($idp,$idc));
            } else {
                $ins = $bdd->prepare("INSERT INTO dislike_produit (id_prod, id_client) VALUES ('".$idp."', '".$idc."')");
                $ins->execute(array($idp,$idc));
            }
        }
    }
    else {
        exit('Erreur fatale. Revenir à l\'accueil');
    }
}
else 
{
    exit('Erreur fatale. ');
}
?>