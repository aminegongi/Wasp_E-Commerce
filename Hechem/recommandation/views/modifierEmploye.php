<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/employe.php";
include "../core/employeC.php";
if (isset($_GET['nom_du_produit'])){
	$recommandationC=new RecommandationC();
    $result=$recommandationC->recupererRecommandation($_GET['nom_du_produit']);
	foreach($result as $row){
		$nom_du_produit=$row['nom_du_produit'];
		$categorie=$row['categorie'];
		$cible=$row['cible'];
		$picture=$row['picture'];
		
?>
<form method="POST">
<table>
<caption>Modifier Recommandation</caption>
<tr>
<td>nom du produit</td>
<td><input type="text" name="nom_du_produit" value="<?PHP echo $nom_du_produit ?>"></td>
</tr>
<tr>
<td>categorie</td>
<td><input type="text" name="categorie" value="<?PHP echo $categorie ?>"></td>
</tr>
<tr>
<td>cible</td>
<td><input type="text" name="cible" value="<?PHP echo $cible ?>"></td>
</tr>
<tr>
<td>picture</td>
<td><input type="text" name="picture" value="<?PHP echo $picture ?>"></td>
</tr>

<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="nom_ini" value="<?PHP echo $_GET['nom_du_produit'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$Recommandation=new Recommandation($_POST['nom_du_produit'],$_POST['categorie'],$_POST['cible'],$_POST['picture']);
	$recommandationC->modifierRecommandation($Recommandation,$_POST['nom_ini']);
	echo $_POST['nom_ini'];
	header('Location: afficherEmploye.php');
}
?>
</body>
</HTMl>