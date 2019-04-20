<?PHP
include "../../../../config.php";
class PointsProduitsC {

function ajouterPointsProduits($PointsProduits){
		$sql="INSERT INTO PointsProduits ( idProd , PointProd ) VALUES(:ip , :pp)";
		$db = config::getConnexion();
		try{
		$req=$db->prepare($sql);
		$idprod=$PointsProduits->getIdProd();
		$pointprod=$PointsProduits->getPointsProd();
		$req->bindValue(':ip',$idprod);
		$req->bindValue(':pp',$pointprod);
		$req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
function afficherPointsProduits(){
			$sql="SElECT * From PointsProduits";
			$db = config::getConnexion();
			try{
			$liste=$db->query($sql);
			return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
	}

function supprimerPointsProduits($id){
		$sql="DELETE FROM PointsProduits where id= :id";
		$db = config::getConnexion();
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

function modifierPointsProduits($PointsProduits,$id){
		$sql="UPDATE PointsProduits SET idProd=:ip , PointProd=:pp WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
		try{		

		$req=$db->prepare($sql);
		$idprod=$PointsProduits->getIdProd();
		$pointprod=$PointsProduits->getPointsProd();

		$req->bindValue(':id',$id);
		$req->bindValue(':ip',$idprod);
		$req->bindValue(':pp',$pointprod);

		$req->execute();
        }
		catch (Exception $e)
		{
            echo " Erreur ! ".$e->getMessage();
        }
		
	}


	function recupererPointsProduits($id){
		$sql="SELECT * from PointsProduits where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>