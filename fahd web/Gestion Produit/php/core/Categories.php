<?PHP

include "../config2.php";

class Categories {
    function afficherProduits ($categorie){
        echo "Nom: ".$categorie->getNom()."<br>";

    }
    function afficherCategoriess(){
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SElECT * From categorie";
        $db = config2::getConnexion(); //config
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function ajouterCategories($categorie){
        $cat = new Categories ();
        $result = $cat->afficherCategoriess();
        foreach($result as $row){
            if ($categorie->getNom() == $row['nom'])
            { return ;}
        }

        $sql="insert into categorie (nom) values (:nom)"; /**/
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);

            $nom=$categorie->getNom();

            $req->bindValue(':nom',$nom);

            $req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

    }


   /* function supprimerCategories($reference){
        $sql="DELETE FROM produit where reference= :reference";
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
    }*/
}

?>