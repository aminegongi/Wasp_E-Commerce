<?PHP
include "../../../entities/client.php";
include "../../../core/ClientC.php";

$file_store="upload/unknown.png";
if(isset($_POST["nom"]) && !empty($_POST["nom"]))
{
   $Client1=new Client("C".strtotime(date('H:i:s')),$_POST['username'],$_POST['email'],$_POST['select_City'],$file_store,$_POST['password'],$_POST['phone'],$_POST['nom'],$_POST['prenom']);
   $Client1C=new ClientC();
   $Client1C->ajouterClient($Client1);
    header('Location: login.php');
}
else
{
   echo "NOT";
 //header('Location: CClients.php');
}
?>