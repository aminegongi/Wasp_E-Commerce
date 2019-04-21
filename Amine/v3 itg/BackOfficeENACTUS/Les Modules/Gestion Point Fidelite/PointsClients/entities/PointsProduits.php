<?PHP
class PointsClients{
	private $idClient;
	private $PointsProdC;
	
	function __construct($idc,$ppc){
		$this->idClient=$idc;
		$this->PointsProdC=$ppc;
	}
	
	function getIdClient(){
		return $this->idClient;
	}
	function getPointsProdC(){
		return $this->PointsProdC;
	}

	function setIdClient($IdClient){
		$this->idClient=$IdClient;
	}
	function setPointsProdC($ppc){
		$this->PointsProdC=$ppc;
	}

	
}

?>