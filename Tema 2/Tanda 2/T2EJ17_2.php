<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $num=$_POST['num'];
    if ($num<10){
      $cifra=$num;
    }
    else if ($num>=10 && $num<100){
      $cifra=$num/10;
    }
    else if ($num>=100 && $num<1000){
      $cifra=$num/100;
    }
    else if ($num>=1000 && $num<10000){
      $cifra=$num/1000;
    }
    else if ($num>=10000){
      $cifra=$num/10000;
    }
    echo "La primera cifra del numero introducido es ", floor($cifra);
     ?>
   </br>
   <a href="T2EJ17_1.php">Volver</a>
  </body>
</html>
