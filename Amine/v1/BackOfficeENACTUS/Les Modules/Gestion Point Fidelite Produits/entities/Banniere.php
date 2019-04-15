<?PHP
class Banniere{
	private $nom;
	private $espaceProjet;
	private $dateDebut;
	private $dateFin;
	private $lienURL;
	private $description;
	private $images;
	
	function __construct($nom,$esp,$dateDebut,$dateFin,$lienURL,$desc,$img){
		$this->nom=$nom;
		$this->espaceProjet=$esp;
		$this->dateDebut=$dateDebut;
		$this->dateFin=$dateFin;
		$this->lienURL=$lienURL;
		$this->description=$desc;
		$this->images=$img;
	}
	
	function getnom(){
		return $this->nom;
	}
	function getEspaceBan(){
		return $this->espaceProjet;
	}
	function getdateDebut(){
		return $this->dateDebut;
	}
	function getdateFin(){
		return $this->dateFin;
	}
	function getlienURL(){
		return $this->lienURL;
	}
	function getdescription(){
		return $this->description;
	}
	function getImages(){
		return $this->images;
	}

	function setnom($nom){
		$this->nom=$nom;
	}
	function setEspaceBan($esp){
		$this->espaceProjet=$esp;
	}
	function setdateDebut($dateDebut){
		$this->dateDebut=$dateDebut;
	}
	function setdateFin($dateFin){
		$this->dateFin=$dateFin;
	}
	function setlienURL($lienURL){
		$this->lienURL=$lienURL;
	}
	function setdescription($description){
		$this->description=$description;
	}
	function setimage($img){
		$this->images=$img;
	}
}

?>