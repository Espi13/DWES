<!DOCTYPE html>
<!--Realiza un programa que pida 8 números enteros y que luego muestre esos números de colores,
los pares de un color y los impares de otro.-->
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    if (!isset($_POST['num'])){
      $cont=0;
      $num=0;
      $numeroTexto="";
    }
    else{
      $num=$_POST['num'];
      $cont=$_POST['cont'];
      $numeroTexto=$_POST['numero'];

    }
    if ($cont==8){
      $numeroTexto = $numeroTexto . " " . $num;
      $numeroTexto = substr($numeroTexto, 3);
      $numero = explode(" ", $numeroTexto);
      foreach ($numero as $n ) {
        if ($n%2==0){
          echo '<span style="color: blue; font-weight: bold;">',$n,'</span>'." ";
        }
        else {
          echo '<span style="color: red; font-weight: bold;">',$n,'</span>'." ";
        }
      }

    }
    if ($cont<8){
      echo "<form  action='T4EJ6.php' method='post'>";
      echo  "<label>Introduce un numero <input type='text' name='num'></label>";
      echo  '<input type="hidden" name="cont" value="', ++$cont,'">';
      echo  '<input type="hidden" name="numero" value="',$numeroTexto." ".$num,'">';
      echo  '<input type="submit" value="Introducir">';
      echo "</form>";
    }
    ?>
  </body>
</html>
