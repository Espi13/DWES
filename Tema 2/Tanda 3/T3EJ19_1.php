<!DOCTYPE html>
<!--Realiza un programa que pinte una pirámide por pantalla. La altura se debe pedir
por teclado mediante un formulario. La pirámide estará hecha de bolitas, ladrillos o
cualquier otra imagen de las 5 que se deben dar a elegir mediante un formulario.-->
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
        <form  action="T3EJ19_1.php" method="post">
          <p>Altura  <input type="text" name="h"></p>
          <p><label><input type="submit" value="Pintar"></label></p>
        </form>';
      }
      else {
        $cont=1;
        for ($i = $h; $i >= 1; $i--){
		          for ($j = 0; $j <= $i; $j++){
			               echo "&nbsp&nbsp";
		                 }
		          for ($k = 1; $k <= $cont; $k++){
			                echo "*" ;
		                  }
		          echo "</br></br>";
		            $cont+= 2;
	 }

      }

     ?>
  </body>
</html>
