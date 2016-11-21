<?php

	$servidor="localhost";
	$usuario="bule";
	$contrasena="kedokedo";
	$basededatos="bule";

$conexion = mysqli_connect($servidor, $usuario, $contrasena, $basededatos);
mysqli_set_charset($conexion, "utf8");

$peticion = "SELECT * FROM usuarios";

$resultado = mysqli_query($conexion, $peticion);

?>

<html>

	<head>
	<meta charset="utf-8">
<script type="text/javascript">
(function(document) {
  'use strict';

  var LightTableFilter = (function(Arr) {

    var _input;

    function _onInputEvent(e) {
      _input = e.target;
      var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
      Arr.forEach.call(tables, function(table) {
        Arr.forEach.call(table.tBodies, function(tbody) {
          Arr.forEach.call(tbody.rows, _filter);
        });
      });
    }

    function _filter(row) {
      var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
      row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
    }

    return {
      init: function() {
        var inputs = document.getElementsByClassName('light-table-filter');
        Arr.forEach.call(inputs, function(input) {
          input.oninput = _onInputEvent;
        });
      }
    };
  })(Array.prototype);

  document.addEventListener('readystatechange', function() {
    if (document.readyState === 'complete') {
      LightTableFilter.init();
    }
  });

})(document);
</script>		
	</head>
	<body>
		<h1>Buscar datos en una Tabla</h1>
		
		<div class="derecha" id="buscar">Buscar <input type="search" class="light-table-filter" data-table="order-table" placeholder="Filtro"></div>

		<div class="datagrid">
			<table class="order-table table">
			<?php 	
			while($fila = mysqli_fetch_array($resultado)){ 
				echo "
			<tbody>
				<tr>
					<td>".$fila['nombre']."</td>
					<td>".$fila['direccion']."</td>
					<td>".$fila['codigo_postal']."</td>
					<td>".$fila['telefono']."</td>
					<td>".$fila['email']."</td>
				</tr>
			</tbody>
			";
			}
			?>
			</table>
		</div>
	</body>
</html>