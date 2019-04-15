<?PHP
include "../entities/Banniere.php";
include "../core/BanniereC.php";

if (isset($_POST['Nom_Banniere']) and isset($_POST['DateD_Banniere']) and isset($_POST['DateF_Banniere']) 
and isset($_POST['URL_Banniere']) and isset($_POST['Desc_Banniere']) and isset($_FILES['Image_Banniere']['name']) and !empty($_POST['CheckBoxEspace']) )
{
	$espace="";
	foreach($_POST['CheckBoxEspace'] as $sel)
	{
		$espace.=$sel.";";
	}
	$espace=substr($espace,0,-1);
	
$statusMsg = '';

$targetDir = "../../../images/ImageBanniereUpload/";
$fileName = basename($_FILES['Image_Banniere']['name']);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
move_uploaded_file($_FILES['Image_Banniere']['tmp_name'],$targetFilePath);

/*
$allowTypes = array('jpg','png','jpeg','gif','pdf');
if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_POST['Image_Banniere'], $targetFilePath)){
            // Insert image file name into database
            $insert = $db->query("INSERT into images (file_name, uploaded_on) VALUES ('".$fileName."', NOW())");
            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }

// Display status message
echo $statusMsg;
*/
	
	
	$BanniereA=new Banniere($_POST['Nom_Banniere'],$espace,$_POST['DateD_Banniere'],
							$_POST['DateF_Banniere'],$_POST['URL_Banniere'],$_POST['Desc_Banniere'],$fileName);
	//Partie2
	
	//var_dump($BanniereA);

	
	//Partie3
	$BanniereAC=new BanniereC();
	$BanniereAC->ajouterBanniere($BanniereA);
	header('Location: CMarketing-Banniere.php');
}
else
{
	echo "vérifier les champs";
}
//*/

?>