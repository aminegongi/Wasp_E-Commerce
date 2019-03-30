<?php
ini_set("SMTP","smtp.gmail.com");
ini_set("smtp_port","587");
$header="MIME-Version: 1.0\r\n";
$header.='From:"Jolla"<JollaConceptStore@jolla.com>'."\n";
$header.='Content-Type:text/html; charset="uft-8"'."\n";
$header.='Content-Transfer-Encoding: 8bit';
$message='bokok';
mail("jassemtalbi2@gmail.com", "bonjour2" ,$message, $header);

?>