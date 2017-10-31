<!DOCTYPE html>
<!--Escribe un programa que lea un número N e imprima una pirámide de números con
N filas como en la siguiente figura. Recuerda utilizar un tipo de letra de ancho fijo
como por ejemplo Courier para que los espacios tengan la misma anchura que los
números. 128 Bucles-->
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      if (!isset($_POST['h'])){
        $h=0;
      }
      else {
        $h=$_POST['h'];
      }
      if ($h<=0){
        echo '
        <p>Introduzca la altura de la piramide</p>
        <form  action="T3EJ24_1.php" method="post">
          <p>Altura  <input type="text" name="h"></p>
          <p><label><input type="submit" value="Pintar"></label></p>
        </form>';
      }
      else {
        echo "<p style=\"font-family: courier\">";
        $cont=1;
        $altura=1;
        for ($i = $h; $i >= 1; $i--){
		          for ($j = 0; $j <= $i; $j++){
			               echo "&nbsp";
		                 }
		          for ($k = 1; $k <=$cont; $k++){
			                echo $k ;
		                  }
              for ($k=$cont-1;$k>0;$k--){
                echo $k;
              }
		          echo "</br></br>";
		            $cont++;
  	 }
     echo "</p>";
      }

     ?>
  </body>
</html>
