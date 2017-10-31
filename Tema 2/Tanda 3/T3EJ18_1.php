<!DOCTYPE html>
<!--Escribe un programa que obtenga los números enteros comprendidos entre dos números
introducidos por teclado y validados como distintos, el programa debe empezar por el
menor de los enteros introducidos e ir incrementando de 7 en 7.-->
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    if (!isset($_POST['n1']) && !isset($_POST['n2'])){
      $n1=0;
      $n2=0;

    }
    else {
      $n1=$_POST['n1'];
      $n2=$_POST['n2'];


      }
      if ($n1==$n2 ){
        /*|| ($n1+14)>$n2 || ($n2+14)>$n1*/
        echo '
        <p>Introduzca dos numeros distintos</p>
        <form  action="T3EJ18_1.php" method="post">
          <p>Numero  <input type="text" name="n1"></p>
          <p>Numero  <input type="text" name="n2"></p>
          <p><label><input type="submit" value="Calcular"></label></p>
        </form>';
      }
      else if ($n1>$n2 && ($n2+14)>$n1){
        echo '
        <p>Introduzca dos numeros distintos</p>
        <form  action="T3EJ18_1.php" method="post">
          <p>Numero  <input type="text" name="n1"></p>
          <p>Numero  <input type="text" name="n2"></p>
          <p><label><input type="submit" value="Calcular"></label></p>
        </form>';

      }
      else if ($n2>$n1 && ($n1+14)>$n2){
        echo '
        <p>Introduzca dos numeros distintos</p>
        <form  action="T3EJ18_1.php" method="post">
          <p>Numero  <input type="text" name="n1"></p>
          <p>Numero  <input type="text" name="n2"></p>
          <p><label><input type="submit" value="Calcular"></label></p>
        </form>';
      }
    else {
      if ($n1>$n2){
        echo "Los numeros comprendidos entre $n2 y $n1 son ";
        for ($i=$n2+7;$i<$n1;$i+=7){
          echo $i," ";
        }
      }
      else {
          echo "Los numeros comprendidos entre $n1 y $n2 son ";
          for ($i=$n1+7;$i<$n2;$i+=7){
            echo $i," ";
          }
        }
    }

  ?>

  </body>
</html>
