<?PHP
include "../entities/employe.php";
include "../core/employeC.php";
$recommandation=new recommandation('a','BEN Ahmed','Salah','e');
$recommandationC=new recommandationC();
$recommandationC->afficherRecommandation($recommandation);
echo "****************";
echo "<br>";
echo "nom_du_produit:".$recommandation->getnom_du_produit();
echo "<br>";
echo "categorie:".$recommandation->getcategorie();
echo "<br>";
echo "cible:".$recommandation->getcible();
echo "<br>";
echo "picture:".$recommandation->getpicture();
echo "<br>";

echo "<br>";


?>