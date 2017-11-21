<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $numeros=array();
    $prueba=array();
    $tamanio=12;
    for ($i=0;$i<$tamanio*$tamanio;$i++){
    $numeros[]=$i;
    }
    $x=0;
      for ($i=0;$i<$tamanio;$i++){
        for ($j=0;$j<$tamanio;$j++){
          $prueba[$i][$j]=$numeros[$x];
          $x++;
        }
      }
      echo "<h1>Original</h1>";
      echo "<table>";
      for ($i=0;$i<$tamanio;$i++){
        echo "<tr>";
        for ($j=0;$j<$tamanio;$j++){
          echo "<td>".$prueba[$i][$j]."</td>";
        }
          echo "</tr>";
      }
        echo "</table>";


      //Fila
      if ($tamanio%2==0){
      for ($x=0;$x<$tamanio*$tamanio-1;$x++){
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
        }
      }
      else {
        for ($x=0;$x<$tamanio*$tamanio-2;$x++){
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
          }
      }
      echo "<h1>Rotada</h1>";
      echo "<table>";
      for ($i=0;$i<$tamanio;$i++){
        echo "<tr>";
        for ($j=0;$j<$tamanio;$j++){
          echo "<td>".$prueba[$i][$j]."</td>";
        }
          echo "</tr>";
      }
        echo "</table>";


     ?>
  </body>
</html>
