<?PHP
include "../../../config.php";
class ListeContactC {

function ajouterListeContact($ListeContact){
		$sql="INSERT INTO ListeDiffusion(Type) VALUES(:type)";
		$db = config::getConnexion();
		try{
		$req=$db->prepare($sql);
		$type=$ListeContact->getType();
		$req->bindValue(':type',$type);
		$req->execute();
		$sql1="CREATE TABLE test.".$type."( id INT NOT NULL AUTO_INCREMENT , Email VARCHAR(255) NOT NULL , telephone VARCHAR(255) NULL DEFAULT NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM;";
		$req1=$db->prepare($sql1);
		$req1->execute();
		
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
function afficherListeContact($col,$order){
	if($col=="" && $order == "")
		{
			$sql="SElECT * From ListeDiffusion";
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
			$sql="SElECT * From ListeDiffusion Order by ".$col." ".$order;
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

function supprimerListeContact($id){
		$sql="DELETE FROM ListeDiffusion where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
			$sql1="SELECT Type from ListeDiffusion where id=$id";
			$nomTable=$db->query($sql1);
			foreach ($nomTable as $row)
			{
			$table=$row['Type'];
			}
			$sql2="Drop table ".$table;
			$req1=$db->prepare($sql2);
			$req->execute();
			$req1->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

function modifierListeContact($ListeContact,$id){
		$sql="UPDATE ListeDiffusion SET Type =:typ WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
		try{		

		$req=$db->prepare($sql);
		$type=$ListeContact->getType();
		
		$datas = array(':typ'=>$type,':id'=>$id);

		$req->bindValue(':id',$id);
		$req->bindValue(':typ',$type);
		
		$s=$req->execute();
        }
		catch (Exception $e)
		{
            echo " Erreur ! ".$e->getMessage();
   			echo " Les datas : " ;
  			print_r($datas);
        }
		
	}


	function recupererListeContact($id){
		$sql="SELECT * from ListeDiffusion where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function AjouterAdresseListeContact($id,$mail,$tel){
		$db = config::getConnexion();
		$sql1="SELECT Type from ListeDiffusion where id=$id";
		$nomTable=$db->query($sql1);
		foreach ($nomTable as $row)
		{
			$table=$row['Type'];
		}

		$sql="INSERT INTO ".$table."(Email) VALUES(:mail)";
		
        $req=$db->prepare($sql);
		$req->bindValue(':mail',$mail);
		try{
			$req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}	

	function AfficherAdresseListeContact($id){
		$db = config::getConnexion();
		$sql1="SELECT Type from ListeDiffusion where id=$id";
		$nomTable=$db->query($sql1);
		foreach ($nomTable as $row)
		{
			$table=$row['Type'];
		}

		$sql="SElECT * From ".$table;
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function supprimerAdresseListeContact($id,$NomTable){
		$sql="DELETE FROM ".$NomTable." where id= :id ";
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

	function recupererAdresseListeContact($id,$NomTable){
		$sql="SELECT * from $NomTable where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function modifierAdresseListeContact($mail,$id,$NomTable){
		$sql="UPDATE $NomTable SET Email =:email WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
		try{		

		$req=$db->prepare($sql);
		
		$datas = array(':email'=>$mail,':id'=>$id);

		$req->bindValue(':id',$id);
		$req->bindValue(':email',$mail);
		
		$s=$req->execute();
        }
		catch (Exception $e)
		{
            echo " Erreur ! ".$e->getMessage();
   			echo " Les datas : " ;
  			print_r($datas);
        }
		
	}
}

?>