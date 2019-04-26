<?PHP 
include "config.php";
if(isset($_POST['ajouter'])){
    if(isset($_POST['nomCategorie'])){
        $sql="insert into categorie (nomCategorie) values (:nomCategorie)";
		$db = config9::getConnexion();
		try{
            $req=$db->prepare($sql);
            $nomCategorie=$_POST['nomCategorie'];
			$req->bindValue(':nomCategorie',$nomCategorie);
			$req->execute();    
			
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
        header('Location: ../view/afficher_reclamation_super_admin.php');
    }else{
        echo "verifier les champs";
    }
}
?>