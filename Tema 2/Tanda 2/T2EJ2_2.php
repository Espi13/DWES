<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $hora=$_POST['hora'];

if ($hora>=6 && $hora<=12){
echo "Buenos dias";

}
else if ($hora>=13 && $hora<=20){
  echo "Buenas tardes";
}
else if (($hora>=21 && $hora<=23)|| ($hora>=0 && $hora<=5)) {
  echo "Buenas noches";
}
else {
  echo "La hora introducida esta mal";
}

     ?>
  </body>
</html>
