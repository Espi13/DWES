<!DOCTYPE html>
<!--Escribe un programa que pida 10 números por teclado y que luego muestre los números
introducidos junto con las palabras “máximo” y “mínimo” al lado del máximo y del mínimo respectivamente.-->
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      if (!isset($_POST['num'])){
        $cont=0;
        $num=0;
        $numeroTexto="";
      }
      else{
        $num=$_POST['num'];
        $cont=$_POST['cont'];
        $numeroTexto=$_POST['numero'];

      }
      if ($cont==10){
        $numeroTexto = $numeroTexto . " " . $num;
        $numeroTexto = substr($numeroTexto, 3);
        $numero = explode(" ", $numeroTexto);
        $maximo = -PHP_INT_MAX;
        $minimo = PHP_INT_MAX;

        foreach ($numero as $n) {
          if ($n<$minimo){
            $minimo=$n;
          }
          if ($n>$maximo){
            $maximo=$n;
          }
        }

        foreach ($numero as $n) {
          if ($n==$minimo){
            echo "$n minimo</br>";
          }
          else if ($n==$maximo){
            echo "$n maximo</br>";
          }
          else{
            echo "$n</br>";
          }
        }
      }
      if ($cont<10 || !isset($num)){
        echo "<form  action='T4EJ2.php' method='post'>";
        echo  "<label>Introduce un numero <input type='text' name='num'></label>";
        echo  '<input type="hidden" name="cont" value="', ++$cont,'">';
        echo  '<input type="hidden" name="numero" value="',$numeroTexto." ".$num,'">';
        echo  '<input type="submit" value="Introducir">';
        echo "</form>";
      }



     ?>
  </body>
</html>
