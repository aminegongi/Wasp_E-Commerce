<?PHP
include "../../../../entities/admin.php";
include "../../../../core/AdminC.php";
$AdminC=new AdminC();
if (isset($_POST["ID"])){
    echo "<script> if (confirm(\"Voulez vous vraiment supprimer ?\")){";
    echo "alert(\"Suppression Effectué !\");";
    $AdminC->supprimerAdmin($_POST["ID"]);
    header('Location:CAdmins.php');
      echo "}";
     echo "else {alert(\"Résiliation\");}";
    echo "</script>";
}
?>