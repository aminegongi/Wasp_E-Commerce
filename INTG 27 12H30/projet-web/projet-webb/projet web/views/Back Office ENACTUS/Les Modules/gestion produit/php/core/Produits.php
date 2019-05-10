<?PHP
require_once "config.php";
//include "../entities/employe.php";
class Produits {
function afficherProduits ($produit){
		echo "Reference: ".$produit->getReference()."<br>";
		echo "Nom: ".$produit->getNom()."<br>";
		echo "Categorie: ".$produit->getCategorie()."<br>";
		echo "Prix-HT: ".$produit->getPrixHT()."<br>";
		echo "Prix: ".$produit->getPrix()."<br>";
        echo "Quantite: ".$produit->getQuantite()."<br>";
        echo "Date: ".$produit->getDate()."<br>";
        echo "Description: ".$produit->getDescription()."<br>";
        echo "ID Projet: ".$produit->getIdprojet()."<br>";
	}
	/*function calculerSalaire($employe){
		echo $employe->getNbHeures() * $employe->getTarifHoraire();
	}*/
	function ajouterProduits($produit){
		$sql="insert into produit (reference,nom,categorie,prixHT,prix,quantite,date,description,id_projet) values (:reference, :nom,:categorie,:prixHT,:prix,:quantite,:date,:description,:id_projet)"; /**/
		$db = config3::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $reference=$produit->getReference();
        $nom=$produit->getNom();
        $categorie=$produit->getCategorie();
        $prixHT=$produit->getPrixHT();
        $prix=$produit->getPrix();
        $quantite=$produit->getQuantite();
        $date=$produit->getDate();
        $description=$produit->getDescription();
        $id_projet=$produit->getIdprojet();

		$req->bindValue(':reference',$reference);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':categorie',$categorie);
		$req->bindValue(':prixHT',$prixHT);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':quantite',$quantite);
		$req->bindValue(':date',$date);
		$req->bindValue(':description',$description);
		$req->bindValue(':id_projet',$id_projet);
            $req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherProduitss(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From produit ";
		$db = config3::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerProduits($reference){
		$sql="DELETE FROM produit where reference= :reference";
		$db = config3::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':reference',$reference);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierProduit($Produit,$id){
	    //$reference='123';
        //$reference=urlencode($reference);
        //$sql="UPDATE produit SET reference=:reference, nom=:nom,categorie=:categorie,prixHT=:prixHT,prix=:prix,quantite=:quantite,date=:date,description=:description WHERE reference='#1111' ";
        $sql="UPDATE produit SET  reference=:reference,nom=:nom,categorie=:categorie,prixHT=:prixHT,prix=:prix,quantite=:quantite,date=:date,description=:description,id_projet=:id_projet WHERE id=:id ";
        //$sql="UPDATE produit SET  nom=:nom,categorie=:categorie WHERE nom='fahed' ";
        $db = config3::getConnexion();
        //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
        try{
            $req=$db->prepare($sql);


            $reference=$Produit->getReference();
            $nom=$Produit->getNom();
            $categorie=$Produit->getCategorie();
            $prixHT=$Produit->getPrixHT();
            $prix=$Produit->getPrix();
            $quantite=$Produit->getQuantite();
            $date=$Produit->getDate();
            $description=$Produit->getDescription();
            $id_projet=$Produit->getIdprojet();
           // $datas = array(':reference'=>$reference, ':ref'=>$ref, ':nom'=>$nom,':categorie'=>$categorie,':prixHT'=>$prixHT,':prix'=>$prix,,':quantite'=>$quantite,':date'=>$date,':description'=>$description);
            //$req->bindValue(':ref',$ref);

            $req->bindValue(':id',$id);
            $req->bindValue(':reference',$reference);
            $req->bindValue(':nom',$nom);
            $req->bindValue(':categorie',$categorie);
            $req->bindValue(':prixHT',$prixHT);
            $req->bindValue(':prix',$prix);
            $req->bindValue(':quantite',$quantite);
            $req->bindValue(':date',$date);
            $req->bindValue(':description',$description);
            $req->bindValue(':id_projet',$id_projet);

            $s=$req->execute();
            // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
           // echo " Les datas : " ;
           // print_r($datas);
        }

	}
	function recupererProduit($reference){
		$sql="SELECT * from produit where reference='$reference' ";

		$db = config3::getConnexion();
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
		$db = config3::getConnexion();
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