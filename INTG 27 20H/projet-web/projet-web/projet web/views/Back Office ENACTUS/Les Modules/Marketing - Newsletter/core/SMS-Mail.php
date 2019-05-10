<?php
include "NewsletterC.php";
var_dump($_POST);
if (isset($_POST['Num_SMS'],$_POST['Objet_SMS'],$_POST['Message_SMS'])){

$header="MIME-Version: 1.0\r\n";
$header.='From:"Amine Gongi"<aminegongiesprit@gmail.com>'."\n";
$header.='Content-Type:text/html; charset="uft-8"'."\n";
$header.='Content-Transfer-Encoding: 8bit';

$obj=$_POST['Objet_SMS'];
$message = $_POST['Message_SMS'];
$listeEnv=$_POST['Num_SMS']."@sms.clicksend.com";

echo "<br>";
echo "li <br>";
echo $listeEnv;
echo "<br>";
echo "mes<br>";
echo $message;
echo "ob<br>";
echo $obj;
echo "<br>";
mail($listeEnv, $obj , $message, $header);


echo ("<script> window.location.replace(\"../views/CMarketing-Newsletter.php\"); </script>");

}
?>