<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $num=$_POST['num'];
    $copia=$num;
    $digitos=0;
    while ($num>0){
      $num=floor($num/10);
      $digitos++;
    }
    echo "El numero $copia tiene $digitos digitos";


     ?>
  </body>
</html>
