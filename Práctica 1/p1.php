<html>
	<head>
	 	<meta charset="UTF-8">
		<title>p1.php</title>
		<meta name="author" content="Jacobo Quintáns Castro">
		<link rel="stylesheet" type="text/css" href="p1.css">
	</head>
	<body>
		<?php
			if ($_SERVER['REQUEST_METHOD'] === 'POST') {
				$vars=$_POST;
			} else {
				$vars=$_GET;
			}
			
			function printVars ($field){
				global $vars;
			if($field=='sexo'){
				if($vars[$field]=='m'){
					$vars[$field]='Masculino';
				}elseif($vars[$field]=='f'){
					$vars[$field]='Femenino';
				}else {$vars[$field]=NULL;}
			}elseif($field=='mus'){
				$musica=$vars[$field];
			}
			return	$vars[$field];
			}
		?>
		<table>
			<thead>
				<tr>
					<th colspan="2">Variables del formulario</th>
				</tr>
				<tr>
					<th>Variable</th>
					<th>Valor</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Nombre</td>
					<td><?php echo printVars('nombre'); ?></td>
				</tr>
				<tr>
					<td>Apellidos</td>
					<td><?php echo printVars('apellidos'); ?></td>
				</tr>
				<tr>
					<td>Teléfono</td>
					<td><?php echo printVars('telef'); ?></td>
				</tr>
				<tr>
					<td>E-mail</td>
					<td><?php echo printVars('email'); ?></td>
				</tr>
				<tr>
					<td>Contraseña</td>
					<td><?php echo printVars('pass'); ?></td>
				</tr>
				<tr>
					<td>Sexo</td>
					<td><?php echo printVars('sexo'); ?></td>
				</tr>
				<tr>
					<td>Edad</td>
					<td><?php echo (int) printVars('edad'); ?></td>
				</tr>	
				<tr>
					<td>Música</td>
					<td><?php echo printVars('mus'); ?></td>
				</tr>
				<tr>
					<td>Información</td>
					<td><?php echo printVars('info'); ?></td>
				</tr>
				<tr>
					<td>Hora</td>
					<td><?php echo printVars('hora'); ?></td>
				</tr>
				<tr>
					<td>Navegador</td>
					<td><?php echo printVars('navegador'); ?></td>
				</tr>
			</tbody>
		</table>
		
		<table>
			<thead>
				<tr>
					<th colspan="2">Variables del servidor</th>
				</tr>
				<tr>
					<th>Variable</th>
					<th>Valor</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Servidor</td>
					<td><?php echo $_SERVER["SERVER_NAME"]; ?></td>
				</tr>
				<tr>
					<td>Direccion</td>
					<td><?php echo $_SERVER["SERVER_ADDR"]; ?></td>
				</tr>
				<tr>
					<td>Servidor</td>
					<td><?php echo $_SERVER["SERVER_PORT"]; ?></td>
				</tr>
				<tr>
					<td>Metodo</td>
					<td><?php echo $_SERVER["REQUEST_METHOD"]; ?></td>
				</tr>
				<tr>
					<td>Codificacion</td>
					<td><?php echo $_SERVER["CONTENT_TYPE"]; ?></td>
				</tr>
			</tbody>
		</table>
	</body>
</html>
