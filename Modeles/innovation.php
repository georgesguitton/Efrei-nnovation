<?php class innovation
{
private $co;
private $numInnovation;
var $titre;
var $descriptif;
var $descriptifLong;
var $dateModification;
var $fini;
var $numUtilisateur;


public function __construct($co,$titre,$descriptif,$descriptifLong,$dateModification,$fini)
{       
    $numUtilisateurCo=$_SESSION["numUtilisateur"];

    mysqli_query($co,"INSERT INTO innovation VALUES ('','$titre','$descriptif','$descriptifLong','$dateModification','$fini''$numUtilisateurCo')") or die("Erreur d'insertion");
    $this->co=$co;
    $this->numInnovation=mysqli_insert_id($co); //Recupérer la valeur de id (auto increment)
    $this->titre=$titre;
    $this->descriptif=$descriptif;
    $this->descriptifLong=$descriptifLong;
    $this->dateModification=$dateModification;
    $this->numUtilisateur=$numUtilisateurCo;
}
}?> 