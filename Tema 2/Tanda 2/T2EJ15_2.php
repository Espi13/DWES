<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $infiel=0;

      if ($_POST['1']=='v'){
        $infiel+=3;
      }
      if ($_POST['2']=='v'){
        $infiel+=3;
      }
      if ($_POST['3']=='v'){
        $infiel+=3;
      }
      if ($_POST['4']=='v'){
        $infiel+=3;
      }
      if ($_POST['5']=='v'){
        $infiel+=3;
      }
      if ($_POST['6']=='v'){
        $infiel+=3;
      }
      if ($_POST['7']=='v'){
        $infiel+=3;
      }
      if ($_POST['8']=='v'){
        $infiel+=3;
      }
      if ($_POST['9']=='v'){
        $infiel+=3;
      }
      if ($_POST['10']=='v'){
        $infiel+=3;
      }
      if ($infiel<=10){
        echo "¡Enhorabuena! tu pareja parece ser totalmente fiel.";
      }
      else if ($infiel>10 && $infiel<=22){
        echo "Quizás exista el peligro de otra persona en su vida o en su mente, aunque seguramente será algo sin importancia. No bajes la guardia.";
      }
      else{
        echo "Tu pareja tiene todos los ingredientes para estar viviendo un romance con otra persona. Te aconsejamos que indagues un poco más y averigües qué es lo que está pasando por su cabeza.";
      }

     ?>
  </body>
</html>
