<!DOCTYPE html>
<!--Escribe un programa que muestre, cuente y sume los múltiplos de 3 que hay entre 1 y un
número leído por teclado.-->
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
    if($num<3){
      echo '
        <p>Introduzca un numero</p>
        <form  action="T3EJ27_1.php" method="post">
        <p>Numero  <input type="text" name="num"></p>
        <p><label><input type="submit" value="Mostrar"></label></p>
        </form>';
    }
    else {
      $suma=0;
      $cont=0;
      echo "Los multiplos de 3 entre 1 y $num son: </br> ";
      for ($i=3;$i<=$num;$i+=3){
        echo $i, "&nbsp ";
      }
    }

     ?>
  </body>
</html>
