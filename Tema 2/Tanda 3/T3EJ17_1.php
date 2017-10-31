<!DOCTYPE html>
<!--Realiza un programa que sume los 100 números siguientes a un número entero y positivo
introducido por teclado. Se debe comprobar que el dato introducido es correcto (que es un
número positivo).-->
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    if (!isset($_POST['n'])){
      $n=-1;
    }
    else {

       $n=$_POST['n'];
    }
    if ($n<0) {

      echo '<p>Introduzca un numero entero positivo</p>
      <form  action="T3EJ17_1.php" method="post">
        <p>Numero  <input type="text" name="n"></p>
        <p><label><input type="submit" value="Calcular"></label></p>
      </form>';
    }
    else{

      /*$suma=0;
      for ($i=$n+1;$i<=$n+100;$i++){
        $suma+=$i;
      }*/
      echo "La suma de los 100 primeros numeros siguientes a $n es ",(($n+1)+($n+100))*50;
      //echo "La suma de los 100 primeros numeros siguientes a $n es $suma";
    }
      /*
      $suma=0;
      for ($i=$n+1;$i<=$n+101;$i++){
        $suma+=$i;
      }
      echo "La suma de los 100 primeros numeros siguientes a $n es $suma";*/

  ?>
  </body>
</html>
