<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    if ($_POST['num']%2==0){
      $par=true;
    }
    else{
      $par=false;
    }
    if ($_POST['num']%5==0){
      $cinco=true;
    }
    else {
      $cinco=false;
    }
    if ($par && $cinco){
      echo "El numero ", $_POST['num'], " es par y divisible entre 5.";
    }
    else if ($par && !$cinco){
      echo "El numero ", $_POST['num'], " es par pero no es divisible entre 5.";
    }
    else if (!$par && $cinco){
      echo "El numero ", $_POST['num'], " no es par pero  es divisible entre 5.";
    }
    else {
      echo "El numero ", $_POST['num'], " no es par ni es divisible entre 5.";
    }

     ?>
  </body>
</html>
