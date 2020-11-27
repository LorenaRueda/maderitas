<!DOCTYPE html>
<html>
<head>
	<title>Registrar</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
		<img class="carpintero" src="logos/carpintero.png" alt="carpintero">
		<h1>CARPINTERIA MADERITAS</h1>
    	<h2>¡Registro!</h2>
    	<input type="text" name="name" placeholder="Nombre completo">
    	<input type="email" name="email" placeholder="Correo electronico">
		<input type="contraseña" name="contraseña" placeholder="Contraseña">
		<input type="text" name="tdocumento" placeholder="Tipo de documento">
		<input type="text" name="ndocumento" placeholder="Número documento">
		<input type="text" name="pais" placeholder="Pais">
		<input type="text" name="ncelular" placeholder="Número celular">
		<input type="text" name="direccion" placeholder="Dirección">
    	<input type="submit" name="register">
    </form>
        <?php
        include ("registrar.php");
        ?>
        
</body>
</html>

