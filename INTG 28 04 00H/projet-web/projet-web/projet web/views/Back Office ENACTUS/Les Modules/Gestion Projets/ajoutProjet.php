<?PHP
include "../../../../entities/Projet.php";
include "../../../../core/ProjetC.php";

if(isset($_POST['nomProjet'])&&isset($_POST['ODD']))
{
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
$idP="P".strtotime(date('H:i:s'));
$Projet1=new Projet($idP,$_POST['nomProjet'],date('Y/m/d H:i:s'),$file_store,$_POST['ODD']);
$Projet1C=new ProjetC();
$Projet1C->ajouterProjet($Projet1);


/////On ajoute un dossier projet dans le front
$dir_source = '../../../FrontOfficeEnactus/Projet/MODAL';
$dir_dest = '../../../FrontOfficeEnactus/Projet/'.$_POST['nomProjet'];



if (!file_exists($dir_dest))
{
mkdir($dir_dest, 0755);
$dir_iterator = new RecursiveDirectoryIterator($dir_source, RecursiveDirectoryIterator::SKIP_DOTS);
$iterator = new RecursiveIteratorIterator($dir_iterator, RecursiveIteratorIterator::SELF_FIRST); 
foreach($iterator as $element){

   if($element->isDir()){
      mkdir($dir_dest . DIRECTORY_SEPARATOR . $iterator->getSubPathName());
   } 
   else{
      copy($element, $dir_dest . DIRECTORY_SEPARATOR . $iterator->getSubPathName());
   }
}

$dir_source2 = '../../../FrontOfficeEnactus/client/Projet/MODAL';
$dir_dest2 = '../../../FrontOfficeEnactus/client/Projet/'.$_POST['nomProjet'];
if (!file_exists($dir_dest2))
{
mkdir($dir_dest2, 0755);
$dir_iterator = new RecursiveDirectoryIterator($dir_source2, RecursiveDirectoryIterator::SKIP_DOTS);
$iterator = new RecursiveIteratorIterator($dir_iterator, RecursiveIteratorIterator::SELF_FIRST); 
foreach($iterator as $element){

   if($element->isDir()){
      mkdir($dir_dest2 . DIRECTORY_SEPARATOR . $iterator->getSubPathName());
   } 
   else{
      copy($element, $dir_dest2 . DIRECTORY_SEPARATOR . $iterator->getSubPathName());
   }
}
}

////On ajoute un dossier pour les images des produits
$dir_dest = '../gestion produit/php/views/Les Projets/'.$idP;
if (!file_exists($dir_dest))
{
mkdir($dir_dest, 0755);
}
}
}
header('Location: CProjets.php');

?>