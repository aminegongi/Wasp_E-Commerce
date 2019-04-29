<?PHP
include "configLivreur.php";

class LivreurC {
/*function afficherlivreur ($livreur){
		echo "Matricule Fiscal: ".$livreur->getMatriculeFiscal()."<br>";
		echo "Nom: ".$livreur->getNom()."<br>"; }*/
		
	
	
	function ajouterLivreur($livreur){
		$sql="insert into livreur (matricule,nom,mail,mobile,fix,fax) values (:matriculeFiscal, :nom,:mail,:mobile,:fix,:fax)";
		$db = configLiv::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $matriculeFiscal=$livreur->getMatriculeFiscal();
        $nom=$livreur->getNom();
        $mail=$livreur->getMail();
        $mobile=$livreur->getMobile();
        $fix=$livreur->getFix();
        $fax=$livreur->getFax();

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
	
	function afficherLivreur(){
		
		$sql="SElECT * From livreur";
		$db = configLiv::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function rechercherLivreur($valueToSearch){

    $sql = "SELECT * FROM `flivreur` WHERE CONCAT(`matricule`, `nom`, `mail`, `mobile`, `fix`, `fax`) LIKE '%".$valueToSearch."%'";
    $search_result = configLiv::filterTable($sql);
		
	return $search_result;        	

	}
	function rechercherlivreurEmpty(){

    $sql = "SELECT * FROM `flivreur` ";
    $search_result = configLiv::filterTable($sql);
		
	return $search_result;        	

	}

	function supprimerLivreur($matriculeFiscal){
		$sql="DELETE FROM flivreur where matricule= :matriculeFiscal";
		$db = configLiv::getConnexion();
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
	



	function modifierLivreur($livreur,$matriculeFiscal){
		$sql="UPDATE flivreur SET matricule=:matt, nom=:nom , mail=:mail,mobile=:mobile,fix=:fix,fax=:fax WHERE matricule=:matriculeFiscal";
		
		$db = configLiv::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$matt=$livreur->getMatriculeFiscal();
        $nom=$livreur->getNom();
        $mail=$livreur->getMail();
        $mobile=$livreur->getMobile();
        $fix=$livreur->getFix();
        $fax=$livreur->getFax();
        
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
	function recupererlivreur($matriculeFiscal){
		$sql="SELECT * from flivreur where matricule='$matriculeFiscal'";
		$db = configLiv::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function recupererNomLivreur()
	{

		$dbhandle= new mysqli('localhost','root','','bweb');
		echo $dbhandle->connect_error;
		$sql=" SELECT (nom) FROM `livreur` ";
		$result=$dbhandle->query($sql);
		return $result;
			
	}
	function recupererDescLivreur()
	{

		$dbhandle= new mysqli('localhost','root','','bweb');
		echo $dbhandle->connect_error;
		$sql=" SELECT nom,description FROM `livreur`  ";
		$result=$dbhandle->query($sql);
		return $result;
			
	}
	
	
}

?>