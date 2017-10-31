<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      echo "La media de las 3 notas es: ", round ((($_POST['n1']+$_POST['n2']+$_POST['n3'])/3),2);
     ?>
  </body>
</html>
