<!DOCTYPE html>
<!--Muestra por pantalla todos los números primos entre 2 y 100, ambos incluidos.-->
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $primo=true;
    echo "2</br>";
    for ($i=2;$i<100;$i++){
      $primo=true;
      if ($i%2==0){
        $primo = false;
        }
        else {
          for ($j=2;$j<=sqrt($i);$j++){
              if ($i%$j==0){
                $primo=false;
              }
            }
          }
        if ($primo){
        echo $i,"</br>";
        }
      }

     ?>
  </body>
</html>
