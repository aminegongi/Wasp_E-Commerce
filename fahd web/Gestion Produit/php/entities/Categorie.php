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
?>