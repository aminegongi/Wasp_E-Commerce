<?php
include "NewsletterC.php";

if (isset($_GET['id'])){
$newsLetterC=new NewsletterC();
$result=$newsLetterC->recupererNewsletter($_GET['id']);
foreach($result as $row){
    $id=$row['id'];
    $libelle=$row['Libelle'];
    $listee=$row['ListeEnvoi'];
    $obj=$row['ObjetMail'];
    $msg=$row['MessageMail'];
    $etat=$row['Etat'];
}
$at=strpos($listee,"@");
$listeEnv="";
if($at == 0 )
{
    $sql="SELECT * From $listee ";
    $db = config::getConnexion();
    $liste=$db->query($sql);
    foreach ($liste as $res)
    {
        $listeEnv.=$res['Email'].",";
    }
    $listeEnv=substr($listeEnv,0,-1);
}
else
{ 
    $listeEnv= $listee;
}

$header="MIME-Version: 1.0\r\n";
$header.='From:"Enactus Esprit ICT"<no_reply@enactusICT.tn>'."\n";
$header.='Content-Type:text/html; charset="uft-8"'."\n";
$header.='Content-Transfer-Encoding: 8bit';

$message = $msg;
mail($listeEnv, $obj , $message, $header);

$sql="UPDATE newsletter SET Etat=:etat WHERE id=:id";	
$db = config::getConnexion();
try
{		
    $req=$db->prepare($sql);
    $req->bindValue(':id',$id);
    $req->bindValue(':etat',"1");
    $s=$req->execute();
}
catch (Exception $e)
{
    echo " Erreur ! ".$e->getMessage();
}

if($at == 0 )
{
    $sql1="UPDATE listediffusion SET Nb_Envoi=Nb_Envoi+1 WHERE type='$listee'";	
    $db = config::getConnexion();
    try
    {		
        $req=$db->prepare($sql1);
        $s=$req->execute();
    }
    catch (Exception $e)
    {
        echo " Erreur ! ".$e->getMessage();
    }
}

echo ("<script> window.location.replace(\"../views/CMarketing-Newsletter.php\"); </script>");

}
?>