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
        $db = config2::getConnexion();
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
}

class Projets {
    function afficherProjetss(){

        $sql="SElECT * From projet";
        $db = config2::getConnexion(); //config
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function ajouterCategories($projet){
        $pro = new Projets ();
        $result = $pro->afficherCategoriess();
        foreach($result as $row){
            if ($projet->getIdprojet() == $row['id_projet'])
            { return ;}
        }

        $sql="insert into projets (id_projet) values (:id_projet)"; /**/
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);

            $id_projet=$projet->getNom();

            $req->bindValue(':id_projet',$id_projet);

            $req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

    }
}

?>