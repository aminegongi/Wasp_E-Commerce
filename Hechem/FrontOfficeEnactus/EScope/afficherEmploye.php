<?PHP
include "core/employeC.php";
$gestionprofil1C=new GestionprofilC();
$listeGestionprofils=$gestionprofil1C->afficherGestionprofils();

//var_dump($listeGestionprofils->fetchAll());
?>
<table border="1">
<tr>
<td>Cin</td>
<td>Nom</td>
<td>Prenom</td>
<td>adresse</td>
<td>mail</td>
<td>telephone</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeGestionprofils as $row){
	?>
	<tr>
	<td><?PHP echo $row['cin']; ?></td>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['prenom']; ?></td>
	<td><?PHP echo $row['adresse']; ?></td>
	<td><?PHP echo $row['mail']; ?></td>
	<td><?PHP echo $row['telephone']; ?></td>
	<td><form method="POST" action="supprimerEmploye.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['cin']; ?>" name="cin">
	</form>
	</td>
	<td><a href="modifierEmploye.php?cin=<?PHP echo $row['cin']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


