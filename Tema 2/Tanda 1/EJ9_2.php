<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

echo "El volumen del cono es: ", round(M_PI*pow($_POST['r'],2)*$_POST['h']*(1/3),$precision=2)," u<sup>3</sup>.";
     ?>
  </body>
</html>
