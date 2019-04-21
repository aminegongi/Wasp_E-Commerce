<?PHP
include "../entities/employe.php";
include "../core/employeC.php";
$gestionprofil=new gestionprofil(75757575,'BEN Ahmed','Salah',"adresse","mail",98998877);
$gestionprofilC=new GestionprofilC();
$gestionprofilC->afficherGestionprofil($gestionprofil);
echo "****************";
echo "<br>";
echo "cin:".$gestionprofil->getCin();
echo "<br>";
echo "nom:".$gestionprofil->getNom();
echo "<br>";
echo "prenom:".$gestionprofil->getPrenom();
echo "<br>";
echo "nbH:".$gestionprofil->getAdresse();
echo "<br>";
echo "tarif:".$gestionprofil->getMail();
echo "<br>";
echo "tarif:".$gestionprofil->getTelephone();
echo "<br>";

echo "<br>";


?>