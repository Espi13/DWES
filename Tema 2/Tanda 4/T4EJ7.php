<!DOCTYPE html>
<!--Escribe un programa que genere 20 números enteros aleatorios entre 0 y 100 y que los almacene en un array.
El programa debe ser capaz de pasar todos los números pares a las primeras posiciones del array(del 0 en
adelante)  y todos los números impares a las celdas restantes. Utiliza arrays auxiliares si es necesario.-->
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $auxpares=array();
    $auximpares=array();
    for ($i=0;$i<20;$i++){
      $numeros[$i]=rand(0,5);
      if ($numeros[$i]%2==0){
        array_push($auxpares,$numeros[$i]);
      }
      else{
        array_push($auximpares,$numeros[$i]);
      }
    }
    unset($numeros);
    $numeros=array();

    foreach ($auxpares as $pares ) {
        array_push($numeros,$pares);
    }
    foreach ($auximpares as $impares ) {
      array_push($numeros,$impares);
    }
    foreach ($numeros as $n ) {
      if ($n%2==0){
        echo '<span style="color: blue; font-weight: bold;">',$n,'</span>'." ";
      }
      else {
        echo '<span style="color: red; font-weight: bold;">',$n,'</span>'." ";
      }
    }
     ?>
  </body>
</html>
