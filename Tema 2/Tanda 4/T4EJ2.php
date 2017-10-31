<!DOCTYPE html>
<!--Escribe un programa que pida 10 números por teclado y que luego muestre los números
introducidos junto con las palabras “máximo” y “mínimo” al lado del máximo y del mínimo respectivamente.-->
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      if (!isset($_POST['cont'])){
        $cont=-1;
        $num=array();
      }
      else{
        $cont=$_POST['cont'];
        $num[$cont]=$_POST['num'];
        echo $num[0],"</br>";
      }
      if ($cont<5){
        $cont++;
        echo $cont;
        echo "<form  action='T4EJ2.php' method='post'>";
        echo  "<label>Introduce un numero <input type='text' name='num'></label>";
        echo  '<input type="hidden" name="cont" value="', $cont,'">';
        echo  '<input type="hidden" name="cont" value="', $num[$cont],'">';
        echo  '<input type="submit" value="Introducir">';
        echo "</form>";
      }
      else {
        for ($i=0;$i<5;$i++){
          echo $num[0],"</br>";
        }
      }

     ?>
  </body>
</html>
