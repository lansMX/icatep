<?php
	session_start();

	if(!isset($_SESSION["id"])){
		unset($_SESSION);
        session_destroy();
        header("location: http://localhost/ICATEP_PANEL/login.php");
	}
?>
<p class="titulo">Generar reporte</p>
<!--vista pedniente-->