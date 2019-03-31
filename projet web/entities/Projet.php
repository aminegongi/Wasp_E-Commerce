<?PHP
class Projet{
	private $ID;
	private $nom;
	private $date;
	private $logo;
	private $type;


	function __construct($ID,$nom,$date,$logo,$type){
		$this->ID=$ID;
		$this->nom=$nom;
		$this->date=$date;
		$this->logo=$logo;
		$this->type=$type;


	}
	
	function getID(){
		return $this->ID;
	}
	function getnom(){
		return $this->nom;
	}
	function getdate(){
		return $this->date;
	}
	function gettype(){
		return $this->type;
	}

	function getlogo(){
		return $this->logo;
	}

	function setID($ID){
		$this->ID=$ID;
	}
	function setnom($nom){
		$this->nom=$nom;
	}
	function setdate($date){
		$this->date;
	}
	function settype($type){
		$this->type=$type;
	}
	function setlogo($logo){
		$this->logo=$logo;
	}
}

?>