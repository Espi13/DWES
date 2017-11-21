<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $tamanio=10;
      echo "<p style=\"font-family: monospace\">";
      echo "<pre>";
      for ($i=1;$i<=$tamanio;$i++){
        for($j=1;$j<=$tamanio;$j++){
          if ($j==1 ||$j==$tamanio || $i==1 || $i==$tamanio){
            echo "*";
          }
          else {
            echo "&nbsp";
          }
        }
        echo "<br>";
      }
      echo "</pre>";
      echo "</br></br>"; 
      echo "<p style=\"font-family: monospace\">";
      //Cuadrado sin relleno
      echo str_repeat('*', $tamanio);
        for($i=0; $i<$tamanio-2; $i++){
          echo "</br>";
          echo "*" . str_repeat('&nbsp;', $tamanio-2)  . "*";

          }
          echo "</br>";
        echo str_repeat('*', $tamanio);
        echo "</br></br>";
      //Cuadrado sin rellenar
      for ($i=1;$i<=$tamanio;$i++){

        for($j=0;$j<=$tamanio;$j++){
            echo "*";
        }
        echo "</br>";
      }

     ?>
  </body>
</html>
