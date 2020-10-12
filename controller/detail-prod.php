<?php

include_once "../vue/header.php";
include_once "../modele/Bdd.php";

$idPro = $_GET['id'];
$bdd = new Bdd();
$detail = $bdd->getDetail($idPro);


include_once "../vue/detail.php";
?>



    
