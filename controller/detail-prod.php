<?php

include_once "../vue/header.php";


$idPro = $_GET['pro'];
$idrayon = $_GET['rayon'];
$idFour = $_GET['nomFour'];

    include_once "../modele/Bdd.php";
    $bdd = new Bdd();
    $detail = $bdd->getDetail($idFour, $idRayon, $idPro);


include_once "../vue/detail.php";

?>



    
