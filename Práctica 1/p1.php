<html>
	<head>
		<title>p1.php</title>
	</head>
	<body>
		<?php
			if ($_SERVER['REQUEST_METHOD'] === 'POST') {
				$nombre=$_POST['nombre'];
				$apellidos=$_POST['apellidos'];
				$telef=$_POST['telef'];
				$email=$_POST['email'];
				$sexo=$_POST['sexo'];
			} else {
				$nombre=$_GET['nombre'];
				$apellidos=$_GET['apellidos'];
				$telef=$_GET['telef'];
				$email=$_GET['email'];
				$sexo=$_GET['sexo'];
			}
			echo $nombre, $apellidos, $telef, $email, $sexo;
		?>
	</body>
</html>