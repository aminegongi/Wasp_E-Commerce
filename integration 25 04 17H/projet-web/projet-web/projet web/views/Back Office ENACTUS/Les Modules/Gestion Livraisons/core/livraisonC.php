<?PHP
include "config.php";

class LivraisonC {

		
	
	function ajouterLivraison($livraison){
		$sql="  INSERT INTO `livraison`( `idCommande`, `idClientDest`, `etat`, `designation`, `nomLivreur`, `dateConfirmerLiv`) VALUES (:idCommande,:idClientDest,:etat,:designation,:nomLivreur,now())  ";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $idCommande=$livraison->getIdCommande();
        $idClientDest=$livraison->getIdClientDest();
        $etat=$livraison->getEtat();
        $designation=$livraison->getDesignation();
        $nomLivreur=$livraison->getNomLivreur();
        

		
		$req->bindValue(':idClientDest',$idClientDest);
		$req->bindValue(':idCommande',$idCommande);
		$req->bindValue(':etat',$etat);
		$req->bindValue(':designation',$designation);
		$req->bindValue(':nomLivreur',$nomLivreur);
		

            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherLivraison(){
		
		$sql="SELECT * From livraison";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function rechercherLivraison($valueToSearch){

    $sql = "SELECT * FROM `livraison` WHERE CONCAT(`idClientDest`, `NomLivreur`) LIKE '%".$valueToSearch."%'";
    $search_result = config::filterTable($sql);
		
	return $search_result;        	

	}
	function rechercherLivraisonEmpty(){

    $sql = "SELECT * FROM `livraison` ";
    $search_result = config::filterTable($sql);
		
	return $search_result;        	

	}

	

	function supprimerLivraison($id){
		$sql="DELETE FROM livraison where id= :id";
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



	function modifierLivraison($livraison,$id){
		$sql="UPDATE livraison SET destinataire=:destinataire , etat=:etat,designation=:designation,livreur=:livreur WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idd=$livraison->getId();
        $destinataire=$livraison->getDestinataire();
        $etat=$livraison->getEtat();
        $designation=$livraison->getDesignation();
        $livreur=$livraison->getLivreur();
        
		//$datas = array(':matt'=>$matt, ':id'=>$cin, ':destinataire'=>$destinataire);
		
		
		$req->bindValue(':id',$id);
		$req->bindValue(':destinataire',$destinataire);
		$req->bindValue(':etat',$etat);
		$req->bindValue(':designation',$designation);
		$req->bindValue(':livreur',$livreur);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererLivraison($id){
		$sql="SELECT * from livraison where id='$id'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


	function pieChart()
	{

		$dbhandle= new mysqli('localhost','root','','bweb');
echo $dbhandle->connect_error;
$sql=" SELECT count(nomLivreur),nomLivreur FROM `livraison` group by nomLivreur  ";
$result=$dbhandle->query($sql);
return $result;
	
	
}



function barChart(){

		$dbhandle= new mysqli('localhost','root','','bweb');
echo $dbhandle->connect_error;
$sql=" SELECT nomLivreur,AVG(DATEDIFF(`dateFinLiv`, `dateDebutLiv`)) from livraison where `dateFinLiv` is not null GROUP BY nomLivreur ";
$result=$dbhandle->query($sql);
return $result;
	
	
}

function recupererDernierId(){
		$sql="  SELECT id FROM livraison ORDER BY id DESC LIMIT 1 ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		
		foreach ($liste as $row) {
			$x=$row['id'];
		}
		return $x ;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

function recupererEtatLivraison($id){
	$sql="  SELECT etat FROM livraison where id='$id' ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		
		foreach ($liste as $row) {
			$x=$row['etat'];
		}
		return $x ;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }

}

}






?>