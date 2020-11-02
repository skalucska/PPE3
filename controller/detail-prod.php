<?php

include_once "../vue/header.php";


$idPro = $_GET['id'];
    include_once "../modele/Bdd.php";
    $bdd = new Bdd();
    $detail = $bdd->getDetail($idPro);


include_once "../vue/detail.php";

?>



    
