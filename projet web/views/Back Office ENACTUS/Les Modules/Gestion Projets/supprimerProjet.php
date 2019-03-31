<?PHP
include "../../../../entities/Projet.php";
include "../../../../core/ProjetC.php";
$ProjetC=new ProjetC();
if (isset($_POST["ID"])){
    echo "<script> if (confirm(\"Voulez vous vraiment supprimer ?\")){";
    echo "alert(\"Suppression Effectué !\");";
    $ProjetC->supprimerProjet($_POST["ID"]);
    header('Location:CProjets.php');
      echo "}";
     echo "else {alert(\"Résiliation\");}";
    echo "</script>";
}
?>