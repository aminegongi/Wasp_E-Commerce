<?PHP
class Demande{
    //private $ID_client;
    private $NomProduit;
    private $Image;
    private $ID_comande;
    private $ID_client;
    private $Nom_livreur;
    private $Date_demande;
    private $Date_traitement;
    private $Description;
    private $ID_demande;
    private $ID_admin;
    private $Etat;

function __construct($nomProduit, $image, $id_commande, $id_client, $description, $id_admin){ //$id_client
    
    //$this->ID_client = $id_client;
    $this->NomProduit = $nomProduit;
    $this->Image = $image;
    $this->ID_commande = $id_commande;
    $this->ID_client = $id_client;
    $this->Description = $description;
    $this->ID_admin = $id_admin;
    
    
    }
    
/*function getIdClinet(){
    return $this->ID_client;
}*/
function getNomProduit(){
    return $this->NomProduit;
}
function getImage(){
    return $this->Image;
}
function getID_commande(){
    return $this->ID_commande;
}
function getID_client(){
    return $this->ID_client;
}
/*function setIdClient($ID){
    $this->ID_client=$ID;
}*/
function getNom_livreur(){
    return $this->Nom_livreur;
}
function getDate_demande(){
    return $this->Date_demande;
}
function getDate_traitement(){
    return $this->Date_traitement;
}
function getDescription(){
    return $this->Description;
}
function getID_demande(){
    return $this->ID_demande;
}
function getID_admin(){
    return $this->ID_admin;
}
function getEtat(){
    return $this->Etat;
}
function setNomProduit($nomP){
    $this->Categorie=$categorie;
}
function setEtat($etat){
    $this->Etat=$etat;
}
function setImage($image){
    $this->Image=$image;
}
function setID_commande($IDco){
    $this->ID_commande=$IDco;
}
function setID_client($IDcli){
    $this->ID_client=$IDcli;
    }
function setNom_livreur($nomL){
    $this->Nom_livreur=$nomL;
    }
function setDate_demande($dde){
    $this->Date_demande=$dde;
    }
function setID_admin($id){
    $this->ID_admin=$id_admin;
    }
function setDate_traitelent($dt){
    $this->Date_traitement=$dt;
    }
function setDescription($desc){
    $this->Description=$desc;
    }
function setID_demande($idd){
   $this->ID_demande=$idd;
    } 
}
?>