<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $frutas = array("&#127815","&#127816","&#127817","&#127818","&#127819","&#127820","&#127821","&#127822"
    ,"&#127823","&#127824","&#127825","&#127826","&#127827");
    $frutasOb=array();
    $frutasVeces=array();
    $contFrutas=array();
    $numeroFrutas=rand(7,20);
    for($i=0;$i<$numeroFrutas;$i++){
      $frutasOb[]=$frutas[rand(0,12)];
    }

    echo '<p style="font-size: 5rem">';
    for ($i=0;$i<$numeroFrutas;$i++){
      echo " $frutasOb[$i]";
    }
    echo "</p>";
    for ($i=0;$i<$numeroFrutas;$i++){
      if (!in_array($frutasOb[$i],$frutasVeces)){
        $frutasVeces[]=$frutasOb[$i];
      }
    }
    for ($i=0;$i<count($frutasVeces);$i++){
      $contFrutas[$i]=0;
    }
    for ($i=0;$i<$numeroFrutas;$i++){
      for ($j=0;$j<count($frutasVeces);$j++){
        if ($frutasVeces[$j]==$frutasOb[$i]){
          $contFrutas[$j]++;
        }
      }

    }
    echo "<h1>Resultados</h1>";
    for ($i=0;$i<count($frutasVeces);$i++){
      if ($contFrutas[$i]==1){
        echo "La fruta $frutasVeces[$i] se repite $contFrutas[$i] vez</br>";
      }
      else {
        echo "La fruta $frutasVeces[$i] se repite $contFrutas[$i] veces</br>";
      }

    }
     ?>
     <center><button onclick="location.reload()">¡¡¡ DisFruta otra vez !!!</button></center>

     </form>
  </body>
</html>
