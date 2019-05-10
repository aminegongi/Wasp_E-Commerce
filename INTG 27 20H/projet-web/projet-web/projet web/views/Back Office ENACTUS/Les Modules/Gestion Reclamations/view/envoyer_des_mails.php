<?php
$header="MIME-Version: 1.0\r\n";
$header.='From:"Enactus Esprit ICT"<support@enactusICT.com>'."\n";
$header.='Content-Type:text/html; charset="uft-8"'."\n";
$header.='Content-Transfer-Encoding: 8bit';

$message='Bonjour Test Mail ICT';

mail("amine.gongi@esprit.tn", "Bonjour ", $message, $header);
?>
