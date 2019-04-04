<?PHP
class Recommandation{
	private $nom_du_produit;
	private $categorie;
	private $cible;
	private $picture;
	
	function __construct($nom_du_produit,$categorie,$cible,$picture){
		$this->nom_du_produit=$nom_du_produit;
		$this->categorie=$categorie;
		$this->cible=$cible;
		$this->picture=$picture;
		
	}
	
	function getnom_du_produit(){
		return $this->nom_du_produit;
	}
	function getcategorie(){
		return $this->categorie;
	}
	function getcible(){
		return $this->cible;
	}
	function getpicture(){
		return $this->picture;
	}
	

	function setnom_du_produit($nom_du_produit){
		$this->nom_du_produit=$nom_du_produit;
	}
	function setcategorie($categorie){
		$this->categorie;
	}
	function setcible($cible){
		$this->cible=$cible;
	}
	function setpicture($picture){
		$this->picture=$picture;
	}
	
}

?>