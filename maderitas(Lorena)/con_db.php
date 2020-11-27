<?php
$conex = mysqli_connect("localhost","root","","maderitas");
if ($conex) {
		echo "Se conecto bien";
	} else {
		echo "Tenemos problemas de conexion";
	}
?>