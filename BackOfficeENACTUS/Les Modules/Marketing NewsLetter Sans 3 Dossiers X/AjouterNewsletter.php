<html>
<head>
	<title>Ajouter Newsletter</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");
if(isset($_POST['Submit'])) {	
	$libelle = mysqli_real_escape_string($mysqli, $_POST['Libelle_Newsletter']);
	$liste = mysqli_real_escape_string($mysqli, $_POST['ListeAutre_Newsletter']);
    $Objet = mysqli_real_escape_string($mysqli, $_POST['Objet_Newsletter']);
    $Message = $_POST['Message_Newsletter'] ;
    $Etat = 0;
	// checking empty fields
	if(empty($libelle) || empty($liste)  || empty($Objet) || empty($Message) ) {	
        
        echo " <script> alert(' Erreur : Ajout Newsletter'); </script> ";

        echo " <script>javascript:self.history.back();</script> ";
    } 
    else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO newsletter(Libelle,ListeEnvoi,ObjetMail,MessageMail,Etat) VALUES('$libelle','$liste','$Objet','$Message','$Etat')");
		
		//display success message
		echo " <script> alert(' Ajout Newsletter Réussi '); </script> ";
        header("Location:CMarkiting.php");
        
	}
}
?>
</body>
</html>
