<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $num=$_POST['num'];
    $capicua=false;
    if ($num<10){
      $capicua=true;
    }
    else if ($num>=10 && $num<100){
      if (floor($num/10)==$num%10){
        $capicua=true;
      }

    }
    else if ($num>=100 && $num<1000){
      if (floor($num/100)==$num%10){
        $capicua=true;
      }
    }
    else if ($num>=1000 && $num<10000){
      if ((floor( $num / 1000 ) == ($num % 10) ) && ( (floor( $num / 100 ) % 10 )== (floor( $num / 10) % 10 ))){
        $capicua=true;
      }
    }
    else if ($num>=10000){
      if ((floor( $num / 10000 ) == ($num % 10) ) && ( ( (floor($num / 1000) % 10) ) == (floor( $num / 10) % 10))){
        $capicua=true;
      }
    }
    if ($capicua){
      echo "El numero $num es capicua";
    }
    else {
      echo "El numero $num no es capicua";
    }

     ?>
  </body>
</html>
