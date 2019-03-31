<?php
include "../../../../entities/admin.php";
include "../../../../core/AdminC.php";
if (isset($_POST['Valider'])){
    if (isset($_FILES['imageAdmin']))
    {
        $file_name =$_FILES['imageAdmin']['name'];
        $file_tem_loc= $_FILES['imageAdmin']['tmp_name'];
        $file_store ="upload/".$file_name;
        move_uploaded_file($file_tem_loc,$file_store);    
    }
    else
    {
        $file_store="upload/unknown.png";
    }
    $Admin=new Admin(strtotime(date('H:i:s')),$_POST['username'],$_POST['email'],$_POST['select_City'],$file_store,$_POST['password'],$_POST['phone']);
    $AdminC->modifierAdmin($Admin,$_POST['ID_ini']);
    echo $_POST['ID_ini'];
    header('Location: CAdmins.php');
}
else
{
    echo "tehcha";
}
?>