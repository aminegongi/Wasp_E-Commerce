<?PHP
include "../config.php";
class Recommandationc {

	
	function ajouterRecommandation($Recommandation){
		$sql="insert into recommandation (nom_du_produit,categorie,cible,picture) values (:nom_du_produit, :categorie,:cible,:picture)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $nom_du_produit=$Recommandation->getnom_du_produit();
        $categorie=$Recommandation->getcategorie();
        $cible=$Recommandation->getcible();
        $picture=$Recommandation->getpicture();
        
		$req->bindValue(':nom_du_produit',$nom_du_produit);
		$req->bindValue(':categorie',$categorie);
		$req->bindValue(':cible',$cible);
		$req->bindValue(':picture',$picture);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherRecommandation(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From recommandation";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerRecommandation($nom_du_produit){
		$sql="DELETE FROM recommandation where nom_du_produit= :nom_du_produit";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':nom_du_produit',$nom_du_produit);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierRecommandation($recommandation,$nom_du_produit){
		$sql="UPDATE recommandation SET nom_du_produit=:nom_du_produitt, categorie=:categorie,cible=:cible,picture=:picture WHERE nom_du_produit=:nom_du_produit";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$nom_du_produitt=$recommandation->getnom_du_produit();
        $categorie=$recommandation->getcategorie();
        $cible=$recommandation->getcible();
        $picture=$recommandation->getpicture();
        
		$datas = array(':nom_du_produitt'=>$nom_du_produitt, ':nom_du_produit'=>$nom_du_produit, ':categorie'=>$categorie,':cible'=>$cible,':picture'=>$picture);
		$req->bindValue(':nom_du_produitt',$nom_du_produitt);
		$req->bindValue(':nom_du_produit',$nom_du_produit);
		$req->bindValue(':categorie',$categorie);
		$req->bindValue(':cible',$cible);
		$req->bindValue(':picture',$picture);
		
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererRecommandation($nom_du_produit){
		$sql="SELECT * from recommandation where nom_du_produit='$nom_du_produit'";
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