<?php

include_once "../modele/Bdd.php";

if(isset($_GET['product'])){
    $product = (String) trims($_GET['product']);
    $res = $DB->query("SELECT p.pr_nom FROM produits p  WHERE p.pr_nom LIKE ? LIMIT 10", array("%$product%"));

    $res = $res->fetchALL();

    foreach ($res as $prod) {
    ?>
    <div style="margin-top:20px 0; border-bottom: 2px solid #ccc">
        <?= $prod['pr_nom'] ?>
    </div>

    <?php
    }
}

?>