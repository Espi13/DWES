<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $num=$_POST['num'];
    echo "Tabla del ", $num;
    echo "</br></br>";
    echo "<table>";
    for ($i=1;$i<=10;$i++) {
      echo "<tr><td>",$num,"</td><td>x</td><td>",$i,"</td><td>=</td><td>",$num*$i,"</td></tr>";
    }
    echo "</table>";
     ?>
  </body>
</html>
