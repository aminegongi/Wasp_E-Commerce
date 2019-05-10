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

class Panier{
	private $ID_Panier;
	private $ID_Client;
	private $ID_Projet;
	private $ID_Produit;
	private $Quantite;
    

	function __construct($ID_Client,$ID_Projet,$ID_Produit,$Quantite){
		$this->ID_Client=$ID_Client;
		$this->ID_Projet=$ID_Projet;
		$this->ID_Produit=$ID_Produit;
		$this->Quantite=$Quantite;
	}

	function getID_Panier(){
		return $this->ID_Panier;
	}
	function getID_Client(){
		return $this->ID_Client;
	}
	function getID_Projet(){
		return $this->ID_Projet;
	}
	function getID_Produit(){
		return $this->ID_Produit;
	}
	function getQuantite(){
		return $this->Quantite;
	}
	

    function setID_Panier($ref){
        $this->ID_Panier=$ref;
    }
	function setID_Client($nom){
		$this->ID_client=$nom;
	}
	function setID_Projet($tc){
		$this->ID_Projet=$tc;
	}
	function setID_Produit($p){
		$this->ID_Produit=$p;
	}
	function setQuantite($p){
		$this->Quantite=$p;
	}
}


?>
