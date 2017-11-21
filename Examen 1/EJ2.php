<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

      if (!isset($_POST['prediccion'])){
        $number = rand(1,100);
        echo '<p>Introduzca la prediccion</p>
        <form  action="EJ2.php" method="post">
          <p>Prediccion <input type="text" name="prediccion"></p>
          <input type="hidden" name="number" value="', $number,'">
          <p><label><input type="submit" value="Comprobar numero"></label></p>
        </form>';
      }
      else {

        $prediccion=$_POST['prediccion'];
        $number=$_POST['number'];
        
        if ($prediccion==""){
          echo "<strong>No ha introducido ningun numero</strong>";
          echo '<p>Introduzca la prediccion</p>
          <form  action="EJ2.php" method="post">
            <p>Prediccion <input type="text" name="prediccion"></p>
            <input type="hidden" name="number" value="', $number,'">
            <p><label><input type="submit" value="Comprobar numero"></label></p>
          </form>';

        }
        else if ($prediccion<1){
          echo "<strong>No ha escrito un numero entero positivo</strong>";
          echo '<p>Introduzca la prediccion</p>
          <form  action="EJ2.php" method="post">
            <p>Prediccion <input type="text" name="prediccion"></p>
            <input type="hidden" name="number" value="', $number,'">
            <p><label><input type="submit" value="Comprobar numero"></label></p>
          </form>';
        }
        else if ($prediccion<$number){
          echo "<strong>Demasiado Pequeño</strong>";
          echo '<p>Introduzca la prediccion</p>
          <form  action="EJ2.php" method="post">
            <p>Prediccion <input type="text" name="prediccion"></p>
            <input type="hidden" name="number" value="', $number,'">
            <p><label><input type="submit" value="Comprobar numero"></label></p>
          </form>';
        }
        else if ($prediccion>$number){
          echo "<strong>Demasiado Grande</strong>";
          echo '<p>Introduzca la prediccion</p>
          <form  action="EJ2.php" method="post">
            <p>Prediccion <input type="text" name="prediccion"></p>
            <input type="hidden" name="number" value="', $number,'">
            <p><label><input type="submit" value="Comprobar numero"></label></p>
          </form>';
        }
        else if ($prediccion==$number){
          echo '<strong>Enorabuena</strong>
          <form  action="EJ2.php" method="post">
            <input type="hidden" name="number" value="', $number,'">
            <p><label><input type="submit" value="Volver a jugar"></label></p>
          </form>';

        }

      }

     ?>


     </form>
  </body>
</html>
