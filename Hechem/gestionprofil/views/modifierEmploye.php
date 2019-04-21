<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/employe.php";
include "../core/employeC.php";
if (isset($_GET['cin'])){
	$gestionprofilC=new GestionprofilC();
    $result=$gestionprofilC->recupererGestionprofil($_GET['cin']);
	foreach($result as $row){
		$cin=$row['cin'];
		$nom=$row['nom'];
		$prenom=$row['prenom'];
		$adresse=$row['adresse'];
		$mail=$row['mail'];
		$telephone=$row['telephone'];
?>
<form method="POST">
<table>
<caption>Modifier Gestionprofil</caption>
<tr>
<td>CIN</td>
<td><input type="number" name="cin" value="<?PHP echo $cin ?>"></td>
</tr>
<tr>
<td>Nom</td>
<td><input type="text" name="nom" value="<?PHP echo $nom ?>"></td>
</tr>
<tr>
<td>Prenom</td>
<td><input type="text" name="prenom" value="<?PHP echo $prenom ?>"></td>
</tr>
<tr>
<td>adresse</td>
<td><input type="text" name="adresse" value="<?PHP echo $adresse ?>"></td>
</tr>
<tr>
<td>mail</td>
<td><input type="text" name="mail" value="<?PHP echo $mail ?>"></td>
</tr>
<tr>
<td>telephone</td>
<td><input type="text" name="telephone" value="<?PHP echo $telephone ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="cin_ini" value="<?PHP echo $_GET['cin'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$gestionprofil=new gestionprofil($_POST['cin'],$_POST['nom'],$_POST['prenom'],$_POST['adresse'],$_POST['mail'],$_POST['telephone']);
	$gestionprofilC->modifierGestionprofil($gestionprofil,$_POST['cin_ini']);
	echo $_POST['cin_ini'];
	header('Location: afficherEmploye.php');
}
?>
</body>
</HTMl>