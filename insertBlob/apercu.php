<!DOCTYPE html>
<html lang="FR" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

  </body>
</html>
<?php
    if ( isset($_GET['id']) ){
        $id = intval ($_GET['id']);
        include ("db.php");
        $db = new db();
        $lireImage = $db->lireImage($id);
        echo '<img src="data:image/jpeg;base64,' .base64_encode($lireImage['image']) . '" />';
    }

?>
