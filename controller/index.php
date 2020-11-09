<?php
include_once "../vue/header.php";
include_once "../modele/Bdd.php";
?>

<div>
    <div class="wrap">
    <h1>Voici nos produits, ne soyez pas timide faites votre choix</h1>

    
  <h2>Retrouvez chez ALL4SPORT tous vos sport préfèré du badminton a la boxe en passant par l'équitation, et oui vous vous en doutiez il y en a pour tous les gouts.</h2> 

    <table>
    
      <thead>
        <tr>
          <td id="couleurTableau">Rayon</td>
          <td id="couleurTableau">Nom du produit</td>
          <td id="couleurTableau">Déscription</td>
          <td id="couleurTableau">Photo</td>
          <td id="couleurTableau"> Voir le detail ?</td>
        </tr>
      </thead>
      <tbody>
        <tr>

          <?php
          $bdd = new Bdd();
          $sport = $bdd->getAllSport();
          foreach ($sport as $row) {
            echo "<tr><td>".$row['Rayon'].'</td><td>'.$row['Nom du produit'].'</td><td>'.$row['Description du produit'].'</td><td>'.$row['Cliché'].'</td>';
            echo "<td><a href=../Controller/detail-prod.php?id=". $row['id_pro']."> Detail </a></td></tr>";
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
