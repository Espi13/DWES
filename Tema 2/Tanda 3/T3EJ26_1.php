<!DOCTYPE html>
<!--Realiza un programa que pida primero un número y a continuación un dígito. El programa
nos debe dar la posición (o posiciones) contando de izquierda a derecha que ocupa ese
dígito en el número introducido.-->
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      if (!isset($_POST['num'])){
        $num=0;
        $dig=0;

      }
      else {
        $num=$_POST['num'];
        $dig=$_POST['dig'];
      }
      if ($num==0 || $dig>10){
        echo '
          <p>Introduzca el numero y el digito a buscar</p>
          <form  action="T3EJ26_1.php" method="post">
          <p>Numero  <input type="text" name="num"></p>
          <p>Digito  <input type="text" name="dig"></p>
          <p><label><input type="submit" value="Mostrar"></label></p>
          </form>';
      }
      else {
        $length=0;
        $numreves=0;
        $posicion=1;
        $n=$num;
        //Le damos la vuelta al numero al ser de izquierda a derecha y calculamos la longitud.
        while ($n>0){
          $numreves=($numreves*10)+($n%10);
          $n=floor($n/10);
          $length++;
        }
        echo $numreves,"</br>";
        echo "El digito $dig aparece en el numero $num en la posicion/es </br>";
        while($numreves>0|| $length>0){
          if (($numreves%10)==$dig){
            echo $posicion,"&nbsp ";
                  }
          $numreves=floor($numreves/10);
          $posicion++;
          $length--;
        }

      }

     ?>
  </body>
</html>
