<!DOCTYPE html>
<!--Escribe un programa que muestre por pantalla 10 palabras en inglés junto a su correspondiente traducción al castellano.
Las palabras deben estar distribuidas en dos columnas. Utiliza la etiqueta `<table>` de HTML.-->
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 3</title>
    <style >
         td,  th  {
border: 1px solid black;

      }
    </style>
  </head>
  <body>
      <?php
         printf ("<table>
        <tr>
         <th>Ingles</th>
         <th>Español</th>
         </tr>
         <tr>
          <td>Blue </td>
          <td>Azul</td>
          </tr>
          <tr>
           <td>Red </td>
           <td>Rojo</td>
           </tr>
           <tr>
            <td>Black </td>
            <td>Negro</td>
            </tr>
            <tr>
             <td>Yellow </td>
             <td>Amarillo</td>
             </tr>
             <tr>
              <td>White</td>
              <td>Blanco</td>
              </tr>
              <tr>
               <td>Green </td>
               <td>Verde</td>
               </tr>
               <tr>
                <td>Grey </td>
                <td>Gris</td>
                </tr>
                <tr>
                 <td>Purple </td>
                 <td>violeta</td>
                 </tr>
                 <tr>
                  <td>Orange </td>
                  <td>Naranja</td>
                  </tr>
                  <tr>
                   <td>Pink </td>
                   <td>Rosa</td>
                   </tr>

         </table>")


       ?>


  </body>
</html>
