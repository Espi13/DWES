<!DOCTYPE html>
<!--Escribe un programa que lea 15 números por teclado y que los almacene en un array.
 Rota los elementos de ese array,es decir, el elemento de la posición 0 debe pasar a la
 posición 1, el de la 1 a la 2, etc. El número que se encuentra en la última
 posición debe pasar a la posición 0. Finalmente, muestra el contenido del array.-->
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
    if ($cont==10){
      $numeroTexto = $numeroTexto . " " . $num;
      $numeroTexto = substr($numeroTexto, 3);
      $numero = explode(" ", $numeroTexto);

      for ($i=0,$j=count($numero)-1;$i<count($numero);$i++,$j--){

        $reves[$i]=$numero[$j];
      }

      foreach ($reves as $n) {
          echo $n,"</br>";
      }

    }
    if ($cont<10 || !isset($num)){
      echo "<form  action='T4EJ3.php' method='post'>";
      echo  "<label>Introduce un numero <input type='text' name='num'></label>";
      echo  '<input type="hidden" name="cont" value="', ++$cont,'">';
      echo  '<input type="hidden" name="numero" value="',$numeroTexto." ".$num,'">';
      echo  '<input type="submit" value="Introducir">';
      echo "</form>";
    }

     ?>

  </body>
</html>
