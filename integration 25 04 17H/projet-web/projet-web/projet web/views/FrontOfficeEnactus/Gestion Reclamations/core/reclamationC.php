<?PHP
include "config.php";
class ReclamationC {

	function ajouterReclamation($reclamation){
		$sql="insert into reclamation (categorie, designation, description, reponse, etat, date_s ,id_client) values (:categorie, :designation,:description, :reponse, :etat, now(),:idc)";
		$db = config9::getConnexion();
		try{
            $req=$db->prepare($sql);
            
            $categorie=$reclamation->getCategorie();
            $description=$reclamation->getDescription();
			$designation=$reclamation->getDesignation();
			$reponse=$reclamation->getReponse();
			$etat=$reclamation->getEtat();
			$idclient=$reclamation->getIDC();
            $req->bindValue(':categorie',$categorie);
            $req->bindValue(':description',$description);
			$req->bindValue(':designation',$designation);
			$req->bindValue(':reponse',$reponse);
			$req->bindValue(':etat',$etat);
			$req->bindValue(':idc',$idclient);
            $req->execute();    
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}

	
	function afficherReclamationSuper($option){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		if($option == "option1"){
		$sql="SElECT * From reclamation";
		}elseif($option == "option2"){
		$sql="SElECT * From reclamation where date_r IS NOT NULL";
		}elseif($option == "option3"){
		$sql="SElECT * From reclamation where date_r IS NULL";
		}
		$db = config9::getConnexion();
		try{
            $liste=$db->query($sql);
            return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function afficherReclamationFront(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From reclamation";
		$db = config9::getConnexion();
		try{
            $liste=$db->query($sql);
            return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function afficherReclamationBack(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From reclamation where etat=0";
		$db = config9::getConnexion();
		try{
            $liste=$db->query($sql);
            return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerReclamation($designation){
		$sql="DELETE FROM reclamation where designation=:designation";
		$db = config9::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':designation',$designation);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierReclamation($reclamation,$designation){
		$sql="UPDATE reclamation SET designation=:designation, categorie=:categorie, description=:description WHERE designation=:designation";
		
		$db = config9::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $categorie=$reclamation->getCategorie();
        $description=$reclamation->getDescription();
		$req->bindValue(':categorie',$categorie);
		$req->bindValue(':designation',$designation);
		$req->bindValue(':description',$description);
        $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
        }
		
	}
	function recupererReclamation($designation){
		$sql="SELECT * from reclamation where designation=$designation";
		$db = config9::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeReclamation($categorie){
		$sql="SELECT * from reclamation where categorie=$categorie";
		$db = config9::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function repondre($reponse, $designation){
		$sql="UPDATE reclamation SET reponse=:reponse, etat=1, date_r=now()  WHERE designation=:designation";
		
		$db = config9::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
		$req=$db->prepare($sql);
		$req->bindValue(':designation',$designation);
		$req->bindValue(':reponse',$reponse);
        $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
        }
		
	}


	function pieChart()
	{

	$sql="SELECT count(categorie),categorie FROM `reclamation` group by categorie";
		$db = config9::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	

}

/*function selectMonth(){
	$sql="SELECT CASE month(NOW()) 
         WHEN 1 THEN 'Janvier'
         WHEN 2 THEN 'Février'
         WHEN 3 THEN 'Mars'
         WHEN 4 THEN 'Avril'
         WHEN 5 THEN 'Mai'
         WHEN 6 THEN 'Juin'
         WHEN 7 THEN 'Juillet'
         WHEN 8 THEN 'Août'
         WHEN 9 THEN 'Septembre'
         WHEN 10 THEN 'Cctobre'
         WHEN 11 THEN 'Novembre'
         ELSE 'décembre'
END as yessine    ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		
		foreach ($liste as $row) {
			$y=$row['yessine'];
		}
		return $y;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	

}

function selectMonthNow(){
	$sql="SELECT  month(NOW()) as yessine   ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		
		foreach ($liste as $row) {
			$y=$row['yessine'];
		}
		return $y;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	

}

		function diff($x)
		{
			$sql=" SELECT idAdminProjet,AVG(TIMESTAMPDIFF(hour,`dateSoumission`, `dateReponse`)) as diff from reclamation where (`dateReponse` is not null and month(`dateReponse`)='$x' ) GROUP BY idAdminProjet  ";
				$db = config::getConnexion();
				try{
				$liste=$db->query($sql);
				return $liste ;	
				}
				catch (Exception $e){
					die('Erreur: '.$e->getMessage());
				}	
		}
		function dis()
		{
			$sql=" select distinct(idAdminProjet) from reclamation ";
				$db = config::getConnexion();
				try{
				$liste=$db->query($sql);
				return $liste ;	
				}
				catch (Exception $e){
					die('Erreur: '.$e->getMessage());
				}	
		}*/


}

?>