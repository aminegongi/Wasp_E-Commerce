<?PHP
require_once "config.php";
class DemandeC {

	function ajouterDemande($demande){
		$sql="insert into demande
				(nomProduit,image, id_commande,
				id_client, nom_livreur, date_demande,
				description, etat, id_admin) 
				values
				(:nomProduit,:image, :id_commande,
				:id_client, 'N/A', now(), :description,
				:etat, :id_admin)";
		
		$db = config10::getConnexion();
		try{
            $req=$db->prepare($sql);
            
            $nomProduit=$demande->getNomProduit();
            $image=$demande->getImage();
			$id_commande=$demande->getID_commande();
			$id_client=$demande->getID_client();
			$description=$demande->getDescription();
			$id_admin=$demande->getID_admin();
			$etat="Demande non traitée";
            $req->bindValue(':nomProduit',$nomProduit);
            $req->bindValue(':image',$image);
			$req->bindValue(':id_commande',$id_commande);
			$req->bindValue(':id_client',$id_client);
			$req->bindValue(':description',$description);
			$req->bindValue(':etat',$etat);
			$req->bindValue(':id_admin',$id_admin);
			$req->execute();    
			
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
    
    function afficherDemandeFront($id){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From demande where id_client='$id'";
		$db = config10::getConnexion();
		try{
            $liste=$db->query($sql);
            return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }
    
    function recupererProduit(){
		$sql="SELECT * from produit";
		$db = config10::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    
	function modifierDemande($demande,$id_demande){
		$sql="UPDATE demande SET  nomProduit=:nomProduit, image=:image, description=:description, id_commande=:id_commande WHERE id_demande=:id_demande";
		
		$db = config10::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$nomProduit=$demande->getNomProduit();
		$image=$demande->getImage();
		$description=$demande->getDescription();
		$id_commande=$demande->getID_commande();
		//$id_demande=$demande->getID_demande();
		$id_client=$demande->getID_client();
		
		$req->bindValue(':nomProduit',$nomProduit);
		$req->bindValue(':image',$image);
		$req->bindValue(':description',$description);
		$req->bindValue(':id_commande',$id_commande);
		$req->bindValue(':id_demande',$id_demande);
		//$req->bindValue(':id_client',$id_client);

        $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
        }
		
	}
	function supprimerDemande( $id_demande){
		$sql="DELETE FROM demande where id_demande=:id_demande";
		$db = config10::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_demande',$id_demande);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function afficherDemandeBack(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From demande where etat=0";
		$db = config10::getConnexion();
		try{
            $liste=$db->query($sql);
            return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function ajouterLivraison($id_commande, $id_client){
		$sql="insert into livraison (idCommande, idClientDest , etat , designation , nomLivreur ,dateConfirmerLiv) values (:id_commande,:id_client,'confirme','Nouvelle Commande & LIVRAISON' , 'DHL:(internationale)' , now() )";
		$db = config10::getConnexion();
		try{
			$req=$db->prepare($sql);
			$req->bindValue(':id_commande',$id_commande);
			$req->bindValue(':id_client',$id_client);
			$req->execute();  
		}
		catch (Exception $e){
            die('Erreur: '.$e->getMessage());
		}
		
	}
	function recupererDemande($id_demande){
		$sql="SElECT * From demande where id_demande=$id_demande";
		$db = config10::getConnexion();
		try{
            $liste=$db->query($sql);
			return $liste;  
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
		}
		
	}

	function modifierEtatDemande($id_demande, $etat){
		$sql="UPDATE demande SET  etat='$etat', date_traitement=now() WHERE id_demande='$id_demande'";
		
		$db = config10::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
        }
		
	}
	
	
	
	function afficherDemandeSuper($option){
		$etat1="Demande non traitée";
		$etat2="Demande Confirmée";
		$etat3="Demande Annulée";
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		if($option == "option1"){
		$sql="SElECT * From demande";
		}elseif($option == "option2"){
		$sql="SElECT * From demande where etat ='$etat1'";
		}elseif($option == "option3"){
		$sql="SElECT * From demande where etat='$etat3'";
		}elseif($option == "option4"){
		$sql="SElECT * From demande where etat='$etat2'";
		}
		$db = config10::getConnexion();
		try{
            $liste=$db->query($sql);
            return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function selectMonth(){
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
			$db = config10::getConnexion();
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
			$db = config10::getConnexion();
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
		$sql=" SELECT id_admin,AVG(TIMESTAMPDIFF(hour,`date_demande`, `date_traitement`)) as diff from demande where (`date_traitement` is not null and month(`date_traitement`)='$x' ) GROUP BY id_admin  ";
			$db = config10::getConnexion();
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
		$sql=" select distinct(id_admin) from demande";
			$db = config10::getConnexion();
			try{
			$liste=$db->query($sql);
			return $liste ;	
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
	}
	
	


	/*
	function rechercherListeReclamation($categorie){
		$sql="SELECT * from reclamation where categorie=$categorie";
		$db = config10::getConnexion();
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
		
		$db = config10::getConnexion();
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
		
	}*/

}

?>