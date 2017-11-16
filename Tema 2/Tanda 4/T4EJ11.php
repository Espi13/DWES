<!DOCTYPE html>
<!--Crea un mini-diccionario español-inglés que contenga, al menos, 20 palabras (con su traducción).
Utiliza un array asociativo para almacenar las parejas de palabras. El programa pedirá una palabra
en español y dará la correspondiente traducción en inglés.-->
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    if (!isset($_POST['palabra'])){
        echo "<form  action='T4EJ11.php' method='post'>";
        echo "<label>Palabra en Español <input type='text' name='palabra' autofocus required></label></br>";
         echo "<input type='submit'  value='Traducir'>";
        echo "</form>";

    }
    else {
      $palabra=$_POST['palabra'];
      $diccionario = array ("rojo"=>"red","verde"=>"green","amarillo"=>"yellow","negro"=>"black","rosa"=>"pink"
      ,"marron"=>"brown","morado"=>"purple","naranja"=>"orange","azul"=>"blue","bienvenido"=>"welcome","blanco"=>"white"
      ,"arbol"=>"tree","ventana"=>"window","sol"=>"sun","luna"=>"moon","estrella"=>"star","raton"=>"mouse"
      ,"gato"=>"cat","perro"=>"dog","agua"=>"water");
      $espword=array("rojo","verde","amarillo","negro","rosa","marron","morado","naranja","azul","bienvenido","blanco",
      "arbol","ventana","sol","luna","estrella","raton","gato","perro","agua");
      if (in_array($palabra,$espword)){
        echo "$palabra = $diccionario[$palabra]</br>";
      }
      else {
        echo "Lo siento el diccionario no contiene esa palabra de momento";
      }
    }

     ?>
     
  </body>
</html>
