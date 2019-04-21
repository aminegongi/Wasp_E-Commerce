<?PHP
include "../../../../entities/admin.php";
include "../../../../core/AdminC.php";

if (isset($_FILES['imageAdmin']))
{
$file_name =$_FILES['imageAdmin']['name'];
$file_tem_loc= $_FILES['imageAdmin']['tmp_name'];
if ($file_tem_loc=='')
{
   $file_store="upload/unknown.png";
}
else
{
   $file_store ="upload/".$file_name;
   move_uploaded_file($file_tem_loc,$file_store); 
} 
}
else
{
    $file_store="upload/unknown.png";
}
if(isset($_POST["username"]) && !empty($_POST["username"]))
{
   echo "ajouter";
   $admin1=new Admin(strtotime(date('H:i:s')),$_POST['username'],$_POST['email'],$_POST['select_City'],$file_store,$_POST['password'],$_POST['phone'],$_POST['IDP']);
   $admin1C=new AdminC();
   $admin1C->ajouterAdmin($admin1);
   header('Location: CAdmins.php');
}
else
{
   echo '<script>alert("Vous n\'avez pas remplie les champs correctement ! ");</script>';
   echo '<script>window.location = \'CAdmins.php\'</script>';
 //header('Location: CAdmins.php');
}
?>