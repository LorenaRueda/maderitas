<?php 

include("con_db.php");
	
	if (isset($_POST['register'])) {
		if (strlen($_POST['name'])>=1 && strlen($_POST['email'])>=1 && strlen($_POST['contraseña'])>=1 && strlen($_POST['tdocumento'])>=1 && strlen($_POST['ndocumento'])>=1 && strlen($_POST['pais'])>=1 && strlen($_POST['ncelular'])>=1 && strlen($_POST['direccion'])>=1) {
			$name = trim($_POST['name']);
			$email= trim($_POST['email']);
			$contraseña= trim($_POST['contraseña']);
			$tdocumento= trim($_POST['tdocumento']);
			$ndocumento = trim($_POST['ndocumento']);
			$pais= trim($_POST['pais']);
			$ncelular = trim($_POST['ncelular']);
			$direccion = trim($_POST['direccion']);
			$fechareg = date("d/m/y");
			

			$consulta="INSERT INTO datos(`nombre`, `email`, `contraseña`, `fechareg`, `tdocumento`, `ndocumento`, `pais`, `ncelular`, `direccion`) VALUES ('$name','$email','$contraseña','$fechareg','$tdocumento','$ndocumento','$pais','$ncelular','$direccion')";
			$resultado=mysqli_query($conex,$consulta);
			if ($resultado) {
				?>
				<h3 class="ok">¡Todo bien!</h3>
				<?php
			}else{
				?>
				<h3 class="bad">¡No se envio nada, revisa el!</h3>
				<?php
			}
		}else {
			?>
			<h3 class="bad">¡Por favor llene todos los campos!</h3>
			<?php 
		}


	}
 ?>