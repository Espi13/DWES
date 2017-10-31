<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $mes = $_POST['mes'];
    $dia = $_POST['dia'];
    $mes= strtolower($mes);
    switch ($mes) {
      case 'enero':
        if ($dia<21){
          $horoscopo="Capricornio";
          echo "Su horoscopo es ",$horoscopo;
        }
        else {
          $horoscopo="Acuario";
          echo "Su horoscopo es ",$horoscopo;
        }
        break;
      case 'febrero':
        if ($dia<20){
          $horoscopo="Acuario";
          echo "Su horoscopo es ",$horoscopo;
        }
        else {
          $horoscopo="Piscis";
          echo "Su horoscopo es ",$horoscopo;
        }
        break;
      case 'marzo':
        if ($dia<22){
          $horoscopo="Piscis";
          echo "Su horoscopo es ",$horoscopo;
        }
        else {
          $horoscopo="Aries";
          echo "Su horoscopo es ",$horoscopo;
        }
        break;
      case 'abril':
        if ($dia<20){
          $horoscopo="Aries";
          echo "Su horoscopo es ",$horoscopo;
        }
        else {
          $horoscopo="Tauro";
          echo "Su horoscopo es ",$horoscopo;
        }
        break;
        case 'mayo':
          if ($dia<21){
            $horoscopo="Tauro";
            echo "Su horoscopo es ",$horoscopo;
          }
          else {
            $horoscopo="Geminis";
            echo "Su horoscopo es ",$horoscopo;
          }
          break;
          case 'junio':
            if ($dia<22){
              $horoscopo="Geminis";
              echo "Su horoscopo es ",$horoscopo;
            }
            else {
              $horoscopo="Cancer";
              echo "Su horoscopo es ",$horoscopo;
            }
            break;
            case 'julio':
              if ($dia<22){
                $horoscopo="Cancer";
                echo "Su horoscopo es ",$horoscopo;
              }
              else {
                $horoscopo="Leo";
                echo "Su horoscopo es ",$horoscopo;
              }
              break;
              case 'agosto':
                if ($dia<24){
                  $horoscopo="Leo";
                  echo "Su horoscopo es ",$horoscopo;
                }
                else {
                  $horoscopo="Virgo";
                  echo "Su horoscopo es ",$horoscopo;
                }
                break;
                case 'septiembre':
                  if ($dia<24){
                    $horoscopo="Virgo";
                    echo "Su horoscopo es ",$horoscopo;
                  }
                  else {
                    $horoscopo="Libra";
                    echo "Su horoscopo es ",$horoscopo;
                  }
                  break;
                  case 'octubre':
                    if ($dia<24){
                      $horoscopo="Libra";
                      echo "Su horoscopo es ",$horoscopo;
                    }
                    else {
                      $horoscopo="Escorpion";
                      echo "Su horoscopo es ",$horoscopo;
                    }
                    break;
                    case 'noviembre':
                      if ($dia<24){
                        $horoscopo="Escorpion";
                        echo "Su horoscopo es ",$horoscopo;
                      }
                      else {
                        $horoscopo="Sagitario";
                        echo "Su horoscopo es ",$horoscopo;
                      }
                      break;
                      case 'diciembre':
                        if ($dia<23){
                          $horoscopo="Sagitario";
                          echo "Su horoscopo es ",$horoscopo;
                        }
                        else {
                          $horoscopo="Capricornio";
                          echo "Su horoscopo es ",$horoscopo;
                        }
                        break;

      default:
        echo "El dia o el mes introducidos estan mal, vuelva a introducirlos </br>";
        echo "<a href='T2EJ10_1.php'> Volver</a>";
        break;
    }



     ?>
  </body>
</html>
