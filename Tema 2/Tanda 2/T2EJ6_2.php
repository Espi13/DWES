<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $grave=9.81;
      $h=$_POST['h'];
       echo "El tiempo que tarda es: ",round(sqrt((2*$h)/$grave),2), " m/s<sup>2</sup>";
     ?>
  </body>
</html>
