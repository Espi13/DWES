<!DOCTYPE html>
<!--Escribe un programa que muestre tu horario de clase mediante una tabla.
Aunque se puede hacer íntegramente en HTML (igual que los ejercicios anteriores),
ve intercalando código HTML y PHP para familiarizarte con éste último.-->
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
    table, td, th {
      border: 1px solid grey;
      text-align: center;
    }

    </style>
  </head>
  <body>
    <?php echo "<table>" ?>
  	<caption>Horario 2 DAW</caption>
  		<tr >
  			<th scope="col">Lunes</th>
  			<th scope="col">Martes</th>
  			<th scope="col">Miercoles</th>
  			<th scope="col">Jueves</th>
  			<th scope="col">Viernes</th>
  		</tr>
  		<tr>
  			<td rowspan="2" >DEWS</td>
  			<td rowspan="3">DIW</td>
  			<td rowspan="2">DIW</td>
  			<td>DAW</td>
  			<td rowspan="3">DWEC</td>
  		</tr>
  		<tr >
  			<!--<td>DAWS</td>-->
  			<!--<td>anfdkasndk</td>-->
  			<!--<td>Dolorem nostrum commodi pariatur!</td>-->
  			<td>EIE</td>
  			<!--<td>Consectetur, porro! Veritatis, iure.</td>-->
  		</tr>
  		<tr>
  			<!--<td>Lorem ipsum dolor sit.</td>
  			<td>Iusto error, ratione nam.</td>-->
  			<td>HLC</td>
  			<td>EIE</td>
  			<td>DIW</td>
  		</tr>
  		<tr >
  			<td colspan="5">RECREO </td>
  			<!--<td>Recreo</td>
        <td>Recreo</td>
        <td>Recreo</td>
        <td>Recreo</td>-->

  		</tr>
  		<tr>
  			<td rowspan="3">DWEC</td>
  			<td rowspan="3">DWES</td>
  			<td>EIE</td>
  			<td rowspan="3">DWES</td>
  			<td>EIE</td>
  		</tr>
  		<tr >
  			<!--<td>DWEC</td>-->
  			<!--<td>Cupiditate odit, ut ratione!</td>-->
  			<td rowspan="2">DAW</td>
  			<!--<td>Natus labore, magnam expedita?</td>-->
  			<td rowspan="2">HLC</td>
  		</tr>
      <tr >

  		</tr>
  	</table>

  </body>
</html>
