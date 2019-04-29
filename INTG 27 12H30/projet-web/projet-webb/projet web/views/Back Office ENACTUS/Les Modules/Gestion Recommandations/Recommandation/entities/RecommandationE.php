<?PHP
class Recommandation{
	private $ID;
	private $Texte;
	private $Date_debut;
	private $ID_produit;
	private $Cible;
	private $ID_projet;
	
	function __construct($texte,$date_debut,$id_produit,$cible,$id_admin_projet){
		$this->Texte=$texte;
		$this->Date_debut=$date_debut;
		$this->ID_produit=$id_produit;
		$this->Cible=$cible;
		$this->ID_projet=$id_admin_projet;
		
	}
	
	function getid(){
		return $this->ID;
	}
	function getTexte(){
		return $this->Texte;
	}
	function getDate_debut(){
		return $this->Date_debut;
	}
	function getID_produit(){
		return $this->ID_produit;
	}
	function getCible(){
		return $this->Cible;
	}
	function getID_admin_projet(){
		return $this->ID_projet;
	}
	

	function setID($id){
		$this->ID=$id;
	
	}
	function setTexte($texte){
		$this->texte=$texte;
	}
	function setDate_debut($date_debut){
		$this->Date_debut=$date_debut;
	}function setID_produit($id_produit){
		$this->ID_produit=$id_produit;
	}
	function setCible($cible){
		$this->Cible=$cible;
	}
	function setid_admin_projet($id_admin_projet){
		$this->ID_projet=$id_admin_projet;
	}
	

	
}

?>