<!DOCTYPE html>
<!--Realiza un programa que vaya pidiendo números hasta que se introduzca un numero
negativo y nos diga cuantos números se han introducido, la media de los impares y el mayor
de los pares . El número negativo sólo se utiliza para indicar el final de la introducción de
datos pero no se incluye en el cómputo.-->
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
      $contadorimp=0;
      $max=0;
    }
    else {
      $contador=$_POST['contador'];
      $num=$_POST['num'];
      $media=$_POST['media'];
      $contadorimp=$_POST['contadorimp'];
      $max=$_POST['max'];
    }
    if ($num<0){
      echo "Se han introducido un total de $contador numeros </br>";
      echo "El mayor numero de los pares es $max </br>";
      if ($contadorimp>0){
      echo "La media de los numeros impares es ", $media/$contadorimp;
      }
      else {
        echo "No se han introducido numeros impares";
      }
    }

    else {
      if ($num%2==0){
          if ($max<=$num){
            $max=$num;
          }
      }
      else{
        $media+=$num;
        $contadorimp++;
      }
      $contador++;
      $media+=$num;
      echo "Terminar introduciendo numero negativo";
      echo "<form  action='T3EJ21_1.php' method='post'>";
      echo  "<label>Introduce un numero <input type='text' name='num'></label>";
      echo  '<input type="hidden" name="contador" value="', $contador,'">';
      echo  '<input type="hidden" name="contadorimp" value="', $contadorimp,'">';
      echo  '<input type="hidden" name="max" value="', $max,'">';
      echo  '<input type="hidden" name="media" value="', $media,'">';
      echo  '<input type="submit" value="Calcular">';
      echo "</form>";
    }


     ?>

  </body>
</html>
