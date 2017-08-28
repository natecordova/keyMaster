<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> PSW + Cookie pagina +NOMBRE</title>
	</head>
<body>
<header>
<nav>
<a href="#">Inicio</a>
<a href="#">Nosotros</a>
<a href="#">Servicios</a>
<a href="#">Contactenos</a>
</nav>
</header>
<section>
</section>
<section id="main">
<?php

echo "se ha destruido session exitosamente<br/>";

echo "<a href='../index.html'>Volver</a>";

/*Con session*/
/*
if (isset($_SESSION['MiSession'])) {
session_destroy();
echo "se ha destruido session exitosamente<br/>";
echo "<a href='../index.html'>Volver</a>";
}else{
echo "ERROR... <br/>";
echo "<a href='../index.html'>Volver</a>";
}
*/
	






?>
</section>

</body>
</html>


