<!DOCTYPE html>
<!--Realiza el control de acceso a una caja fuerte. La combinación será un número de 4 cifras.
El programa nos pedirá la combinación para abrirla. Si no acertamos, se nos mostrará el
mensaje “Lo siento, esa no es la combinación” y si acertamos se nos dirá “La caja fuerte se
ha abierto satisfactoriamente”. Tendremos cuatro oportunidades para abrir la caja fuerte.-->
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    if (!isset($_POST['contador'])){
      $contador=4; /*Inicializamos el contador en 4*/
      $codigo=1; /*numero de codigo cualquiera para inicializarlo*/


    }else {
      $contador=$_POST['contador']; /*Obtenemos el valor anterior del contador*/
      $codigo=$_POST['codigo']; /*Obtenemos el numnero del codigo que hemos introducido*/
    }

    $secreto=4455;

    if($codigo==$secreto){
      echo "La caja fuerte se ha abierto";
    }
    else if ($contador==0){
      
      echo "Los siento, has agotado todas tus oportunidades";

    }
    else  {
      echo "Te quedan ", $contador, " oportunidades para abrir la caja fuerte </br>";
      $contador--;
      echo "<form  action='T3EJ7_1.php' method='post'>";
      echo  "<label>Introduce el codigo secreto <input type='text' name='codigo'></label>";
      echo  '<input type="hidden" name="contador" value="', $contador,'">';
      echo  '<input type="submit" value="ABRIR">';
      echo "</form>";
    }

     ?>

  </body>
</html>
