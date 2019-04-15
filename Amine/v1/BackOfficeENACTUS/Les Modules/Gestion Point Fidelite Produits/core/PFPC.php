<?PHP
include "../../../config.php";
class PFP {

function ajouterPFP($PFP){
		$sql="INSERT INTO PFP(Nom,espacePFPProjet,dateDebut,dateFin,lienURL,description,image) VALUES(:nom,:espaceBP,:dateD,:dateF,:url,:desc,:img)";
		$db = config::getConnexion();
		try{
		$req=$db->prepare($sql);
		$nom=$PFP->getnom();
		$espBP=$PFP->getEspaceBan();
		$dateD=$PFP->getdateDebut();
		$dateF=$PFP->getdateFin();
		$url=$PFP->getlienURL();
		$desc=$PFP->getdescription();
		$img=$PFP->getImages();
		
		$req->bindValue(':nom',$nom);
		$req->bindValue(':espaceBP',$espBP);
		$req->bindValue(':dateD',$dateD);
		$req->bindValue(':dateF',$dateF);
		$req->bindValue(':url',$url);
		$req->bindValue(':desc',$desc);
		$req->bindValue(':img',$img);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
function afficherPFP(){
		$sql="SElECT * From PFP order by id ASC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

function supprimerPFP($id){
		$sql="DELETE FROM PFP where id= :id";
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

function modifierPFP($PFP,$id){
		$sql="UPDATE PFP SET Nom=:nom,espacePFPProjet=:espaceBP,dateDebut=:dateD,dateFin=:dateF,lienURL=:url,description=:desc,image=:img WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
		try{		

		$req=$db->prepare($sql);
		$nom=$PFP->getnom();
		$espBP=$PFP->getEspaceBan();
		$dateD=$PFP->getdateDebut();
		$dateF=$PFP->getdateFin();
		$url=$PFP->getlienURL();
		$desc=$PFP->getdescription();
		$img=$PFP->getImages();
		
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':espaceBP',$espBP);
		$req->bindValue(':dateD',$dateD);
		$req->bindValue(':dateF',$dateF);
		$req->bindValue(':url',$url);
		$req->bindValue(':desc',$desc);
		$req->bindValue(':img',$img);
		
		$s=$req->execute();
        }
		catch (Exception $e)
		{
            echo " Erreur ! ".$e->getMessage();
        }
		
	}

	function recupererPFP($id){
		$sql="SELECT * from PFP where id=$id";
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