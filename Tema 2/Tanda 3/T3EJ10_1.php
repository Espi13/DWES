<!DOCTYPE html>
<!--Escribe un programa que calcule la media de un conjunto de números positivos introducidos por teclado.
A priori, el programa no sabe cuántos números se introducirán.El usuario indicará que ha terminado de introducir
 los datos cuando meta un número negativo.-->
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    if (!isset($_POST['contador'])){
      $contador=-1;
      $media=0;
      $num=0;
    }
    else {
      $contador=$_POST['contador'];
      $num=$_POST['num'];
      $media=$_POST['media'];
    }
    if ($media<0 || $num<0){
      if ($contador==0){
        echo "La media es $num";
      }
      else{
        echo "La media es ", $media/$contador;
      }
    }
    else {
      $contador++;
      $media+=$num;
      echo "Terminar introduciendo numero negativo";
      echo "<form  action='T3EJ10_1.php' method='post'>";
      echo  "<label>Introduce un numero <input type='text' name='num'></label>";
      echo  '<input type="hidden" name="contador" value="', $contador,'">';
      echo  '<input type="hidden" name="media" value="', $media,'">';
      echo  '<input type="submit" value="Calcular">';
      echo "</form>";
    }


     ?>

  </body>
</html>
