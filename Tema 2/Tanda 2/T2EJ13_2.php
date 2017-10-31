<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $num1=$_POST['num1'];
      $num2=$_POST['num2'];
      $num3=$_POST['num3'];
      if ($num1>$num2 && $num1>$num3){
        $grande=$num1;
        if ($num2>$num3){
          $mediano=$num2;
          $pequeño=$num3;
        }
        else {
          $mediano=$num3;
          $pequeño=$num2;
        }
      }
      else if ($num2>$num1 && $num2>$num3){
          $grande=$num2;
          if ($num1>$num3){
            $mediano=$num1;
            $pequeño=$num3;
          }
          else {
            $mediano=$num3;
            $pequeño=$num1;
          }
      }
      else{
        $grande=$num3;
        if ($num1>$num2){
          $mediano=$num1;
          $pequeño=$num2;
        }
        else {
          $mediano=$num2;
          $pequeño=$num1;
        }
      }
      echo "El numero mas grande es ", $grande, ", el mediano ",$mediano," y el pequeño ",$pequeño;
     ?>
  </body>
</html>
