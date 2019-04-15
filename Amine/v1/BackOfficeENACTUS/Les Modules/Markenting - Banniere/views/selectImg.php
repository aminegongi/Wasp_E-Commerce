<?php
include "../../../config.php";
$idEspace=2; //id de kolchay
$sql="SELECT * from Banniere ";
$db = config::getConnexion();
$result=$db->query($sql);
foreach($result as $row){
    $id=$row['id'];
    $nom=$row['Nom'];
    $espace=$row['espaceBanniereProjet'];
    $dateD=$row['dateDebut'];
    $dateF=$row['dateFin'];
    $dateA=$row['dateAjout'];
    $url=$row['lienURL'];
    $desc=$row['description'];
    $cheminImage=$row['image'];
    $sql1="SELECT * FROM espacebanniereprojet WHERE NomProjet=\"$espace\"";
    $db1 = config::getConnexion();
    $result1=$db1->query($sql1);
    $numP=0;
    foreach($result1 as $row1){
        $idP=$row1['id'];
        $nomP=$row1['NomProjet'];
        $numP=$row1['NumProjet'];
    }
    if($numP==$idEspace)
    {
        $img=$cheminImage;
        $n=$nom;
        break;
    }
    else
    {
        $img="default.jpg";
        $n="ParDefaut";  
    }
}
?>
<!doctype html>
<html class="no-js" lang=""> 
<head>
</head>
<body>
<div>
<img src="../../../images/ImageBanniereUpload/<?php echo $img ?>" alt="<?php echo $n ?>">
</div>
</body>
</html>
