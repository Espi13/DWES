<!DOCTYPE html>
<!--Realiza un programa que sea capaz de rotar todos los elementos de una matriz cuadrada una posición en el sentido
de las agujas del reloj. La matriz debe tener 12 filas por 12 columnas y debe contener números generados al azar
entre 0 y 100 Se debe mostrar tanto la matriz original como la matriz resultado, ambas con los números
convenientemente alineados.-->
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $numeros=array();
    $prueba=array();
    for ($i=1;$i<10;$i++){
    $numeros[]=$i;
    }
    $x=0;
      for ($i=0;$i<3;$i++){
        for ($j=0;$j<3;$j++){
          $prueba[$i][$j]=$numeros[$x];
          $x++;
        }
      }
      echo "<table>";
      for ($i=0;$i<3;$i++){
        echo "<tr>";
        for ($j=0;$j<3;$j++){
          echo "<td>".$prueba[$i][$j]."</td>";
        }
          echo "</tr>";
      }
        echo "</table>";


      //Fila
        $row=0;
        $col=0;
        $prev;
        $curr;
        $m=3;
        $n=3;
      while ($row<$m && $col < $n){
        if ($row+1==$m || $col+1==$n)
        break;

        $prev=$prueba[$row+1][$col];
        for  ($i=$row;$i<$n;$i++){
          $curr=$prueba[$row][$i];
          $prueba[$row][$i]=$prev;
          $prev=$curr;
        }
        $row++;
        for ( $i = $row; $i < $m; $i++)
        {
            $curr = $prueba[$i][$n-1];
            $prueba[$i][$n-1] = $prev;
            $prev = $curr;
        }
        $n--;

        if ($row<$m){
          for ($i=$n-1;$i>=$col;$i--){
            $curr=$prueba[$m-1][$i];
            $prueba[$m-1][$i]=$prev;
            $prev=$curr;
          }
        }
        $m--;

        if ($col<$n){
          for ($i=$m-1;$i>=$row;$i--){
            $curr=$prueba[$i][$col];
            $prueba[$i][$col]=$prev;
            $prev=$curr;
          }
        }
        $col++;
      }
      
      echo "<table>";
      for ($i=0;$i<3;$i++){
        echo "<tr>";
        for ($j=0;$j<3;$j++){
          echo "<td>".$prueba[$i][$j]."</td>";
        }
          echo "</tr>";
      }
        echo "</table>";


     ?>
  </body>
</html>
