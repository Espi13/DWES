<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    echo "Suma: ",$_POST['x'],"+",$_POST['y'],"=",$_POST['x']+$_POST['y'], "</br>";
    echo "Resta: ",$_POST['x'],"-",$_POST['y'],"=",$_POST['x']-$_POST['y'], "</br>";
    echo "Multiplicacion: ",$_POST['x'],"x",$_POST['y'],"=",$_POST['x']*$_POST['y'], "</br>";
    echo "División: ",$_POST['x'],"/",$_POST['y'],"=",$_POST['x']/$_POST['y'], "</br>";

     ?>
  </body>
</html>
