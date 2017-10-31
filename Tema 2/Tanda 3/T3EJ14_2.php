<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $base =$_POST['base'];
    $exp=$_POST['exp'];
    if ($exp==0){
      echo "$base <sup>$exp</sup> = 1";
    }
    else {
      echo "$base <sup>$exp</sup> = ",pow($base,$exp);
    }
    /* Otra forma de calcularlo
    $result=1;
    if ($exp>0){
    for ($i=0;$i<$exp;$i++){
      $result*=$base;
    }
    }
    else {
      for ($i=0;$i< -$exp;$i++){
        $result*=$base;
      }
      $result=1/$result;
    }
    echo "$base <sup>$exp</sup> = $result";
    */
     ?>
  </body>
</html>
