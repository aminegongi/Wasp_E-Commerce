<?PHP
class Personne{
	private $cin;
	private $nom;
	private $prenom;
	private $mail;
	private $telephone;
	private $adresse;
	

	
	function __construct($cin,$nom,$prenom,$mail,$telephone,$pays){
		$this->cin=$cin;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->mail=$mail;
		$this->telephone=$telephone;
		$this->adresse=$pays;
		
	}
	
	function getCin(){
		return $this->cin;
	}
	function getNom(){
		return $this->nom;
	}
	function getPrenom(){
		return $this->prenom;
	}
	function getMail(){
		return $this->mail;
	}
	function getTelephone()
	{
		return $this->telephone;
	}
	function getAdresse(){
		return $this->adresse ;
	}
	
	
}

?>