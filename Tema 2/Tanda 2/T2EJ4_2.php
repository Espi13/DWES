<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
 <?php
  $horas = $_POST['horas'];

if ($horas<=40){
  $salario = $horas * 12;
  echo "El salario de esta semana es: ",$salario," €.";
}
else {
  $salario=($horas-40)*16;
  $salario=(40*12)+$salario;
  echo "El salario de esta semana es: ",$salario," €.";
}

  ?>
  </body>
</html>
