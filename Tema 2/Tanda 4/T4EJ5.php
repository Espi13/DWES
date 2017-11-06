<!DOCTYPE html>
<!--Realiza un programa que pida la temperatura media que ha hecho en cada mes de un determinado año
y que muestre a continuación un diagrama de barras horizontales con esos datos.
Las barras del diagrama se pueden dibujar a base de la concatenación de una imagen.-->
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $mes=array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Ocutubre","Noviembre","Diciembre");
      if (!isset($_POST['anno'])){
        $anno=0;
      }
      else{
        $anno=$_POST['anno'];
      }

      if (!isset($_POST['temp'])){
        $temp=0;
        $tempTexto="";
        $cont=0;
      }
      else {
        $temp=$_POST['temp'];
        $cont=$_POST['cont'];
        $tempTexto=$_POST['temperatura'];
      }
      if ($cont==12){
        $tempTexto = $tempTexto . " " . $temp;
        $tempTexto = substr($tempTexto, 3);
        $temperaturas = explode(" ", $tempTexto);

        echo "<table>";
        for ($j=0;$j<12;$j++){
          echo "<tr><td>",$mes[$j],"</td><td>";
          for ($i=0;$i<$temperaturas[$j];$i++){
            echo "|";
          }
          echo "$temperaturas[$j]"."ºC</br></td></tr>";
        }
        echo "</table>";

        }
      if (!isset($_POST['anno'])){
        echo "<form  action='T4EJ5.php' method='post'>";
        echo "<label>Introduce el año <input type='text' name='anno'></label></br>";
        echo  '<input type="submit" value="Introducir">';
        echo "</form>";
      }
      else {
        if ($cont<12 || !isset($_POST['temp'])){
          echo "<form  action='T4EJ5.php' method='post'>";
          echo $cont;
            echo "Temperatura del año $anno </br>";
            echo  "<label>",$mes[$cont]," <input type='text' name='temp'></label>";
            echo  '<input type="hidden" name="anno" value="', $anno,'">';
            echo  '<input type="hidden" name="cont" value="', ++$cont,'">';
            echo  '<input type="hidden" name="temperatura" value="',$tempTexto." ".$temp,'">';
            echo  '<input type="submit" value="Introducir">';
            echo "</form>";
          }
      }

     ?>
  </body>
</html>
