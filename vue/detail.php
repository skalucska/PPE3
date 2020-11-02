<?php 
    include_once "../vue/header.php";
    include_once "../modele/Bdd.php";
    include_once "../controller/detail-prod.php";
?>




<div>
    <div class="wrap">

    <h2>Vous vous interesez au <?php //echo $row['Rayon'];?>//// , alors nos articles sont fait pour vous.</h2> 


      <caption>Tous les equipements de <?php //echo $row['Rayon'];?>//// , rien que pour vous </caption>
      
      
      
    Rayon : <?php echo $detail['Rayon'];?>
    <br>
    Nom du produit : <?php echo $detail['pr_nom'];?>
    <br>
    Description : <?php echo $detail['pr_desc'];?>
    <br>
      
      
      
      
      
      
      <!--
      <thead>
        <tr>
        <td id="couleurTableau">Rayon</td>
          <td id="couleurTableau">Nom du produit</td>
          <td id="couleurTableau">Déscription</td>
          <td id="couleurTableau">Photo du produit</td>
          <td id="couleurTableau">quantité magasin & internet</td>
          <td id="couleurTableau">Lieux de disponibilité</td>
          <td id="couleurTableau">Prix UHT</td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <?php
        // 
        //foreach ($detail as $row) {
    //echo "<tr><td>".$row['Rayon'].'</td><td>'.$row['Nom du produit'].'</td><td>'.$row['Description du produit'].'</td><td>'.$row['Cliché'].'</td><td>'.$row['quantité'].'</td><td>'.$row['magasin'].'</td><td>'.$row['Prix'].'</td></tr>';
        // }?>
        </tr>
      </tbody>
    </table> 
    </div>
</div>



<?php
include_once "../vue/footer.php";
?>