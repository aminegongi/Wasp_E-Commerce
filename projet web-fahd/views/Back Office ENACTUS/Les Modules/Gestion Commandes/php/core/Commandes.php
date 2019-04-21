<?PHP
require_once "config.php";


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
        $db = config2::getConnexion();
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
        $db = config2::getConnexion();
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
        $db = config2::getConnexion();
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
        $db = config2::getConnexion();
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

        $db = config2::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

}

class Paniers {
    function afficherPaniers ($commande){
        echo "ID_Panier: ".$commande->getID_Panier()."<br>";
        echo "ID_CLient: ".$commande->getID_Client()."<br>";
        echo "ID_PRojet: ".$commande->getID_Projet()."<br>";
        echo "ID_Produit: ".$commande->getID_Produit()."<br>";
        echo "Quantite: ".$commande->getQuantite()."<br>";
        }
    /*function calculerSalaire($employe){
        echo $employe->getNbHeures() * $employe->getTarifHoraire();
    }*/
    function ajouterPaniers($commande){
        $sql="insert into panier (ID_Client,ID_Projet,ID_Produit,Quantite) values (:ID_Client,:ID_Projet,:ID_Produit,:Quantite)"; /**/
        $db = config2::getConnexion();
        try{
            $req=$db->prepare($sql);

            $ID_Client=$commande->getID_Client();
            $ID_Projet=$commande->getID_Projet();
            $ID_Produit=$commande->getID_Produit();
            $Quantite=$commande->getQuantite();
            

            $req->bindValue(':ID_Client',$ID_Client);
            $req->bindValue(':ID_Projet',$ID_Projet);
            $req->bindValue(':ID_Produit',$ID_Produit);
            $req->bindValue(':Quantite',$Quantite);
            
            $req->execute();

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

    }

    function afficherPanierss(){
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SElECT * From panier ";
        $db = config2::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function supprimerPaniers($reference){
        $sql="DELETE FROM panier where ID_Panier= :reference";
        $db = config2::getConnexion();
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
    function modifierPanier($commande,$id){
        $sql="UPDATE panier SET  ID_Panier=:reference,ID_Client=:nom_client,ID_Projet=:type_client,ID_Produit=:prix_total,Quantite=:paiment WHERE ID_Panier=:id ";
        $db = config2::getConnexion();
        try{
            $req=$db->prepare($sql);


            $reference=$commande->getID_Panier();
            $nom_client=$commande->getID_Client();
            $type_client=$commande->getID_Projet();
            $prix_total=$commande->getID_Produit();
            $paiment=$commande->getQuantite();
            
            $req->bindValue(':id',$id);
            $req->bindValue(':reference',$reference);
            $req->bindValue(':nom_client',$nom_client);
            $req->bindValue(':type_client',$type_client);
            $req->bindValue(':prix_total',$prix_total);
            $req->bindValue(':paiment',$paiment);


            $s=$req->execute();
            // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
        }
    }
    function recupererPanier($reference){
        $sql="SELECT * from panier where ID_Client='$reference' ";

        $db = config2::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function recupererPanier_produit($reference,$IDC){
        $sql="SELECT * from panier where ID_Produit='$reference' and ID_Client='$IDC' ";

        $db = config2::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function modifierPanier_quantite($id,$qant,$IDC)
    {   $produit1 = new Paniers();
        $result=$produit1->recupererPanier_produit($id,$IDC);
        foreach ($result as $key)
        {
            $old_q=$key['Quantite'];
        }

        $sql="UPDATE panier SET  Quantite=:quantite WHERE ID_Produit=:id ";

        $db = config3::getConnexion();

        try{
            $req=$db->prepare($sql);
            $qt=$old_q+$qant;

            $req->bindValue(':id',$id);
            $req->bindValue(':quantite',$qt);

            $s=$req->execute();

        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();

        }
    }

    function modifierPanier_quantite2($id,$qant)
    {      //  echo "<script> alert('eza'); </script>";

        //echo "<script> alert(".$id.$qant."); </script>";

        $sql="UPDATE panier SET Quantite=:id WHERE ID_Panier=:quantite ";

        $db = config2::getConnexion();
/*

        $req->execute();
*/



                    try{
                        $req=$db->prepare($sql);
                        $req->bindValue(':id',$id);
                        $req->bindValue(':quantite',$qant);
                     //   echo "<script> alert('succ'); </script>";
                        $s=$req->execute();

                    }
                    catch (Exception $e){
                        echo " Erreur ! ".$e->getMessage();
                       // echo "<script> alert('erreur'); </script>";
                    }
    }

    function ViderPanier($id)
    {      //  echo "<script> alert('eza'); </script>";
        //echo "<script> alert(".$id.$qant."); </script>";

        $sql="DELETE FROM panier WHERE ID_Client=:id ";

        $db = config2::getConnexion();
        /*
                $req->execute();
        */
        try{
            $req=$db->prepare($sql);
            $req->bindValue(':id',$id);
            //   echo "<script> alert('succ'); </script>";
            $s=$req->execute();

        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
            // echo "<script> alert('erreur'); </script>";
        }
    }
}

?>