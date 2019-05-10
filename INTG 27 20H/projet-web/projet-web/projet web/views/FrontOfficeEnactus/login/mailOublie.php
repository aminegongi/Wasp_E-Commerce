<?php
if(isset($_POST['send']))
{
$header="MIME-Version: 1.0\r\n";
$header.='From:"Enactus Esprit ICT"<no_reply@enactusICT.tn>'."\n";
$header.='Content-Type:text/html; charset="uft-8"'."\n";
$header.='Content-Transfer-Encoding: 8bit';

$message = "clé reset password";
mail($_POST['emailO'], "Mot de Passe Oublié !" , $message, $header);
header("location:login.php");
}
?>