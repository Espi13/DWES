<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $num=$_POST['num'];
    $fibb1=1;
    $sumfibb=0;
    if ($num==0){
      echo "El  Fibonacci de 0 es 1";
    }
    else {
      for ($i=1;$i<=$num;$i++){
        $aux=$sumfibb;
        $sumfibb+=$fibb1;
        $fibb1=$aux;

        echo $sumfibb," ";
      }
    }
    ?>
  </body>
</html>
