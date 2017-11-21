<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 15</title>
  </head>
  <body>

 <?php
$array = array();
$i =10;
for($e =0; $e<12;$e++){
  for($j=0;$j<12;$j++){
    $array[$e][$j] = $i;
    if($i <100){
      echo "0".$i." ";
    }else{
      echo $i." ";
    }
    $i++;
  }
  echo "</br></br>";
}
$aux =0;
$mitad=6;
for($e=0,$i=0,$maxe=11,$maxi=11,$x=$e,$y=$i;$e<$mitad;$e++,$i++,$maxe--,$maxi--){
  $aux= $array[$e][$i];
  for($x=$e;$x<$maxe;$x++){
    $array[$x][$y]=$array[$x+1][$y];
  }
  for($y=$i;$y<$maxi;$y++){
    $array[$x][$y]=$array[$x][$y+1];
  }
  for($x=$maxe;$x>$e;$x--){
    $array[$x][$y]=$array[$x-1][$y];
  }
  for($y=$maxi;$y>$i+1;$y--){
    $array[$x][$y]=$array[$x][$y-1];
  }
  $array[$x][$y]=$aux;
}
echo "</br></br>";
for($e =0; $e<12;$e++){
  for($j=0;$j<12;$j++){
    if($array[$e][$j] <100){
      echo "0".$array[$e][$j]." ";
    }else{
      echo $array[$e][$j]." ";
    }
  }
  echo "</br></br>";
}
  echo "</br></br>";
  ?>
  </body>
</html>
