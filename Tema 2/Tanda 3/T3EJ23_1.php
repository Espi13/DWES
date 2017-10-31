<!DOCTYPE html>
<!--Escribe un programa que permita ir introduciendo una serie indeterminada de números hasta
que la suma de ellos supere el valor 10000. Cuando esto último ocurra, se debe mostrar el
total acumulado, el contador de los números introducidos y la media.-->
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      if(!isset($_POST['cont'])){
        $cont=0;
        $suma=0;
        $n=0;
      }
      else {
        $n=$_POST['n'];
        $cont=$_POST['cont'];
        $suma=$_POST['suma'];
      }
      if ($suma+$n>=10000 || $n>=10000){
        if ($cont==1){
          echo "La suma de todos los numeros introducidos es $n </br>";
          echo "Se han introducido un total de $cont numeros </br>";
          echo "La media de los numeros introducidos es $n";
        }
        else {
          echo "La suma de todos los numeros introducidos es ", $suma+$n, "</br>";
          echo "Se han introducido un total de $cont numeros </br>";
          echo "La media de los numeros introducidos es ", round(($suma+$n)/$cont,2);
          }
      }
      else {

        $cont++;
        $suma+=$n;
        echo "Introduce numeros hasta que la suma de estos de 10.000 o mas";
        echo "<form  action='T3EJ23_1.php' method='post'>";
        echo  "<label>Introduce un numero <input type='text' name='n'></label>";
        echo  '<input type="hidden" name="cont" value="', $cont,'">';
        echo  '<input type="hidden" name="suma" value="', $suma,'">';
        echo  '<input type="submit" value="Calcular">';
        echo "</form>";
      }
     ?>


  </body>
</html>
