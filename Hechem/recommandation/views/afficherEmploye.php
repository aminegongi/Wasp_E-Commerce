<?PHP
include "../core/employeC.php";
$employe1C=new RecommandationC();
$listeRecommandation=$employe1C->afficherRecommandation();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>nom_du_produit</td>
<td>categorie</td>
<td>cible</td>
<td>picture</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeRecommandation as $row){
	?>
	<tr>
	<td><?PHP echo $row['nom_du_produit']; ?></td>
	<td><?PHP echo $row['categorie']; ?></td>
	<td><?PHP echo $row['cible']; ?></td>
	<td><?PHP echo $row['picture']; ?></td>
	<td><form method="POST" action="supprimerEmploye.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['nom_du_produit']; ?>" name="nom_du_produit">
	</form>
	</td>
	<td><a href="modifierEmploye.php?nom_du_produit=<?PHP echo $row['nom_du_produit']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


