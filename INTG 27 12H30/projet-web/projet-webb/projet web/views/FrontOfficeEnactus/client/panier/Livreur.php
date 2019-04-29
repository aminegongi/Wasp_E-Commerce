<?PHP
class Societe{
	private $matriculeFiscal;
	private $nom;
	private $mail;
	private $mobile;
	private $fix;
	private $fax;


	
	function __construct($matriculeFiscal,$nom,$mail,$mobile,$fix,$fax){
		$this->matriculeFiscal=$matriculeFiscal;
		$this->nom=$nom;
		$this->mail=$mail;
		$this->mobile=$mobile;
		$this->fix=$fix;
		$this->fax=$fax;
	}
	
	function getMatriculeFiscal(){
		return $this->matriculeFiscal;
	}
	function getNom(){
		return $this->nom;
	}
	function getMail(){
		return $this->mail;
	}
	function getMobile()
	{
		return $this->mobile;
	}
	function getFix(){
		return $this->fix;
	}
	function getFax(){
		return $this->fax;
	}
	
	
}

?>