<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    echo "El total de la factura es: ", round($_POST['x']*1.21,$precision=2)," €.";

     ?>
  </body>
</html>
