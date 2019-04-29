<?PHP
include "../../configReco.php";
class RecommandationC {

function ajouterRecommandation($Recommandation){
		$sql="INSERT INTO Recommandation (texte,date_debut,id_produit,cible,idAdminProjet) VALUES(:texte,:date_debut,:id_produit,:cible,:idAdmin)";
		$db = config11::getConnexion();
		try{
		$req=$db->prepare($sql);
		$id=$Recommandation->getID();
		$texte=$Recommandation->getTexte();
		$date_debut=$Recommandation->getDate_debut();
		$id_produit=$Recommandation->getID_produit();
		$cible=$Recommandation->getCible();
		$id_admin_projet=$Recommandation->getID_admin_projet();

		$req->bindValue(':texte',$texte);
		$req->bindValue(':date_debut',$date_debut);
		$req->bindValue(':id_produit',$id_produit);
		$req->bindValue(':cible',$cible);
		$req->bindValue(':idAdmin',$id_admin_projet);

		$req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
function afficherRecommandation(){
			$sql="SElECT * From Recommandation";
			$db = config11::getConnexion();
			try{
			$liste=$db->query($sql);
			return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
	}

function supprimerRecommandation($id){
		$sql="DELETE FROM Recommandation where id= :id";
		$db = config11::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
			$req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

function modifierRecommandation($recommandation, $id){
		$sql="UPDATE Recommandation SET texte=:texte , date_debut=:date_debut , id_produit=:id_produit , cible=:cible  WHERE id='$id'";
		$db = config11::getConnexion();
		try{		
		$req=$db->prepare($sql);
		$texte=$recommandation->getTexte();
		$date_debut=$recommandation->getDate_debut();
		$id_produit=$recommandation->getID_produit();
		$cible=$recommandation->getCible();
	
		//print_r($Recommandation);
		$req->bindValue(':texte',$texte);
		$req->bindValue(':date_debut',$date_debut);
		$req->bindValue(':id_produit',$id_produit);
		$req->bindValue(':cible',$cible);
		$req->execute();
        }
		catch (Exception $e)
		{
            echo " Erreur ! ".$e->getMessage();
        }
		
	}


	function recupererRecommandation($idAdmin){
		$sql="SELECT * from recommandation where idAdminProjet='$idAdmin'";
		$db = config11::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function recupererProduit($idAdmin){
		$sqsl="SELECT * FROM admin where ID = '$idAdmin'";
		$db = config11::getConnexion();
		$liste1=$db->query($sqsl);
		foreach($liste1 as $row)
		{
			$idpp=$row['IDP'];
		}
		$sql="SELECT * from produit where id_projet = '$idpp' ";
		try{
		$liste=$db->query($sql);
		return $liste;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}
	}
	function recupererNomProduit($id_produit){
		$sql="SELECT * from produit where id = '$id_produit' ";
		$db = config11::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}
	}

	function recupererCible()
	{
		$sql=" select distinct(profession) from client";
			$db = config11::getConnexion();
			try{
			$liste=$db->query($sql);
			return $liste ;	
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
	}

}


?>