<?php
include "phpqrcode/qrlib.php";
echo $id;
QRcode::png($id, "../../../Back Office ENACTUS/Les Modules/Gestion Livraisons/QRCODE/ConfirmeToEncours.png", "H", 20, 20); //id de la livraison + generatin code jdid chemin de sauvegarede 
QRcode::png($id, "../../../Back Office ENACTUS/Les Modules/Gestion Livraisons/QRCODE/EncoursToLivre.png", "H", 20, 20); //id de la livraison + generatin code jdid chemin de sauvegarede 
// mail
/*$header="MIME-Version: 1.0\r\n";
$header.='From:"Enactus Esprit ICT"<support@enactusICT.com>'."\n";
$header.='Content-Type:text/html; charset="uft-8"'."\n";
$header.='Content-Transfer-Encoding: 8bit';

$message='<p>Ce Code est A presenter au Livreur</p> <img src="images/QrCodeLivraison/sitePoint.png" alt="CodeLivreur"> ';

mail("amine.gongi@esprit.tn", "Commande Code pour le Livreur", $message, $header);*/
?>
