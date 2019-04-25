<?PHP
class Reclamation{
    //private $ID_client;
    private $Categorie;
    private $Designation;
    private $Description;
    private $Reponse;
    private $Etat;
    private $Date_r;
    private $Date_s;
    private $IDC;

function __construct($categorie, $designation, $description, $reponse){ //$id_client
    
    //$this->ID_client = $id_client;
    $this->Categorie = $categorie;
    $this->Designation = $designation;
    $this->Description = $description;
    $this->Reponse = $reponse;
    $this->Etat = 0;
    
    }
    
/*function getIdClinet(){
    return $this->ID_client;
}*/
function getCategorie(){
    return $this->Categorie;
}
function getDesignation(){
    return $this->Designation;
}
function getDescription(){
    return $this->Description;
}
function getReponse(){
    return $this->Reponse;
}
/*function setIdClient($ID){
    $this->ID_client=$ID;
}*/
function getEtat(){
    return $this->Etat;
}
function getDate_r(){
    return $this->Date_r;
}
function getDate_s(){
    return $this->Date_s;
}

function getIDC(){
    return $this->IDC;
}

function setCategorie($categorie){
    $this->Categorie=$categorie;
}
function setDesignation($designation){
    $this->Designation=$designation;
}
function setDescription($description){
    $this->Description=$description;
}
function setReponse($reponse){
    $this->Reponse=$reponse;
    }
function setEtat($etat){
    $this->Etat=$etat;
    }
function setDate_r($date_r){
    $this->Date_r=$date_r;
        }
function setDate_s($date_s){
    $this->Date_s=$date_s;
        } 

function setIDC($id){
            return $this->IDC=$id;
        }
}
?>