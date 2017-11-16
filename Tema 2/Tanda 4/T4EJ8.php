<!DOCTYPE html>
<!--Realiza un programa que pida 10 números por teclado y que los almacene en un array.
A continuación se mostrará el contenido de ese array junto al índice (0 – 9) utilizando para ello
una tabla. Seguidamente el programa pasará los primos a las primeras posiciones,
desplazando el resto de números (los que no son primos) de tal forma que no se pierda
ninguno. Al final se debe mostrar el array resultante. Por ejemplo:-->
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $auxprimos=array();
    $auxnoprimos=array();
    if (!isset($_POST['num'])){
      $num=0;
      $cont=0;
      $numeroTexto="";
    }
    else {
      $num=$_POST['num'];
      $cont=$_POST['cont'];
      $numeroTexto=$_POST['numero'];
    }
    if ($cont==10){
      $numeroTexto = $numeroTexto . " " . $num;
      $numeroTexto = substr($numeroTexto, 3);
      $numero = explode(" ", $numeroTexto);
      for ($i=0;$i<10;$i++){
        $primo=true;
        if ($numero[$i]%2==0){
          $primo=false;
        }
        else {
          for ($j=2;$j<=sqrt($numero[$i]);$j++){
              if ($numero[$i]%$j==0){
                $primo=false;
              }
            }
        }
        if ($primo){
          array_push($auxprimos,$numero[$i]);
        }
        else {
          array_push($auxnoprimos,$numero[$i]);
        }
      }
      unset($numero);
      $numero=array();
      foreach ($auxprimos as $n ) {
        array_push($numero,$n);
      }
      foreach ($auxnoprimos as $nop ) {
        array_push($numero,$nop);
      }

      echo '<table><caption style="text-align: center;">Array</caption><tr>';
      for ($i=0;$i<10;$i++){
        echo "<td>$i</td>";
      }
      echo "</tr><tr>";
      foreach ($numero as $n ) {
        echo "<td>$n</td>";
      }
      echo "</tr></table>";

    }
    else {
      echo "<form  action='T4EJ8.php' method='post'>";
      echo  "<label>Introduce un numero <input type='text' name='num'></label>";
      echo  '<input type="hidden" name="cont" value="', ++$cont,'">';
      echo  '<input type="hidden" name="numero" value="',$numeroTexto." ".$num,'">';
      echo  '<input type="submit" value="Introducir">';
      echo "</form>";
    }

    ?>
  </body>
</html>
