<!DOCTYPE html>
<!--Define tres arrays de 20 números enteros cada una, con nombres “numero”, “cuadrado” y
“cubo”. Carga el array “numero” con valores aleatorios entre 0 y 100. En el array
“cuadrado” se deben almacenar los cuadrados de los valores que hay en el array
“numero”. En el array “cubo” se deben almacenar los cubos de los valores que hay en
“numero”. A continuación, muestra el contenido de los tres arrays dispuesto en tres
columnas.-->
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    echo "<table>";
    echo "<tr><td>n<sup>1</sup></td>  <td>n<sup>2</sup></td>  <td>n<sup>3</sup></td></tr>";
    for ($i=0;$i<20;$i++){
      $numero[$i]=rand(0,100);
      $cuadrado[$i]=pow($numero[$i],2);
      $cubo[$i]=pow($numero[$i],3);
      echo "<tr><td>$numero[$i]</td> <td>$cuadrado[$i]</td> <td>$cubo[$i]</td> </tr>";
    }


     ?>
  </body>
</html>
