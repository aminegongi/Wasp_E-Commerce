<?PHP
class Commande{
	private $reference;
	private $nom_client;
	private $type_client;
	private $prix_total;
	private $paiment;
    private $etat;
    private $date;
    private $description;

	function __construct($reference,$nom_client,$type_client,$prix_total,$paiment,$etat,$date,$description){
		$this->reference=$reference;
		$this->nom_client=$nom_client;
		$this->type_client=$type_client;
		$this->prix_total=$prix_total;
		$this->paiment=$paiment;
		$this->etat=$etat;
		$this->date=$date;
		$this->description=$description;
	}

	function getReference(){
		return $this->reference;
	}
	function getNomclient(){
		return $this->nom_client;
	}
	function getTypeclient(){
		return $this->type_client;
	}
	function getPrixtotal(){
		return $this->prix_total;
	}
	function getPaiment(){
		return $this->paiment;
	}
	function getEtat (){
	    return $this->etat;
    }
    function getDate (){
        return $this->date;
    }
    function getDescription (){
        return $this->description;
    }


    function setReference($ref){
        $this->reference=$ref;
    }
	function setNomclient($nom){
		$this->nom_client=$nom;
	}
	function setTypeclient($tc){
		$this->type_client=$tc;
	}
	function setPrixtotal($p){
		$this->prix_total=$p;
	}
	function setPaiment($p){
		$this->paiment=$p;
	}
    function setEtat($p){
        $this->etat=$p;
    }
    function setDate($p){
        $this->date=$p;
    }
    function setDescription($p){
        $this->description=$p;
    }

}

?>
