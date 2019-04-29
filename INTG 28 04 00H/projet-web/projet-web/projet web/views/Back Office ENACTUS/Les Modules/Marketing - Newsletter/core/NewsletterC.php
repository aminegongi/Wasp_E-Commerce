<?PHP
include "../../../../../core/configC.php";
class NewsletterC {

function ajouterNewsletter($Newsletter){
		$sql="INSERT INTO newsletter(Libelle,ListeEnvoi,ObjetMail,MessageMail,Etat) VALUES(:libelle,:listeEnvoi,:objetMail,:MessageMail,:etat)";
		$db = config::getConnexion();
		try{
		$req=$db->prepare($sql);
		$lib=$Newsletter->getLibelle();
		$listEnv=$Newsletter->getlisteEnvoi();
		$obj=$Newsletter->getobjetMail();
		$text=$Newsletter->gettexteMail();
		$etat=$Newsletter->getetat();
		
		$req->bindValue(':libelle',$lib);
		$req->bindValue(':listeEnvoi',$listEnv);
		$req->bindValue(':objetMail',$obj);
		$req->bindValue(':MessageMail',$text);
		$req->bindValue(':etat',$etat);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
function afficherNewsletter(){
		$sql="SElECT * From newsletter order by id ASC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

function supprimerNewsletter($id){
		$sql="DELETE FROM newsletter where id= :id";
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

function modifierNewsletter($Newsletter,$id){
		$sql="UPDATE newsletter SET Libelle=:lib ,ListeEnvoi=:list ,ObjetMail=:obj ,MessageMail=:msg WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
		try{		

		$req=$db->prepare($sql);
		$lib=$Newsletter->getLibelle();
		$listEnv=$Newsletter->getlisteEnvoi();
		$obj=$Newsletter->getobjetMail();
		$text=$Newsletter->gettexteMail();
		
		$datas = array(':lib'=>$lib, ':list'=>$listEnv, ':obj'=>$obj,':msg'=>$text,':id'=>$id);

		$req->bindValue(':id',$id);
		$req->bindValue(':lib',$lib);
		$req->bindValue(':list',$listEnv);
		$req->bindValue(':obj',$obj);
		$req->bindValue(':msg',$text);
		
		$s=$req->execute();
        }
		catch (Exception $e)
		{
            echo " Erreur ! ".$e->getMessage();
   			echo " Les datas : " ;
  			print_r($datas);
        }
		
	}

	function recupererNewsletter($id){
		$sql="SELECT * from newsletter where id=$id";
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
	
}

?>