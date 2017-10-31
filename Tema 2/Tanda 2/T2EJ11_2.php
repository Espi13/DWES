<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $hora=$_POST['hora'];
    $min=$_POST['min'];
    echo "Quedan ",(24-$hora)*3600+(60-$min)*60," segundos</br>";
    echo "<a href='T2EJ11_1.php'> Volver</a>";
     ?>
  </body>
</html>
