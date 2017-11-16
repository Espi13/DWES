<!DOCTYPE html>
<!--Realiza un programa que escoja al azar 10 cartas de la baraja española y que diga cuántos puntos suman
según el juego de la brisca. Emplea un array asociativo para obtener los puntos a partir del nombre de la figura
de la carta. Asegúrate de que no se repite ninguna carta, igual que si las hubieras cogido de una baraja de verdad.-->
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $puntuacion = array ("Uno"=>11,"Dos"=>0,"Tres"=>10,"Cuatro"=>0,"Cinco"=>0,"Seis"=>0,"Siete"=>0,"Sota"=>2,
      "Caballo"=>3,"Rey"=>4);
      $palo = array("Oros","Copas","Bastos","Espadas");
      $figura=array("Uno","Dos","Tres","Cuatro","Cinco","Seis","Siete","Sota","Caballo","Rey");

      $cartasObtenidas=array();
      $cont=0;
      $puntos=0;
      do{
        $paloCarta=$palo[rand(0,3)];
        $figuraCarta=$figura[rand(0,9)];
        $puntoCarta=$puntuacion[$figuraCarta];
        $nombreCarta="$figuraCarta de $paloCarta";
        if (!in_array($nombreCarta,$cartasObtenidas)){
          echo "$nombreCarta = $puntoCarta puntos </br>";
          $cartasObtenidas[]=$nombreCarta;
          $puntos+=$puntoCarta;
          $cont++;
        }
      }while ($cont<10);
      echo "</br>Total de puntos: $puntos puntos";

     ?>
  </body>
</html>
