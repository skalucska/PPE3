<?php 
    include_once "../vue/header.php";
    include_once "../modele/Bdd.php";
    include_once "../controller/detail-prod.php";
?>




<div>
    <div class="wrap">

    <h2>Vous vous interesez au <?php echo $detail['Rayon'];?>, alors nos articles sont fait pour vous.</h2> 
    <br>

      <h2>Tous les equipements de <?php echo $detail['Rayon'];?>, rien que pour vous </h2>
      <br>
      
    Rayon : <?php echo $detail['Rayon'];?>
    <br>
    Nom du produit : <?php echo $detail['Nom du produit'];?>
    <br>
    Description : <?php echo $detail['Description du produit'];?>
    <br>
    Quantité: <?php echo $detail['quantité'];?>
    <br>
    Lieux de disponibilité : <?php echo $detail['magasin'];?>
    <br>
    Prix: <?php echo $detail['Prix'];?>
    <br>
    Photo: 
    <br>
    <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($detail['Cliché']).'">';?>
      
      
      
      
      
      
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