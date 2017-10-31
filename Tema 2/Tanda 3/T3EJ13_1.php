<!DOCTYPE html>
<!--Escribe un programa que calcule la media de un conjunto de números positivos introducidos por teclado.
A priori, el programa no sabe cuántos números se introducirán.El usuario indicará que ha terminado
de introducir los datos cuando meta un número negativo.-->
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php


      if (!isset($_POST['contpos']) && !isset($_POST['contnega'])){
        $contpos=0;
        $contnega=0;
        $num=0;
      }
      else {
        $contpos=$_POST['contpos'];
        $contnega=$_POST['contnega'];
        $num=$_POST['num'];
      }

      if (!isset($_POST['cont']))
      {
        $cont=0;
      }
      else {
        $cont=$_POST['cont'];
      }
      if ($cont<10){
        if ($num<0){
          $contnega++;
        }
        else{
          $contpos++;
        }
        $cont++;
      echo "<form  action='T3EJ13_1.php' method='post'>";
      echo  "<label>Introduce un numero <input type='text' name='num'></label>";
      echo  '<input type="hidden" name="contpos" value="', $contpos,'">';
      echo  '<input type="hidden" name="contnega" value="', $contnega,'">';
      echo  '<input type="hidden" name="cont" value="', $cont,'">';
      echo  '<input type="submit" value="Calcular">';
      echo "</form>";
    }
    else{
      echo " Hay $contpos numeros positivos y $contnega numeros negativos";
    }
    //Pasar la variable del input  por bucle
    ?>


  </body>
</html>
