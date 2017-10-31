<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $num=$_POST['n'];
    $primo=true;
    for ($i=2;$i<=sqrt($num);$i++){
      if ($num%$i==0){
        $primo=false;
      }
    }
    if ($primo){
      echo "El numero $num es primo";
    }
    else {
      echo "El numero $num no es primo";
    }

     ?>
  </body>
</html>
