<?PHP
include "configC.php";
class AdminC {

	
	function ajouterAdmin($admin){
		$sql="insert into admin (ID,pseudo,mail,Adresse,image,passwd,NumTel,IDP) values (:ID,:pseudo,:mail,:Adresse,:image,:passwd,:NumTel,:IDP)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
		$ID=$admin->getID();
		$Pseudo=$admin->getPseudo();
		$Mail=$admin->getMail();
		$Adress=$admin->getAdress();
		$Image=$admin->getImage();
		$Passwd=$admin->getPasswd();
		$NumTel=$admin->getNumTel();
		$IDP=$admin->getIDP();


		$req->bindValue(':ID',$ID);
		$req->bindValue(':pseudo',$Pseudo);
		$req->bindValue(':mail',$Mail);
		$req->bindValue(':Adresse',$Adress);
		$req->bindValue(':image',$Image);
		$req->bindValue(':passwd',$Passwd);
		$req->bindValue(':NumTel',$NumTel);
		$req->bindValue(':IDP',$IDP);


            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficheradmins(){
		//$sql="SElECT * From admin e inner join formationphp.admin a on e.cin= a.cin";
		$sql="SElECT * From admin";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerAdmin($ID){
		$sql="DELETE FROM admin where ID= :ID";
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
	function modifierAdmin($admin,$ID){
		$sql="UPDaTE admin SET ID=:IDD,pseudo=:pseudo,mail=:mail,Adresse=:Adresse,image=:image,passwd=:passwd,NumTel=:NumTel,IDP=:IDP where ID=:ID";
		
		$db = config::getConnexion();
try{		
        $req=$db->prepare($sql);

		$IDD=$admin->getID();
		$Pseudo=$admin->getPseudo();
		$Mail=$admin->getMail();
		$Adresse=$admin->getAdress();
		$Image=$admin->getImage();
		$Passwd=$admin->getPasswd();
		$NumTel=$admin->getNumTel();
		$IDP=$admin->getIDP();


		$datas = array(':IDD'=>$IDD, ':ID'=>$ID, ':pseudo'=>$Pseudo, ':mail'=>$Mail,':Adresse'=>$Adresse,':image'=>$Image,':passwd'=>$Passwd,':NumTel'=>$NumTel,':IDP'=>$IDP);
		$req->bindValue(':IDD',$IDD);
		$req->bindValue(':ID',$ID);
		$req->bindValue(':pseudo',$Pseudo);
		$req->bindValue(':mail',$Mail);
		$req->bindValue(':Adresse',$Adresse);
		$req->bindValue(':image',$Image);
		$req->bindValue(':passwd',$Passwd);
		$req->bindValue(':NumTel',$NumTel);
		$req->bindValue(':IDP',$IDP);
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
	}

	function recupererAdmin($ID){
		$sql="SELECT * from admin where ID='$ID' ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeadmins($pseudo){
		$sql="SELECT * from admin where pseudo like '%$pseudo%' ";
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
		$sql="SElECT * From admin";
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
		$sql="SELECT * from admin order by pseudo ASC ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
		}
	}

	
	function loginAdmin($mail,$mdp){
		$sql="SElECT * From admin where mail='".$mail."' and passwd='".$mdp."'";
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