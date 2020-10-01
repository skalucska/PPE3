<?php
include_once "../vue/header.php";
include_once "../modele/Bdd.php";
?>



    
<div>
    <div class="wrap">
    

    <h2>Vous vous interesez a la Boxe, alors nos articles sont fait pour vous.</h2> <!-- sql liste des categories -->

    <table>
      <caption>Tous les equipements de boxe, rien que pour vous </caption>
      <thead>
        <tr>
          <td id="couleurTableau">sport</td>
          <td id="couleurTableau">Nom du sport</td>
          <td id="couleurTableau">Déscription</td>
          <td id="couleurTableau">Photo du produit</td>
          <td id="couleurTableau">quantité magasin</td>
          <td id="couleurTableau">quantité internet</td>
          <td id="couleurTableau">Lieux de disponibilité</td>
          <td id="couleurTableau">Prix UHT</td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <?php
          $bdd = new Bdd();
          $sport = $bdd->giveBoxe();
          foreach ($sport as $row) {
            echo "<tr><td>".$row['pr_category'].'</td><td>'.$row['pr_nom'].'</td><td>'.$row['desc_pro'].'</td><td>'.$row['image'].'</td><td>'.$row['quant_stock_mag'].'</td><td>'.$row['quant_stock_int'].'</td><td>'.$row['lieu_stock'].'</td><td>'.$row['pr_uht'].'</td><br></tr>';
          }
           ?>
        </tr>
      </tbody>
    </table> 
    
    </div>
</div>




<?php
include_once "../vue/footer.php";
?>