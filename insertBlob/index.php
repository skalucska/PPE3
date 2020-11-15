<html>
   <head>
      <title>Stock d'images</title>
      <link rel="stylesheet" href="style.css">
   </head>
   <body>
     <?php
     include_once ("db.php");
     $db = new db();
     $images = $db->getImage_produits();
     ?>
     <?php
         include ("transfert.php");
         if ( isset($_FILES['fic']) )
         {
             transfert($db);
         }
      ?>
      <h3>Envoi d'une image</h3>
      <form enctype="multipart/form-data" action="#" method="post">
        <label>id_img</label>
        <input type="text" name="id_img" value="" required>
         <input type="hidden" name="MAX_FILE_SIZE" value="250000" />
         <input type="file" name="fic" size=50 />
         <label >fk_nom_four</label>
         <input type="text" name="fk_nom_four" value="" required>
         <label>fk_id_ray</label>
         <input type="text" name="fk_id_ray" value="" required>
         <label>fk_id_pro</label>
         <input type="text" name="fk_id_pro" value="" required>
         <input type="submit" value="Envoyer" />
      </form>
      <table>
        <thead>
          <tr>
            <th>ID image </th>
            <th>image</th>
            <th>fk_nom_four</th>
            <th>fk_id_ray</th>
            <th>fk_id_pro</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($images as $image) { ?>
            <tr>
              <td><?php echo $image['id_img'];?></td>
              <td><?php echo "<a href=\"apercu.php?id=".$image["id_img"]."\">aperçu</a>" ?></td>
              <td><?php echo $image['fk_nom_four'];?></td>
              <td><?php echo $image['fk_id_ray'];?></td>
              <td><?php echo $image['fk_id_pro'];?></td>

            </tr>
          <?php } ?>
        </tbody>
      </table>
   </body>
</html>
