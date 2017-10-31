<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $num=$_POST['num'];
    echo "La ultima cifra del numero $num es ", $num%10;
    ?>
  </body>
</html>
