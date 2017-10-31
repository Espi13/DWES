<!DOCTYPE html>
<!--Escribe un programa que calcule el factorial de un número entero leído por teclado.-->
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    if (!isset($_POST['num'])){
      $num=-1;
    }
    else {
      $num=$_POST['num'];
    }
    if ($num<0){
      echo '
        <p>Introduzca un numero</p>
        <form  action="T3EJ28_1.php" method="post">
        <p>Numero  <input type="text" name="num"></p>
        <p><label><input type="submit" value="Mostrar"></label></p>
        </form>';
    }
    else {
      if ($num==0){
        echo "El factorial de 0 es 1";
      }
      else {
        $fact=1;
        for ($i=1;$i<=$num;$i++){
          $fact*=$i;
        }
        echo "El factorial de $num es $fact";
      }
    }
     ?>
  </body>
</html>
