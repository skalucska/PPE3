<?php
include_once "../vue/header.php";
include_once "../modele/Bdd.php";
?>




<div>
    <div class="wrap">


    <h2>Vous vous interesez a la Natation, alors nos articles sont fait pour vous.</h2> <!-- sql liste des categories -->


    <table>
      <caption>Tous les equipements de natation, rien que pour vous </caption>
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
          $bdd = new Bdd();
          $sport = $bdd->giveNatation();
          foreach ($sport as $row) {
            echo "<tr><td>".$row['Rayon'].'</td><td>'.$row['Nom du produit'].'</td><td>'.$row['Description du produit'].'</td><td>'.'<img src="data:image/jpeg;base64,'.base64_encode($row['Cliché']).'"></td><td>'.$row['quantité'].'</td><td>'.$row['magasin'].'</td><td>'.$row['Prix'].'</td></tr>';
          }?>
        </tr>
      </tbody>
    </table>

    </div>
</div>




<?php
include_once "../vue/footer.php";
?>
