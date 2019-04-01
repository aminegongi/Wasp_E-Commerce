<?PHP
include "config.php";
class GestionprofilC {
function afficherGestionprofil ($gestionprofil){
		echo "Cin: ".$gestionprofil->getCin()."<br>";
		echo "Nom: ".$gestionprofil->getNom()."<br>";
		echo "Prénom: ".$gestionprofil->getPrenom()."<br>";
		echo "adresse: ".$gestionprofil->getAdresse()."<br>";
		echo "mail: ".$gestionprofil->getMail()."<br>";
		echo "telephone: ".$gestionprofil->getTelephone()."<br>";
	}
	
	function ajouterGestionprofil($gestionprofil){
		$sql="insert into gestionprofil (cin,nom,prenom,adresse,mail,telephone) values (:cin, :nom,:prenom,:adresse,:mail,:telephone)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $cin=$gestionprofil->getCin();
        $nom=$gestionprofil->getNom();
        $prenom=$gestionprofil->getPrenom();
        $mail=$gestionprofil->getMail();
        $adresse=$gestionprofil->getAdresse();
        $telephone=$gestionprofil->getTelephone();
		$req->bindValue(':cin',$cin);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':adresse',$adresse);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':telephone',$telephone);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherGestionprofils(){
		//$sql="SElECT * From gestionprofil e inner join formationphp.gestionprofil a on e.cin= a.cin";
		$sql="SElECT * From gestionprofil";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerGestionprofil($cin){
		$sql="DELETE FROM gestionprofil where cin= :cin";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':cin',$cin);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierGestionprofil($gestionprofil,$cin){
		$sql="UPDATE gestionprofil SET cin=:cinn, nom=:nom,prenom=:prenom,adresse=:adresse,mail=:mail,telephone=:telephone WHERE cin=:cin";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$cinn=$gestionprofil->getCin();
        $nom=$gestionprofil->getNom();
        $prenom=$gestionprofil->getPrenom();
        $mail=$gestionprofil->getMail();
        $adresse=$gestionprofil->getAdresse();
        $telephone=$gestionprofil->getTelephone();
		$datas = array(':cinn'=>$cinn, ':cin'=>$cin, ':nom'=>$nom,':prenom'=>$prenom,':adresse'=>$adresse,':mail'=>$mail,':telephone'=>$telephone);
		$req->bindValue(':cinn',$cinn);
		$req->bindValue(':cin',$cin);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':adresse',$adresse);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':telephone',$telephone);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererGestionprofil($cin){
		$sql="SELECT * from gestionprofil where cin=$cin";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeGestionprofils($tarif){
		$sql="SELECT * from gestionprofil where mail=$tarif";
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