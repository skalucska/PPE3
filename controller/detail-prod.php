<?php

include_once "../vue/header.php";


$idFour = $_GET['id'];
$idRay = $_GET['id2'];
$idPro = $_GET['id3'];



    include_once "../modele/Bdd.php";
    $bdd = new Bdd();
    $detail = $bdd->getDetail($idFour,$idRay,$idPro);


include_once "../vue/detail.php";

?>



    
