<?PHP
include "../config.php";

class PersonneC {
/*function afficherSociete ($societe){
		echo "Matricule Fiscal: ".$societe->getMatriculeFiscal()."<br>";
		echo "Nom: ".$societe->getNom()."<br>"; }*/
		
	
	
	function ajouterPersonne($personne){
		$sql="insert into fpersonne (cin,nom,prenom,mail,telephone,adresse) values (:cin, :nom,:prenom,:mail,:telephone,:adresse)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $cin=$personne->getCin();
        $nom=$personne->getNom();
        $prenom=$personne->getPrenom();
        $mail=$personne->getMail();
        $telephone=$personne->getTelephone();
        $pays=$personne->getAdresse();
        

		$req->bindValue(':cin',$cin);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':telephone',$telephone);
		$req->bindValue(':adresse',$pays);
		

            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherPersonne(){
		
		$sql="SElECT * From fpersonne";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerPersonne($cin){
		$sql="DELETE FROM fpersonne where cin= :cin";
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

	function rechercherPersonne($valueToSearch){

    $sql = "SELECT * FROM `fpersonne` WHERE CONCAT(`cin`, `nom`, `mail`, `telephone`, `prenom`, `adresse`) LIKE '%".$valueToSearch."%'";
    $search_result = config::filterTable($sql);
		
	return $search_result;        	

	}
	function rechercherPersonneEmpty(){

    $sql = "SELECT * FROM `fpersonne` ";
    $search_result = config::filterTable($sql);
		
	return $search_result;        	

	}
	function afficherT($type){
		if ($type=="nomDesc")
		{
    $sql = "SELECT * FROM `fpersonne` order by nom desc ";
    $search_result = config::filterTable($sql);
		
	return $search_result;
	}

	else if ($type=="nomAsc")
		{
    $sql = "SELECT * FROM `fpersonne` order by nom asc ";
    $search_result = config::filterTable($sql);
		
	return $search_result;
	} 

	else if ($type=="prenomDesc")
		{
    $sql = "SELECT * FROM `fpersonne` order by prenom desc ";
    $search_result = config::filterTable($sql);
		
	return $search_result;
	}

	else if ($type=="prenomAsc")
		{
    $sql = "SELECT * FROM `fpersonne` order by prenom asc ";
    $search_result = config::filterTable($sql);
		
	return $search_result;
	}        	

	}
	function modifierPersonne($personne,$cin){
		$sql="UPDATE fpersonne SET cin=:cinn, nom=:nom ,prenom=:prenom, mail=:mail, telephone=:telephone,adresse=:pays WHERE cin=:cin";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$cinn=$personne->getCin();
        $nom=$personne->getNom();
        $prenom=$personne->getPrenom();
        $mail=$personne->getMail();
        $telephone=$personne->getTelephone();
        $pays=$personne->getAdresse();
        
        
		//$datas = array(':matt'=>$matt, ':matriculeFiscal'=>$cin, ':nom'=>$nom);
		
		$req->bindValue(':cinn',$cinn);
		
		$req->bindValue(':cin',$cin);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':telephone',$telephone);
		$req->bindValue(':pays',$pays);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  //print_r($datas);
        }
		
	}
	function recupererPersonne($cin){
		$sql="SELECT * from fpersonne where cin='$cin'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeEmployes($tarif){
		$sql="SELECT * from employe where tarifHoraire=$tarif";
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