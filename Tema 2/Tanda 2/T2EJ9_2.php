<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $a=$_POST['a'];
    $b=$_POST['b'];
    $c=$_POST['c'];

    echo "Solucion x<sub>1</sub>= ",((-1)*$b+(sqrt(pow($b,2)-(4*$a*$c))))/2*$a,"</br>";
    echo "Solucion x<sub>2</sub>= ",((-1)*$b-(sqrt(pow($b,2)-(4*$a*$c))))/2*$a;
    ?>
  </body>
</html>
