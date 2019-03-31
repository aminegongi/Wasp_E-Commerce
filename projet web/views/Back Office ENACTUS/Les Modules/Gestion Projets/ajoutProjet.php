<?PHP
include "../../../../entities/Projet.php";
include "../../../../core/ProjetC.php";

if (isset($_FILES['imageLogo']))
{
$file_name =$_FILES['imageLogo']['name'];
$file_tem_loc= $_FILES['imageLogo']['tmp_name'];
if ($file_tem_loc=='')
{
   $file_store="Unknown.png";
}
else
{
   $file_store ="upload/".$file_name;
   move_uploaded_file($file_tem_loc,$file_store); 
} 
}
else
{
    $file_store="Unknown.png";
}
$Projet1=new Projet("P".strtotime(date('H:i:s')),$_POST['nomProjet'],date('Y/m/d H:i:s'),$file_store,$_POST['ODD']);
$Projet1C=new ProjetC();
$Projet1C->ajouterProjet($Projet1);
header('Location: CProjets.php');

?>