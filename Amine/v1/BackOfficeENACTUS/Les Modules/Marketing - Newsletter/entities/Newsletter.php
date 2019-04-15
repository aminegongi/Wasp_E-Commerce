<?PHP
class Newsletter{
	private $libelle;
	private $listeEnvoi;
	private $objetMail;
	private $texteMail;
	private $etat;
	
	function __construct($libelle,$listeEnvoi,$objetMail,$texteMail){
		$this->libelle=$libelle;
		$this->listeEnvoi=$listeEnvoi;
		$this->objetMail=$objetMail;
		$this->texteMail=$texteMail;
		$this->etat=0;
	}
	
	function getLibelle(){
		return $this->libelle;
	}
	function getlisteEnvoi(){
		return $this->listeEnvoi;
	}
	function getobjetMail(){
		return $this->objetMail;
	}
	function gettexteMail(){
		return $this->texteMail;
	}
	function getetat(){
		return $this->etat;
	}

	function setLibelle($Libelle){
		$this->Libelle=$Libelle;
	}
	function setlisteEnvoi($listeEnvoi){
		$this->listeEnvoi=$listeEnvoi;
	}
	function setobjetMail($objetMail){
		$this->objetMail=$objetMail;
	}
	function settexteMail($texteMail){
		$this->texteMail=$texteMail;
	}
	function setetat($etat){
		$this->etat=$etat;
	}
	
}

?>