<?PHP
include "../config.php";
class AddNewsletterC {

	function AjouterAdresseListeContact($mail){
		$db = config::getConnexion();

		$sql="INSERT INTO abonne_newsletter(Email) VALUES(:mail)";
		
        $req=$db->prepare($sql);
		$req->bindValue(':mail',$mail);
		try{
			$req->execute();
           	// header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}	
}

?>