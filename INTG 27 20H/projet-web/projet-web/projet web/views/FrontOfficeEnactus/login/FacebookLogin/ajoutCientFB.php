<?php
include "../../../../entities/client.php";
include "../../../../core/ClientC.php";
session_start();
	if (!isset($_SESSION['access_token'])) {
		header('Location: login.php');
		exit();
	}
    $_SESSION["login_in"]=true;
    $_SESSION["ID"] = "F".$_SESSION['userData']['id'];
 

 $url_to_image = $_SESSION['userData']['picture']['url'];
 $bdd = new PDO("mysql:host=127.0.0.1;dbname=bweb;charset=utf8", "root", "");

$date=date("Y-m-d");


 $check_like = $bdd->prepare("insert into Client (ID,pseudo,mail,Adresse,image,passwd,NumTel,nom,prenom,date) values (?,?,?,?,?,?,?,?,?,?)");
 $check_like->execute(array("F".$_SESSION['userData']['id'],$_SESSION['userData']['first_name'].$_SESSION['userData']['last_name'],$_SESSION['userData']['email'],$_SESSION['userData']['location']['name'],$url_to_image,"FB","rrr",$_SESSION['userData']['last_name'],$_SESSION['userData']['first_name'],$date));


    
      header('Location: ../../client/indexClient.php');

?>