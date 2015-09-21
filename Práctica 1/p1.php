<html>
	<head>
		<title>p1.php</title>
		<link rel="stylesheet" type="text/css" href="p1.css">
	</head>
	<body>
		<?php
			if ($_SERVER['REQUEST_METHOD'] === 'POST') {
				$nombre=$_POST['nombre'];
				$apellidos=$_POST['apellidos'];
				$telef=$_POST['telef'];
				$email=$_POST['email'];
				$sexo=$_POST['sexo'];
				$hora=$_POST['hora'];
				$navegador=$_POST['navegador'];
			} else {
				$nombre=$_GET['nombre'];
				$apellidos=$_GET['apellidos'];
				$telef=$_GET['telef'];
				$email=$_GET['email'];
				$sexo=$_GET['sexo'];
				$hora=$_POST['hora'];
				$navegador=$_POST['navegador'];
			}
#			echo "$nombre\n$apellidos\n$telef\n$email\n$sexo\n$hora\n$navegador";
		?>
		<table>
			<thead>
				<tr>
					<th>Variable</th>
					<th>Valor</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Nombre</td>
					<td><?php echo $nombre; ?></td>
				</tr>
				<tr>
					<td>Apellidos</td>
					<td><?php echo $apellidos; ?></td>
				</tr>
				<tr>
					<td>Telefono</td>
					<td><?php echo $telef; ?></td>
				</tr>
				<tr>
					<td>E-mail</td>
					<td><?php echo $email; ?></td>
				</tr>
				<tr>
					<td>Sexo</td>
					<td><?php echo $sexo; ?></td>
				</tr>
				<tr>
					<td>Hora</td>
					<td><?php echo $hora; ?></td>
				</tr>
				<tr>
					<td>Navegador</td>
					<td><?php echo $navegador; ?></td>
				</tr>
			</tbody>
		</table>
	</body>
</html>