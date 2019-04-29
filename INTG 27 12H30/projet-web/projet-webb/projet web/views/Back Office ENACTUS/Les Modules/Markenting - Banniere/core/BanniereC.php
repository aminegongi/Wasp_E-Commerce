<?PHP
require_once "../../../../../core/configC.php";
class BanniereC {

function ajouterBanniere($Banniere){
		$sql="INSERT INTO Banniere(Nom,espaceBanniereProjet,dateDebut,dateFin,lienURL,description,image) VALUES(:nom,:espaceBP,:dateD,:dateF,:url,:desc,:img)";
		$db = config::getConnexion();
		try{
		$req=$db->prepare($sql);
		$nom=$Banniere->getnom();
		$espBP=$Banniere->getEspaceBan();
		$dateD=$Banniere->getdateDebut();
		$dateF=$Banniere->getdateFin();
		$url=$Banniere->getlienURL();
		$desc=$Banniere->getdescription();
		$img=$Banniere->getImages();
		
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
	
function afficherBanniere($col,$order){
	if($col=="" && $order == "")
	{
		$sql="SElECT * From Banniere order by id ASC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
		}	
	}
	else
	{
		$sql="SElECT * From Banniere Order by ".$col." ".$order;
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

function supprimerBanniere($id){
		$sql="DELETE FROM Banniere where id= :id";
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

function modifierBanniere($Banniere,$id){
		$sql="UPDATE Banniere SET Nom=:nom,espaceBanniereProjet=:espaceBP,dateDebut=:dateD,dateFin=:dateF,lienURL=:url,description=:desc,image=:img WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
		try{		

		$req=$db->prepare($sql);
		$nom=$Banniere->getnom();
		$espBP=$Banniere->getEspaceBan();
		$dateD=$Banniere->getdateDebut();
		$dateF=$Banniere->getdateFin();
		$url=$Banniere->getlienURL();
		$desc=$Banniere->getdescription();
		$img=$Banniere->getImages();
		
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

	function recupererBanniere($id){
		$sql="SELECT * from Banniere where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeEmployes($tarif){
		$sql="SELECT * from employe where tarifHoraire=$tarif";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function AffectationBanniereEspace($idespace)
	{
		
	}
}

?>