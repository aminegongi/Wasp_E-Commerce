<?PHP
class Gestionprofil{
	private $cin;
	private $nom;
	private $prenom;
	private $adresse;
	private $mail;
	private $telephone;
	function __construct($cin,$nom,$prenom,$adresse,$mail,$telephone){
		$this->cin=$cin;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->adresse=$adresse;
		$this->mail=$mail;
		$this->telephone=$telephone;
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
	function getAdresse(){
		return $this->adresse;
	}
    function getTelephone(){
		return $this->telephone;
	}
	function setNom($nom){
		$this->nom=$nom;
	}
	function setPrenom($prenom){
		$this->prenom;
	}
	function setMail($mail){
		$this->mail=$mail;
	}
	function setAdresse($adresse){
		$this->adresse=$adresse;
	}
	function setTelephone($telephone){
		$this->telephone=$telephone;
	}
}

?>