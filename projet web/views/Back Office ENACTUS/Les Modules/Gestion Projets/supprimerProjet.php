<?PHP
include "../../../../entities/Projet.php";
include "../../../../core/ProjetC.php";
$ProjetC=new ProjetC();
if (isset($_POST["ID"])){

  $Admin=$ProjetC->recupererID($_POST["ID"]);
  foreach ($Admin as $key)
  {
    $IDAdmin=$key['ID'];
  }

    $result=$ProjetC->recupererProjet($_POST["ID"]);
    foreach($result as $row){
      $nom=$row['nom'];
      $id=$row['ID'];

      ///////////////////// Supprimer le dossier du projet front 
    $dossier ='../../../FrontOfficeEnactus/Projet/'.$nom;
   $ProjetC->Delete_File($dossier);
   $dossier1 ='../../../FrontOfficeEnactus/client/Projet/'.$nom;
   $ProjetC->Delete_File($dossier1);

    /////////////////// Supprimer le dossier des produits
    $dossierP ='../gestion produit/php/views/Les Projets/'.$id;
    $ProjetC->Delete_File($dossierP);

    // On supprime le dossier cible

  }
    $ProjetC->ProjetSupprimer($IDAdmin);
    $ProjetC->supprimerProjet($_POST["ID"]);
    $ProjetC->SupprimerProduit_id_projet($_POST["ID"]);
    header('Location:CProjets.php');
}
?>