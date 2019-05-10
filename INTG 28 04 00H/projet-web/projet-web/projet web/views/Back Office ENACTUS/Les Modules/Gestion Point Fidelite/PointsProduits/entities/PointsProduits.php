<?PHP
class PointsProduits{
	private $idProd;
	private $PointsProd;
	
	function __construct($idp,$pp){
		$this->idProd=$idp;
		$this->PointsProd=$pp;
	}
	
	function getIdProd(){
		return $this->idProd;
	}
	function getPointsProd(){
		return $this->PointsProd;
	}

	function setIdProd($IdProd){
		$this->idProd=$IdProd;
	}
	function setPointsProd($pp){
		$this->PointsProd=$pp;
	}

	
}

?>