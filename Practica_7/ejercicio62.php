<?php
	session_start();
?>
<html>
	<head>
		<title>Bienvenida</title>
	</head>
	<body>
		<?php
		if (isset($_SESSION['usuario'])) {
			echo "Bienvenido alumno ".$_SESSION['nombre'];
		}
		else {
			echo "No tiene permitido visitar esta página.";
		}
		session_destroy();
		?>
	</body>
</html>
