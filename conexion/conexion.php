<?php
	$db = new mysqli("localhost","anthony","10407","Proveedores");
	if (mysqli_connect_errno()) {
		echo "No se puede conectar 🚫";
	}
?>