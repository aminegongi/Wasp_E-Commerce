<?PHP
require_once  "configP.php";
class ProjetC {

    
	function ajouterProjet($Projet){
		$sql="insert into projet (ID,nom,date,logo,type) values (:ID,:nom,:date,:logo,:type)";
		$db = configP::getConnexion();
		try{
        $req=$db->prepare($sql);
		
		$ID=$Projet->getID();
		$nom=$Projet->getnom();
		$date=$Projet->getdate();
		$logo=$Projet->getlogo();
		$type=$Projet->gettype();



		$req->bindValue(':ID',$ID);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':date',$date);
		$req->bindValue(':logo',$logo);
		$req->bindValue(':type',$type);


            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherProjets(){
		//$sql="SElECT * From Projet e inner join formationphp.Projet a on e.cin= a.cin";
		$sql="SElECT * From projet";
		$db = configP::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerProjet($ID){
		$sql="DELETE FROM projet where ID= :ID";
		$db = configP::getConnexion();
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
	function modifierProjet($Projet,$ID){
		$sql="UPDaTE projet SET ID=:IDD,nom=:nom,date=:date,logo=:logo,type=:type where ID=:ID";
		
		$db = configP::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);

		$IDD=$Projet->getID();
		$nom=$Projet->getnom();
		$date=$Projet->getdate();
		$logo=$Projet->getlogo();
		$type=$Projet->gettype();



		$datas = array(':IDD'=>$IDD, ':ID'=>$ID, ':nom'=>$nom, ':date'=>$date,':logo'=>$logo,':type'=>$type);
		$req->bindValue(':IDD',$IDD);
		$req->bindValue(':ID',$ID);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':date',$date);
		$req->bindValue(':logo',$logo);
		$req->bindValue(':type',$type);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
	}

    function recupererProjet($ID)
    {
		$sql="select * from projet where ID='$ID' ";
		$db = configP::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeProjets($nom){
		$sql="SELECT * from projet where nom like '%$nom%' ";
		$db = configP::getConnexion();
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
		$sql="SElECT * From projet";
		$db = configP::getConnexion();	
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
    function afficherODD()
	{
		$sql="SElECT * From odd";
		$db = configP::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function tri()
	{
		$sql="SELECT * from projet order by nom ASC ";
		$db = configP::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
		}
			
	}
	function recupererID($IDP)
	{
		$sql="SELECT * from admin where IDP='$IDP'";
		$db = configP::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function ProjetSupprimer($ID)
	{
		$sql="UPDaTE admin SET IDP='undefined' where ID=".$ID."";
		$db = configP::getConnexion();
		try{		
			$req=$db->prepare($sql);
			$s=$req->execute();
		   }
		catch (Exception $e)
		{
            echo " Erreur ! ".$e->getMessage();
        }
	}
	function recupererProduit_id_projet($ID)
    {
        $sql="SELECT * from produit where id_projet='$ID' ";

		$db = configP::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
	}
	function SupprimerProduit_id_projet($ID)
    {
		$sql="Delete from produit where id_projet='$ID' ";

		$db = configP::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
	}
	function Delete_File($path)
    {
        if (is_dir($path) === true)
        {
            $files = array_diff(scandir($path), array('.', '..'));

            foreach ($files as $file)
            {
                //this->Delete_File(realpath($path) . '/' . $file);
                $this->Delete_File(realpath($path).'/'.$file);
            }

            return rmdir($path);
        }

        else if (is_file($path) === true)
        {
            return unlink($path);
        }

        return false;
    }
}

?>