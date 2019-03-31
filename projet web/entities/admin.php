<?PHP
class Admin{
	private $ID;
	private $Pseudo;
	private $Mail;
	private $Adress;
	private $Image;
	private $Passwd;
	private $NumTel;




	function __construct($ID,$Pseudo,$Mail,$Adress,$Image,$Passwd,$NumTel){
		$this->ID=$ID;
		$this->Pseudo=$Pseudo;
		$this->Mail=$Mail;
		$this->Adress=$Adress;
		$this->Image=$Image;
		$this->Passwd=$Passwd;
		$this->NumTel=$NumTel;

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

}

?>