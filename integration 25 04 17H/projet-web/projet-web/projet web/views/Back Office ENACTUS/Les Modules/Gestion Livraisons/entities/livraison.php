<?PHP
class Livraison{
	private $id;
	private $idCommande;
	private $idClientDest;
	private $etat;
	private $designation;
	private $nomLivreur;


	
	function __construct($idCommande,$idClientDest,$etat,$designation,$nomLivreur){
		$this->idCommande=$idCommande;
		$this->idClientDest=$idClientDest;
		$this->etat=$etat;
		$this->designation=$designation;
		$this->nomLivreur=$nomLivreur;
		
	}
	
	function getId(){
		return $this->id;
	}
	function getIdCommande(){
		return $this->idCommande;
	}

	function getIdClientDest(){
		return $this->idClientDest;
	}
	function getEtat(){
		return $this->etat;
	}
	function getDesignation()
	{
		return $this->designation;
	}
	function getnomLivreur(){
		return $this->nomLivreur;
	}
	
	
	
}

?>