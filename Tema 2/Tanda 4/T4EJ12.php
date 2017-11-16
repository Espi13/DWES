<!DOCTYPE html>
<!--Realiza un programa que escoja al azar 5 palabras en español del mini-diccionario del ejercicio anterior.
El programa pedirá que el usuario teclee la traducción al inglés de cada una de las palabras y comprobará
 si son correctas. Al final, el programa deberá mostrar cuántas respuestas son válidas y cuántas erróneas.-->
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $diccionario = array ("rojo"=>"red","verde"=>"green","amarillo"=>"yellow","negro"=>"black","rosa"=>"pink"
    ,"marron"=>"brown","morado"=>"purple","naranja"=>"orange","azul"=>"blue","bienvenido"=>"welcome","blanco"=>"white"
    ,"arbol"=>"tree","ventana"=>"window","sol"=>"sun","luna"=>"moon","estrella"=>"star","raton"=>"mouse"
    ,"gato"=>"cat","perro"=>"dog","agua"=>"water");

    if (!isset($_POST['esp'])){
      echo "Traduzca las siguientes palabras del Ingles</br>";
      foreach ($diccionario as $clave => $valor) {
        $palabrasEsp[] = $clave;
      }
      $esp=array();
      $cont=0;
      do {
        $palaesp=$palabrasEsp[rand(0,19)];
        if (!in_array($palaesp,$esp)){
          $esp[]=$palaesp;
          $cont++;
        }
      }while ($cont<5);

      echo '<form action="T4EJ12.php" method="post">';
      echo '<input type="hidden" name="ejercicio" value="12">';
      for ($i = 0; $i < 5; $i++) {
      echo $esp[$i]." ";
      echo '<input type="hidden" name="esp['.$i.']" value="'.$esp[$i].'">';
      echo '<input type="text" name="ing['.$i.']" ><br>';
      }
      echo '<input type="submit" value="Aceptar">';
      echo '</form>';
    }
    else {
      $esp=$_POST['esp'];
      $ing=$_POST["ing"];
      for ($i = 0; $i < 5; $i++) {
          if ($diccionario[$esp[$i]] == $ing[$i]) {
            echo '<span style="color: green;">'.$esp[$i].": ".$ing[$i];
            echo " - correcto</span><br>";
          } else {
            echo '<span style="color: red;">'.$esp[$i].": ".$ing[$i];
            echo " - incorrecto</span>, la respuesta correcta es <b>".$diccionario[$esp[$i]]."</b><br>";
          }
        }
    }
     ?>
  </body>
</html>
