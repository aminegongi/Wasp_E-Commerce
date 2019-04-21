<?PHP
include "../../../../config.php";
class PointsClientsC {
	
function afficherPointsClients(){
			$sql="SElECT * From PointsClients";
			$db = config::getConnexion();
			try{
			$liste=$db->query($sql);
			return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
	}

function AjouterPointsClients($idProduit,$idClient){
		$sql="Select PointProd From pointsproduits where idProd=$idProduit ";
		$db = config::getConnexion();
		$liste=$db->query($sql);
		$nbpoint=0;
		foreach($liste as $rr)
		{
		 	$nbpoint=$rr['PointProd'];
		}
		echo $nbpoint;
		$sql="UPDATE PointsClients SET PointProdC=PointProdC+$nbpoint WHERE idClient=:idc";
		$db = config::getConnexion();
		$req=$db->prepare($sql);
		$req->bindValue(':idc',$idClient);
		$req->execute();	
	}

	function DiminuerPointsClients($idProduit,$idClient){
		$sql="Select PointProd From pointsproduits where idProd=$idProduit ";
		$db = config::getConnexion();
		$liste=$db->query($sql);
		$nbpoint=0;
		foreach($liste as $rr)
		{
		 	$nbpoint=$rr['PointProd'];
		}
		echo $nbpoint;
		$sql="UPDATE PointsClients SET PointProdC=PointProdC-$nbpoint WHERE idClient=:idc";
		$db = config::getConnexion();
		$req=$db->prepare($sql);
		$req->bindValue(':idc',$idClient);
		$req->execute();	
	}

}

?>