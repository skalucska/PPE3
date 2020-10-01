<?php
include_once "../vue/header.php";
include_once "../modele/Bdd.php";
?>

<div>
    <div class="wrap">
    <h1>Voici nos produits, ne soyez pas timide faites votre choix</h1>

    
  <h2>Retrouvez chez ALL4SPORT tous vos sport préfèré du badminton a la boxe en passant par léquitation, et oui vous vous en doutiez il y en a pour tous les gouts.</h2> 
  
    <table>
    
      <thead>
        <tr>
          <td id="couleurTableau">Rayon</td>
          <td id="couleurTableau">Nom du produit</td>
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
          $sport = $bdd->getAllSport();
          foreach ($sport as $row) {
            echo "<tr><td>".$row['pr_category'].'</td><td>'.$row['pr_nom'].'</td><td>'.$row['desc_pro'].'</td><td>'.$row['image'].'</td><td>'.$row['quant_stock_mag'].'</td><td>'.$row['quant_stock_int'].'</td><td>'.$row['lieu_stock'].'</td><td>'.$row['pr_uht'].'</td></tr>';
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

