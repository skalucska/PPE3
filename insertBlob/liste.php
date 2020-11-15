<html>
   <head>
      <title>Stock d'images</title>
   </head>
   <body>
      <?php
         include ("db.php");
         $ret = query("SELECT img_nom, img_id FROM images ORDER BY img_nom", PDO::FETCH_ASSOC);
         while ( $col = mysql_fetch_row ($ret) )
         {
             echo "<a href=\"apercu.php?id=" . $col[1] . "\">" . $col[0] . "</a><br />";
         }
      ?>
   </body>
</html>
