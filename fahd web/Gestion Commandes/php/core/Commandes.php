<?PHP
include "../config.php";

class Commandes {
    function afficherCommandes ($commande){
        echo "Reference: ".$commande->getReference()."<br>";
        echo "Nom client: ".$commande->getNomclient()."<br>";
        echo "Type client: ".$commande->gettypeclient()."<br>";
        echo "Prix total: ".$commande->getPrixtotal()."<br>";
        echo "Paiment: ".$commande->getPaiment()."<br>";
        echo "Etat: ".$commande->getEtat()."<br>";
        echo "Date: ".$commande->getDate()."<br>";
        echo "Description: ".$commande->getDescription()."<br>";
    }
    /*function calculerSalaire($employe){
        echo $employe->getNbHeures() * $employe->getTarifHoraire();
    }*/
    function ajouterCommandes($commande){
        $sql="insert into commande (reference,nom_client,type_client,prix_total,paiment,etat,date,description) values (:reference, :nom_client,:type_client,:prix_total,:paiment,:etat,:date,:description)"; /**/
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);

            $reference=$commande->getReference();
            $nom_client=$commande->getNomclient();
            $type_client=$commande->getTypeclient();
            $prix_total=$commande->getPrixtotal();
            $paiment=$commande->getPaiment();
            $etat=$commande->getEtat();
            $date=$commande->getDate();
            $description=$commande->getDescription();

            $req->bindValue(':reference',$reference);
            $req->bindValue(':nom_client',$nom_client);
            $req->bindValue(':type_client',$type_client);
            $req->bindValue(':prix_total',$prix_total);
            $req->bindValue(':paiment',$paiment);
            $req->bindValue(':etat',$etat);
            $req->bindValue(':date',$date);
            $req->bindValue(':description',$description);

            $req->execute();

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

    }

    function afficherCommandess(){
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SElECT * From commande ";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function supprimerCommandes($reference){
        $sql="DELETE FROM commande where reference= :reference";
        $db = config::getConnexion();
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
    function modifierCommande($commande,$id){
        $sql="UPDATE commande SET  reference=:reference,nom_client=:nom_client,type_client=:type_client,prix_total=:prix_total,paiment=:paiment,etat=:etat,date=:date,description=:description WHERE id=:id ";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);


            $reference=$commande->getReference();
            $nom_client=$commande->getNomclient();
            $type_client=$commande->getTypeclient();
            $prix_total=$commande->getPrixtotal();
            $paiment=$commande->getPaiment();
            $etat=$commande->getEtat();
            $date=$commande->getDate();
            $description=$commande->getDescription();

            $req->bindValue(':id',$id);
            $req->bindValue(':reference',$reference);
            $req->bindValue(':nom_client',$nom_client);
            $req->bindValue(':type_client',$type_client);
            $req->bindValue(':prix_total',$prix_total);
            $req->bindValue(':paiment',$paiment);
            $req->bindValue(':etat',$etat);
            $req->bindValue(':date',$date);
            $req->bindValue(':description',$description);

            $s=$req->execute();
            // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
        }
    }
    function recupererCommande($reference){
        $sql="SELECT * from commande where reference='$reference' ";

        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

   /* function rechercherListeEmployes($tarif){
        $sql="SELECT * from employe where tarifHoraire=$tarif";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }*/
    /*function Delete_File($path)
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
    }*/
}

?>