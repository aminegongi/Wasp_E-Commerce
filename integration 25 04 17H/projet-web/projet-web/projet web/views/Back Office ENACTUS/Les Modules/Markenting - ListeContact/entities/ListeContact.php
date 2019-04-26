<?PHP
class ListeContact{
	private $type;
	private $nb_envoi;
	
	function __construct($type){
		$this->type=$type;
		$this->nb_envoi=0;
	}
	
	function getType(){
		return $this->type;
	}
	function getNb_envoi(){
		return $this->nb_envoi;
	}

	function setType($type){
		$this->type=$type;
	}
	function setNb_envoi($nb_envoi){
		$this->nb_envoi=$nb_envoi;
	}

	
}

?>