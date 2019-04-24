<?php
class Categorie
{
    private $nom;

    function __construct($nom)
    {
        $this->nom = $nom;
    }

    function getNom()
    {
        return $this->nom;
    }

    function setNom($nom)
    {
        $this->nom = $nom;
    }
}

class Projet
{
    private $id_projet;

    function __construct($id_projet)
    {
        $this->id_projet = $id_projet;
    }

    function getIdprojet()
    {
        return $this->id_projet;
    }

    function setIdprojet($nom)
    {
        $this->id_projet = $nom;
    }
}

?>