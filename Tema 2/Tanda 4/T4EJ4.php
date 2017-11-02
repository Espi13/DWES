<!DOCTYPE html>
<!--Escribe un programa que genere 100 números aleatorios del 0 al 20 y que los muestre por pantalla
separados por espacios.El programa pedirá entonces por teclado dos valores y a continuación cambiará
todas las ocurrencias del primer valor por el segundo en la lista generada anteriormente. Los números
que se han cambiado deben aparecer resaltados de un color diferente.-->
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

      if (!isset($_POST['num1'])||!isset($_POST['num2'])){
        for ($i=0;$i<100;$i++){
          $numeros[$i]=rand(0,20);
        }
        foreach ($numeros as $n ) {
          echo "$n ";
        }

        echo "<form  action='T4EJ4.php' method='post'>";
        echo  "<label>Introduce un numero <input type='text' name='num1'></label>";
        echo  "<label>Introduce un numero <input type='text' name='num2'></label>";
        echo  '<input type="hidden" name="numeros" value="',serialize($numeros),'">';
        echo  '<input type="submit" value="Introducir">';
        echo "</form>";
      }
      else {
        $susir=$_POST['num1'];
        $susto=$_POST['num2'];

        $numeros=unserialize($_POST['numeros']);
        foreach ($numeros as $n ) {
          echo "$n ";
        }
        echo "</br>";
        for ($i=0;$i<100;$i++){
          if ($numeros[$i]==$susir){
            $numeros[$i]=$susto;
          }
        }
        foreach ($numeros as $n ) {
          echo "$n ";
        }

      }





     ?>
  </body>
</html>
