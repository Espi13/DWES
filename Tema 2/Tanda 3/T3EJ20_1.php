<!DOCTYPE html>
<!--Igual que el ejercicio anterior pero esta vez se debe pintar una pirámide hueca.-->
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
        <form  action="T3EJ20_1.php" method="post">
          <p>Altura  <input type="text" name="h"></p>
          <p><label><input type="submit" value="Pintar"></label></p>
        </form>';
      }
      else {
        $cont=1;
        for ($i = $h; $i >= 1; $i--){
		          for ($j = 0; $j <= $i; $j++){
			               echo "&nbsp ";
		                 }
		          for ($k = 1; $k <= $cont; $k++){
                    if($k==1 || $k==$cont || $i==1){
                      echo "*" ;
                    }
			                else{
                        echo "&nbsp ";
                    }
		                }
		          echo "</br></br>";
		            $cont+= 2;

	       }

       }

     ?>
  </body>
</html>
