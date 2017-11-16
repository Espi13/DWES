<!DOCTYPE html>
<!--Rellena un array bidimensional de 6 filas por 9 columnas con números enteros positivos comprendidos entre 100 y 999
(ambos inclusive). Todos los números deben ser distintos, es decir, no se puede repetir ninguno. Muestra a continuación
por pantalla el contenido del array de tal forma que se cumplan los siguientes requisitos:  Los números de las dos
diagonales donde está el mínimo deben aparecer en color verde.  El mínimo debe aparecer en color azul.
El resto de números debe aparecer en color negro.-->
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $cont=0;
    $numero=array();
    $numeros=array();
      do {
        $n=rand(100,999);
        if (!in_array($n,$numero)){
          $numero[]=$n;
          $cont++;
        }
      } while ($cont<54);
      $x=0;
      $minimo=999;
      for ($i=0;$i<6;$i++){
        for ($j=0;$j<9;$j++){
          $numeros[$i][$j]=$numero[$x];
          $x++;
          if ($numeros[$i][$j]<$minimo){
            $minimo=$numeros[$i][$j];
            $xMin=$i;
            $yMin=$j;
          }
        }
      }
      echo "<table>";
      for ($i=0;$i<6;$i++){
        echo "<tr>";
        for ($j=0;$j<9;$j++){
          if ($numeros[$i][$j]==$minimo){
            echo '<td><span style="color: blue; font-weight: bold;">'.$numeros[$i][$j].'</span>';
          }else if(abs(abs($i)-abs($xMin))==abs(abs($j)-abs($yMin))){
            echo '<td><span style="color: red; font-weight: bold;">'.$numeros[$i][$j].'</span>';
          }

          else {
            echo "<td>".$numeros[$i][$j]."</td>";
          }
        }
        echo "</tr>";
      }
      echo "</table>";

     ?>
  </body>
</html>
