<!DOCTYPE html>
<!--Escribe un programa que muestre por pantalla todos los números enteros positivos menores
a uno leído por teclado que no sean divisibles entre otro también leído de igual forma.-->
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    if (!isset($_POST['num'])|| !isset($_POST['divi'])){
      $num=-1;
      $divi=0;
    }
    else {
       $num=$_POST['num'];
       $divi=$_POST['divi'];
    }
    if ($divi==0){
      echo '
        <p>Introduzca un numero</p>
        <form  action="T3EJ29_1.php" method="post">
        <p>Numero  <input type="text" name="num"></p>
        <p>Divisor  <input type="text" name="divi"></p>
        <p><label><input type="submit" value="Mostrar"></label></p>
        </form>';
    }
    else {
      for ($i=1;$i<=$num;$i++){
        if ($i%$divi!=0){
          echo $i,"&nbsp ";
        }
      }

    }
     ?>
  </body>
</html>
