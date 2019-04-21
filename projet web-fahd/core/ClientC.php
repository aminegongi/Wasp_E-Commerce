<?PHP
include_once "config.php";
class ClientC {
	function ajouterClient($Client){
		$sql="insert into Client (ID,pseudo,mail,Adresse,image,passwd,NumTel,nom,prenom) values (:ID,:pseudo,:mail,:Adresse,:image,:passwd,:NumTel,:nom,:prenom)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		$ID=$Client->getID();
		$Pseudo=$Client->getPseudo();
		$Mail=$Client->getMail();
		$Adress=$Client->getAdress();
		$Image=$Client->getImage();
		$Passwd=$Client->getPasswd();
		$NumTel=$Client->getNumTel();
		$Nom=$Client->getNom();
		$Prenom=$Client->getPrenom();


		$req->bindValue(':ID',$ID);
		$req->bindValue(':pseudo',$Pseudo);
		$req->bindValue(':mail',$Mail);
		$req->bindValue(':Adresse',$Adress);
		$req->bindValue(':image',$Image);
		$req->bindValue(':passwd',$Passwd);
		$req->bindValue(':NumTel',$NumTel);
		$req->bindValue(':nom',$Nom);
		$req->bindValue(':prenom',$Prenom);


            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherClients(){
		//$sql="SElECT * From Client e inner join formationphp.Client a on e.cin= a.cin";
		$sql="SElECT * From Client";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerClient($ID){
		$sql="DELETE FROM Client where ID= :ID";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':ID',$ID);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierClient($Client,$ID){
		$sql="UPDaTE Client SET ID=:IDD,pseudo=:pseudo,mail=:mail,Adresse=:Adresse,image=:image,passwd=:passwd,NumTel=:NumTel,nom:=nom,prenom:=prenom where ID=:ID";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);

		$IDD=$Client->getID();
		$Pseudo=$Client->getPseudo();
		$Mail=$Client->getMail();
		$Adresse=$Client->getAdress();
		$Image=$Client->getImage();
		$Passwd=$Client->getPasswd();
		$NumTel=$Client->getNumTel();
		$Nom=$Client->getNom();
		$Prenom=$Client->getPrenom();

		$datas = array(':IDD'=>$IDD, ':ID'=>$ID, ':pseudo'=>$Pseudo, ':mail'=>$Mail,':Adresse'=>$Adresse,':image'=>$Image,':passwd'=>$Passwd,':nom'=>$Nom,':prenom'=>$Prenom);
		$req->bindValue(':IDD',$IDD);
		$req->bindValue(':ID',$ID);
		$req->bindValue(':pseudo',$Pseudo);
		$req->bindValue(':mail',$Mail);
		$req->bindValue(':Adresse',$Adresse);
		$req->bindValue(':image',$Image);
		$req->bindValue(':passwd',$Passwd);
		$req->bindValue(':NumTel',$NumTel);
		$req->bindValue(':nom',$Nom);
		$req->bindValue(':prenom',$Prenom);

            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
	}

	function recupererClient($ID){
		$sql="SELECT * from Client where ID='$ID' ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeClients($pseudo){
		$sql="SELECT * from Client where nom like '%$Nom%' ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function afficherGouvernerat()
	{
		$sql="SElECT * From gouvernorat";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function count()
	{
		$sql="SElECT * From Client";
		$db = config::getConnexion();	
		try{
			$count=$db->query($sql);
			if ($count->rowCount())
			{
				return $count->rowCount();
			}
			else
			{
				echo "false";
			}

			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
	}
	function tri()
	{
		$sql="SELECT * from Client order by nom ASC ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
		}
	}

	function loginClient($mail,$mdp){
		$sql="SElECT * From client where mail='".$mail."' and passwd='".$mdp."' ";
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