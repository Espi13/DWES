<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $num=$_POST['num'];
    echo "<table>";
    echo "<tr><td>n<sup>1</sup></td><td>n<sup>2</sup></td><td>n<sup>3</sup></td></tr>";
    for ($i=1;$i<6;$i++,$num++){
      echo "<tr><td>$num</td><td>",pow($num,2),"</td><td>",pow($num,3),"</td></tr>";
    }
    echo "</table>";
     ?>
  </body>
</html>
