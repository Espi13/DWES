<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $media = round ((($_POST['n1']+$_POST['n2']+$_POST['n3'])/3),2);

      if ($media>=0 && $media<5){
        echo "La media de las 3 notas es: ", round ((($_POST['n1']+$_POST['n2']+$_POST['n3'])/3),2),"</br>";
        echo "Insuficiente";
      }
      else if ($media>=5 && $media <6){
        echo "La media de las 3 notas es: ", round ((($_POST['n1']+$_POST['n2']+$_POST['n3'])/3),2),"</br>";
        echo "Suficiente";
      }
      else if ($media>=6 && $media <7) {
        echo "La media de las 3 notas es: ", round ((($_POST['n1']+$_POST['n2']+$_POST['n3'])/3),2),"</br>";
        echo "Bien";
      }
      else if ($media>=7 && $media <9){
        echo "La media de las 3 notas es: ", round ((($_POST['n1']+$_POST['n2']+$_POST['n3'])/3),2),"</br>";
        echo "Notable";
      }
      else if ($media>=9 && $media <=10){
        echo "La media de las 3 notas es: ", round ((($_POST['n1']+$_POST['n2']+$_POST['n3'])/3),2),"</br>";
        echo "Sobresaliente";
      }
      else {
        echo "Notas mal introducidas";
      }
     ?>
  </body>
</html>
