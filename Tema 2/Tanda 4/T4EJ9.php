<!DOCTYPE html>
<!--Realiza un programa que pida 10 números por teclado y que los almacene en un array. A continuación se mostrará
el contenido  de ese array junto al índice (0 – 9). Seguidamente el programa pedirá dos posiciones a las
que llamaremos “inicial” y “final”. Se debe comprobar que inicial es menor que final y que ambos números están entre 0 y 9.
El programa deberá colocar el número de la posición inicial en la posición final, rotando el resto de números para
que no se pierda ninguno. Al final se debe mostrar el array resultante. Por ejemplo, para un valor inicial de 3
y otro final de 7 y basándonos en la tabla siguiente:-->
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
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
      echo '<table><caption style="text-align: center;">Array Inicial</caption><tr>';
      for ($i=0;$i<10;$i++){
        echo "<td>$i</td>";
      }
      echo "</tr><tr>";
      foreach ($numero as $n ) {
        echo "<td>$n</td>";
      }
      echo "</tr></table>";
      echo "</br></br>";
      echo "<form  action='T4EJ9.php' method='post'>";
      echo  "<input type='hidden' name='num' value='vacio'>";
      echo  "<label>Posicion Inicial <input type='text' name='inicial' min='0' max='9' required></label></br></br>";
      echo  "<label>Posicion Final &nbsp&nbsp<input type='text' name='final' min='0' max='9' required></label></br>";
      echo  '<input type="hidden" name="cont" value="', ++$cont,'">';
      echo  '<input type="hidden" name="numero" value="',$numeroTexto,'">';
      echo  '<input type="submit" value="Introducir">';
      echo "</form>";
    }
    else if ($cont==11){
      $inicial=$_POST['inicial'];
      $final=$_POST['final'];
      if ($inicial>=$final||$inicial<0 ||$inicial>9||$final<0||$final>9){
        echo "Los datos introducidos son incorrectos";
      }
      else {
        $numero=explode(" ",$numeroTexto);
        echo '<table><caption style="text-align: center;">Array Inicial</caption><tr>';
        for ($i=0;$i<10;$i++){
          echo "<td>$i</td>";
        }
        echo "</tr><tr>";
        foreach ($numero as $n ) {
          echo "<td>$n</td>";
        }
        echo "</tr></table></br>";
        $posfinal=$numero[9];
        for ($i=9;$i>$final;$i--){
          $numero[$i]=$numero[$i-1];
        }
        $numero[$final]=$numero[$inicial];
        for ($j=$inicial;$j>0;$j--){
          $numero[$j]=$numero[$j-1];
        }
        $numero[0]=$posfinal;

        echo '<table><caption style="text-align: center;">Array Final</caption><tr>';
        for ($i=0;$i<10;$i++){
          echo "<td>$i</td>";
        }
        echo "</tr><tr>";
        foreach ($numero as $n ) {
          echo "<td>$n</td>";
        }
        echo "</tr></table>";
      }


    }

    else if ($cont<10) {
      echo "<form  action='T4EJ9.php' method='post'>";
      echo  "<label>Introduce un numero <input type='text' name='num'></label>";
      echo  '<input type="hidden" name="cont" value="', ++$cont,'">';
      echo  '<input type="hidden" name="numero" value="',$numeroTexto." ".$num,'">';
      echo  '<input type="submit" value="Introducir">';
      echo "</form>";
    }

     ?>
  </body>
</html>
