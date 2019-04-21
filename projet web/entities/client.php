<?PHP
class Client{
	private $ID;
	private $Pseudo;
	private $Mail;
	private $Adress;
	private $Image;
	private $Passwd;
	private $NumTel;
	private $nom;
	private $prenom;




	function __construct($ID,$Pseudo,$Mail,$Adress,$Image,$Passwd,$NumTel,$nom,$prenom){
		$this->ID=$ID;
		$this->Pseudo=$Pseudo;
		$this->Mail=$Mail;
		$this->Adress=$Adress;
		$this->Image=$Image;
		$this->Passwd=$Passwd;
		$this->NumTel=$NumTel;
		$this->nom=$nom;
		$this->prenom=$prenom;
	}
	
	function getID(){
		return $this->ID;
	}
	function getPseudo(){
		return $this->Pseudo;
	}
	function getMail(){
		return $this->Mail;
	}
	function getImage(){
		return $this->Image;
	}
	function getPasswd(){
		return $this->Passwd;
	}
	function getNumTel(){
		return $this->NumTel;
	}

	function getAdress(){
		return $this->Adress;
	}
	function getNom(){
		return $this->nom;
	}
	function getPrenom(){
		return $this->prenom;
	}


	function setID($ID){
		$this->ID=$ID;
	}
	function setPseudo($Pseudo){
		$this->Pseudo=$Pseudo;
	}
	function setMail($Mail){
		$this->Mail;
	}
	function setImage($Image){
		$this->Image=$Image;
	}
	function setAdress($Adress){
		$this->Adress=$Adress;
	}
	function setPasswd($Passwd){
		$this->Passwd=$Passwd;
	}
	function setNumTel($NumTel){
		$this->NumTel=$NumTel;
	}
	function setNom($nom){
		$this->nom=$nom;
	}
	function setPrenom($prenom){
		$this->prenom=$prenom;
	}
}

?>