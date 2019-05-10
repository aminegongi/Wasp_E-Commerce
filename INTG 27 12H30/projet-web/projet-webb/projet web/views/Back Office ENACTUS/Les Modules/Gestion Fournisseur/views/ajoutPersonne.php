<?PHP
include "../entities/personne.php";
include "../core/personneC.php";

if (isset($_POST['nom']) and isset($_POST['prenom']) ) // les champs obligatoires pour passer la requette ?? ! 
{ 

$personne1=new Personne($_POST['cin'],$_POST['nom'], $_POST['prenom'] ,$_POST['mail'],$_POST['telephone'],$_POST['adressetotal']);

$personne1C=new personneC();

$personne1C->ajouterPersonne($personne1);
header('Location: afficherPersonne.php');
}else{
	echo "vérifier les champs";
}


?>