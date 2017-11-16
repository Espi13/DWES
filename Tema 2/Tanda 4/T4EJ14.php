<!DOCTYPE html>
<!--Escribe un programa que, dada una posición en un tablero de ajedrez, nos diga a qué casillas podría saltar un
alfil que se encuentra en esa posición. Indícalo de forma gráfica sobre el tablero con un color diferente para
 estas casillas donde puede saltar la figura. El alfil se mueve siempre en diagonal. El tablero cuenta con 64 casillas.
 Las columnas se indican con las letras de la “a” a la “h” y las filas se indican del 1 al 8.-->
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style type="text/css">
    table, th, td {
      border: 0px;
      text-align: center;
    }
    td.negro {
      background-color: black;
    }
    td.blanco {
      background-color: white;
    }
    tr.marron {
      background-color: brown;
    }
  </style>
  </head>
  <body>
    <?php
    if (!isset($_POST['posalfil'])) {
        $color = "blanco";
         echo '<table><tr class="marron">';
         echo '<td></td><td>a</td><td>b</td><td>c</td><td>d</td><td>e</td><td>f</td><td>g</td><td>h</td><td></td></tr>';
         for ($fila = 0; $fila < 8; $fila++) {
           echo '<tr><td style="text-align: right; background-color: brown;">'.(8 - $fila).'</td>';
           for ($columna = 0; $columna < 8; $columna++) {
             echo "<td class=\"$color\">";
             echo "</td>";
             // Alterna el color de la casilla
             if ($color == "blanco") {
               $color = "negro";
             } else {
               $color = "blanco";
             }
             echo "</td>";
           }
           if ($color == "blanco") {
             $color = "negro";
           } else {
             $color = "blanco";
           }
           echo '<td style="text-align: left; background-color: brown;">'.(8 - $fila).'</td></tr>';
         }
        echo '<tr class="marron">';
        echo '<td></td><td>a</td><td>b</td><td>c</td><td>d</td><td>e</td><td>f</td><td>g</td><td>h</td><td></td></tr></table>';
        echo "Introduzca las coordenadas del Alfil (p.ej: c7)</br></br>";
        echo "<form  action='T4EJ14.php' method='post'>";
        echo "<label>Coordenadas <input type='text' name='posalfil' autofocus required></label></br></br>";
         echo "<input type='submit'  value='Calcular Movimientos'>";
        echo "</form>";
    }
    else {
        $posalfil=$_POST['posalfil'];
        $x=ord(substr($posalfil,0,1))-ord('a');
        $y=8 - substr($posalfil,1,1);
        $color = "blanco"; // color de la primera casilla
        echo '<table><tr class="marron">';
        echo '<td></td><td>a</td><td>b</td><td>c</td><td>d</td><td>e</td><td>f</td><td>g</td><td>h</td><td></td></tr>';
        for ($fila = 0; $fila < 8; $fila++) {
          echo '<tr><td style="text-align: right; background-color: brown;">'.(8 - $fila).'</td>';
          for ($columna = 0; $columna < 8; $columna++) {
            echo "<td class=\"$color\">";
          // Comprueba si el alfil está en la posición actual
            if ($x == $columna && $y == $fila) {
              echo '<img src="alfil.png">';
            // Comprueba si es una posición a la que puede llegar el alfil
            } else if (abs((abs($x) - abs($columna))) == abs((abs($y) - abs($fila)))) {
              echo '<img src="alfilsemitransparente.png">';
            } else {
              echo '<img src="vacio.png">';
            }
            echo "</td>";
          // Alterna el color de la casilla
            if ($color == "blanco") {
              $color = "negro";
            } else {
              $color = "blanco";
            }
            echo "</td>";
          }
          if ($color == "blanco") {
            $color = "negro";
          } else {
            $color = "blanco";
          }
        echo '<td style="text-align: left; background-color: brown;">'.(8 - $fila).'</td></tr>';
      }
      echo '<tr class="marron">';
      echo '<td></td><td>a</td><td>b</td><td>c</td><td>d</td><td>e</td><td>f</td><td>g</td><td>h</td><td></td></tr></table>';
    }

     ?>

  </body>
</html>
