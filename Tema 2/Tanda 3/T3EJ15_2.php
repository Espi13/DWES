<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $base = $_POST['base'];
    $exp=$_POST['exp'];
    for($i=1;$i<$exp;$i++){
      $result=1;
      $ex=$i;
      for ($j=0;$j<$ex;$j++){
        $result*=$base;
      }
      echo "$base <sup>$ex</sup> = $result </br>";
    }


     ?>
  </body>
</html>
