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
          <td id="couleurTableau">quantité magasin & internet</td>
          <td id="couleurTableau">Lieux de disponibilité</td>
          <td id="couleurTableau">Prix UHT €</td>
        </tr>
      </thead>
      <tbody>
        <tr>


      <!-- <form action="index.php" method="" class="">

        <select id="">
            <option value="">-- Trier par : --</option>
            <option value="ray">Rayon <?php //$bdd = new Bdd(); $sport = $bdd->getAllSport(); ?> </option>
            <option value="asc">Prix croissant <?php //$bdd = new Bdd(); $sport = $bdd->getPrixASC();?></option>
            <option value="desc">Prix decroissant <?php //$bdd = new Bdd(); $sport = $bdd->getPrixDESC();?></option>
        </select>
        <input type="submit" value="valider !">
      </form> !-->



          <?php
          $bdd = new Bdd();
          $sport = $bdd->getAllSport();
          foreach ($sport as $row) {
            echo "<tr><td>".$row['Rayon'].'</td><td>'.$row['Nom du produit'].'</td><td>'.$row['Description du produit'].'</td><td>'.$row['Cliché'].'</td><td>'.$row['quantité'].'</td><td>'.$row['magasin'].'</td><td>'.$row['Prix'].'</td></tr>';
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

