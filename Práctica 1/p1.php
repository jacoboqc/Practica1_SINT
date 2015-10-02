<html>
	<head>
	 	<meta charset="UTF-8">
		<link rel="icon" type="image/x-icon" href="favicon.ico" />
		<title>Resumen de registro</title>
		<meta name="author" content="Jacobo Quintáns Castro">
		<link rel="stylesheet" type="text/css" href="p1.css">
	</head>
	<body>
		<div align="center">
			<?php
				if ($_SERVER['REQUEST_METHOD'] === 'POST') {
					$vars=$_POST;
				} else {
					$vars=$_GET;
				}
				
				function printVars ($field){
					global $vars;
					if(empty($vars[$field])){
						$vars[$field]="Vacío";
					}else{
						if($field=='sexo'){
							if($vars[$field]=='m'){
								$vars[$field]='Masculino';
							}elseif($vars[$field]=='f'){
								$vars[$field]='Femenino';
							}else {$vars[$field]=NULL;}
						}elseif($field=='mus'){
							$musica=$vars[$field];
							foreach($musica as &$check){
								$lista.=$check . ", ";
							}
						$lista=ucwords($lista);
						$lista=rtrim($lista, ", ");
						$vars[$field]=$lista;
						}
					}
					return	$vars[$field];
				}
			?>
			<h1>Gracias por registrarte</h1>
			Revisa a continuación los datos que nos has proporcionado:<br><br>
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
					<tr class="alt">
						<td>Apellidos</td>
						<td><?php echo printVars('apellidos'); ?></td>
					</tr>
					<tr>
						<td>Teléfono</td>
						<td><?php echo printVars('telef'); ?></td>
					</tr>
					<tr class="alt">
						<td>E-mail</td>
						<td><?php echo printVars('email'); ?></td>
					</tr>
					<tr>
						<td>Contraseña</td>
						<td><?php echo printVars('pass'); ?></td>
					</tr>
					<tr class="alt">
						<td>Sexo</td>
						<td><?php echo printVars('sexo'); ?></td>
					</tr>
					<tr>
						<td>Edad</td>
						<td><?php echo printVars('edad'); ?></td>
					</tr>	
					<tr class="alt">
						<td>Música</td>
						<td><?php echo printVars('mus'); ?></td>
					</tr>
					<tr>
						<td>Información</td>
						<td><?php echo printVars('info'); ?></td>
					</tr>
					<tr class="alt">
						<td>Hora</td>
						<td><?php echo printVars('hora'); ?></td>
					</tr>
					<tr>
						<td>Navegador</td>
						<td><?php echo printVars('navegador'); ?></td>
					</tr>
				</tbody>
			</table><br>
			
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
					<tr class="alt">
						<td>Dirección</td>
						<td><?php echo $_SERVER["SERVER_ADDR"]; ?></td>
					</tr>
					<tr>
						<td>Puerto</td>
						<td><?php echo $_SERVER["SERVER_PORT"]; ?></td>
					</tr>
					<tr class="alt">
						<td>Método</td>
						<td><?php echo $_SERVER["REQUEST_METHOD"]; ?></td>
					</tr>
					<tr>
						<td>Codificación</td>
						<td><?php
						if($_SERVER["REQUEST_METHOD"]=='POST'){
							echo $_SERVER["CONTENT_TYPE"];
						}else{echo "application/x-www-form-urlencoded";}
						 ?></td>
					</tr>
					<tr class="alt">
						<td>Software servidor</td>
						<td><?php echo $_SERVER["SERVER_SOFTWARE"]; ?></td>
					</tr>
				</tbody>
			</table>
			<hr>
			Práctica de la asignatura Servicios de Internet - Curso 2015/16<br>
			Escuela de Ingeniería de Telecomunicación - Universidad de Vigo<br>
			Alumno: Jacobo Quintáns Castro<br>
			<a href="mailto:jaquintans@alumnos.uvigo.es">Contacto</a>
		</div>
	</body>
</html>
