<?PHP
include "../config.php";

class SocieteC {
/*function afficherSociete ($societe){
		echo "Matricule Fiscal: ".$societe->getMatriculeFiscal()."<br>";
		echo "Nom: ".$societe->getNom()."<br>"; }*/
		
	
	
	function ajouterSociete($societe){
		$sql="insert into fsociete (matricule,nom,mail,mobile,fix,fax) values (:matriculeFiscal, :nom,:mail,:mobile,:fix,:fax)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $matriculeFiscal=$societe->getMatriculeFiscal();
        $nom=$societe->getNom();
        $mail=$societe->getMail();
        $mobile=$societe->getMobile();
        $fix=$societe->getFix();
        $fax=$societe->getFax();

		$req->bindValue(':matriculeFiscal',$matriculeFiscal);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':mobile',$mobile);
		$req->bindValue(':fix',$fix);
		$req->bindValue(':fax',$fax);

            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherSociete(){
		
		$sql="SElECT * From fsociete";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function rechercherSociete($valueToSearch){

    $sql = "SELECT * FROM `fsociete` WHERE CONCAT(`matricule`, `nom`, `mail`, `mobile`, `fix`, `fax`) LIKE '%".$valueToSearch."%'";
    $search_result = config::filterTable($sql);
		
	return $search_result;        	

	}
	function rechercherSocieteEmpty(){

    $sql = "SELECT * FROM `fsociete` ";
    $search_result = config::filterTable($sql);
		
	return $search_result;        	

	}

	function supprimerSociete($matriculeFiscal){
		$sql="DELETE FROM fsociete where matricule= :matriculeFiscal";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':matriculeFiscal',$matriculeFiscal);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function tri()
	{
		$sql="SELECT * from fsociete order by nom ASC ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
		}
			
	}



	function modifierSociete($societe,$matriculeFiscal){
		$sql="UPDATE fsociete SET matricule=:matt, nom=:nom , mail=:mail,mobile=:mobile,fix=:fix,fax=:fax WHERE matricule=:matriculeFiscal";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$matt=$societe->getMatriculeFiscal();
        $nom=$societe->getNom();
        $mail=$societe->getMail();
        $mobile=$societe->getMobile();
        $fix=$societe->getFix();
        $fax=$societe->getFax();
        
		//$datas = array(':matt'=>$matt, ':matriculeFiscal'=>$cin, ':nom'=>$nom);
		
		$req->bindValue(':matt',$matt);
		
		$req->bindValue(':matriculeFiscal',$matriculeFiscal);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':mobile',$mobile);
		$req->bindValue(':fix',$fix);
		$req->bindValue(':fax',$fax);
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererSociete($matriculeFiscal){
		$sql="SELECT * from fsociete where matricule='$matriculeFiscal'";
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