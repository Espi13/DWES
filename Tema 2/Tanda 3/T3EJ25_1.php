<!DOCTYPE html>
<!--Realiza un programa que pida un número por teclado y que luego muestre ese número al revés.-->
<html>
  <head>
    <meta charset="utf-8">
    <title>
    </title>
  </head>
  <body>
    <?php
      if (!isset($_POST['num'])){
        $num=-1;
      }
      else {
        $num=$_POST['num'];
      }
      if ($num==-1){
        echo '
          <p>Introduzca el numero a darle la vuelta</p>
          <form  action="T3EJ25_1.php" method="post">
          <p>Numero  <input type="text" name="num"></p>
          <p><label><input type="submit" value="Mostrar"></label></p>
          </form>';
      }
      else{
        $numreves=0;
        $numero=$num;
        while ($num>0){
          $numreves=($numreves*10)+($num%10);
          $num=floor($num/10);

        }
        echo "El numero $numero al reves es $numreves";
      }


     ?>

  </body>
</html>
