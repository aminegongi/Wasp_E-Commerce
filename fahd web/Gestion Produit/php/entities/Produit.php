<?PHP
class Produit{
	private $reference;
	private $nom;
	private $categorie;
	private $prixHT;
	private $prix;
    private $quantite;
    private $date;
    private $description;

	function __construct($reference,$nom,$categorie,$prixHT,$prix,$quantite,$date,$description){
		$this->reference=$reference;
		$this->nom=$nom;
		$this->categorie=$categorie;
		$this->prixHT=$prixHT;
		$this->prix=$prix;
		$this->quantite=$quantite;
		$this->date=$date;
		$this->description=$description;
	}
	
	function getReference(){
		return $this->reference;
	}
	function getNom(){
		return $this->nom;
	}
	function getCategorie(){
		return $this->categorie;
	}
	function getPrixHT(){
		return $this->prixHT;
	}
	function getPrix(){
		return $this->prix;
	}
	function getQuantite (){
	    return $this->quantite;
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
	function setNom($nom){
		$this->nom=$nom;
	}
	function setCategorie($categorie){
		$this->categorie=$categorie;
	}
	function setPrixHT($pht){
		$this->prixHT=$pht;
	}
	function setPrix($p){
		$this->prix=$p;
	}
    function setQuantite($p){
        $this->quantite=$p;
    }
    function setDate($p){
        $this->date=$p;
    }
    function setDescription($p){
        $this->description=$p;
    }
	
}

?>