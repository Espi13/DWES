<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $puntuacion=0;
      if ($_POST['primera']=='a'){
        $puntuacion+=1;
      }
      if ($_POST['segunda']=='b'){
        $puntuacion+=1;
      }
      if ($_POST['tercera']=='b'){
        $puntuacion+=1;
      }
      if ($_POST['cuarta']=='b'){
        $puntuacion+=1;
      }
      if ($_POST['quinta']=='b'){
        $puntuacion+=1;
      }
      if ($_POST['sexta']=='b'){
        $puntuacion+=1;
      }
      if ($_POST['septima']=='b'){
        $puntuacion+=1;
      }
      if ($_POST['octaba']=='b'){
        $puntuacion+=1;
      }
      if ($_POST['novena']=='b'){
        $puntuacion+=1;
      }
      if ($_POST['decima']=='b'){
        $puntuacion+=1;
      }
      echo "Ha sacado un: ",$puntuacion;
     ?>
  </body>
</html>
