<?php
    session_start();
    require_once("../modeles/bd.php");
    require_once("../modeles/utilisation.php");
    
    if (isset($_POST["login"]) && isset($_POST["mdp"]) && isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["statut"]))
    {
        $login = $_POST["login"];
        $mdp = $_POST["mdp"];
        $nom = $_POST["nom"];
        $prenom=$_POST["prenom"];
        $statut=$_POST["statut"];
        $coBd = new bd("efreinnovation");
        $co = $coBd->connexion();
        $m = new utilisateur($co,$login,$mdp,$nom,$prenom,$statut);
    }
        header('Location:../Vues/connexion.html');
?>
