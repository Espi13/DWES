<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
 <?php
 $modulo= array ("DWES","DIW","DAW","DWEC");
 $dia= $_POST['dia'];
 $dia= strtolower($dia);

    switch ($dia) {
      case 'lunes':
         echo  "Los ",$dia," a primera hora tenemos ",$modulo[0];
        break;
        case 'martes':
        case 'miercoles':
          echo  "Los ",$dia," a primera hora tenemos ",$modulo[1];
        break;
        case 'jueves':
          echo  "Los ",$dia," a primera hora tenemos ",$modulo[2];
        break;
        case 'viernes':
          echo  "Los ",$dia," a primera hora tenemos ",$modulo[3];
        break;
      default:
        echo "Ese dia no existe, listillo";
        break;
    }
  ?>
  </body>
</html>
