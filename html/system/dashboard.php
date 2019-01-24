<?php
	session_start();

	if(!isset($_SESSION["id"])){
		unset($_SESSION);
        session_destroy();
        header("location: http://localhost/ICATEP_PANEL/");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>PANEL ADMINISTRATIVO</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="https://limepay.mx/sistema/vendor/datatables/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="../../css/main.css" />
	<link rel="stylesheet" type="text/css" href="../../css/all.css" />
	<link rel="icon" type="img/png" href="../../img/icon.png" />
</head>
<body>
	<div class="menu">
		<img src="../../img/logo.png" width="160px" alt="Logo ICATEP" title="Logo ICATEP" class="logo" />
		<div class="opc_menu">
			<p class="opcion_men activa_opc" onclick="listaproduc();">Lista de productos</p>
			<p class="opcion_men" onclick="entradaprod();">Entada de productos</p>
			<p class="opcion_men" onclick="atender_requesicion();">Requisiciones</p>
			<p class="opcion_men">Opción cuatro</p>
			<p class="opcion_men">Opción cinco</p>
			<a href="http://localhost/ICATEP_PANEL/src/action/logout"><div id="logout"><p class="opcion_men">Salir</p></div></a>
		</div>
	</div>
	<div class="content_vistas">
		<div class="general_vistas maxwidth">
			<!--Content de vistas (cargandose con load)-->
		</div>
		<div class="alertas" onclick="atender_requesicion();"><i class="fas fa-bell"></i></div>
	</div>
	<script src="../../js/jquery.min.js"></script>
	<script src="https://limepay.mx/sistema/vendor/datatables/jquery-3.3.1.js" ></script>
	<script src="https://limepay.mx/sistema/vendor/datatables/jquery.dataTables.min.js" ></script>
	<script src="../../js/system/panelA/requisitions.js"></script>
	<script type="text/javascript">
		$('.opcion_men').click(function(){
			$('.opcion_men').removeClass('activa_opc');
			$(this).addClass('activa_opc');
		});

		$(document).ready(function(){
			$('.general_vistas').load('../../html/system/admin/listaproductos');
		});
		function listaproduc(){
			$('.general_vistas').load('../../html/system/admin/listaproductos');
		}
		function entradaprod(){
			$('.general_vistas').load('../../html/system/admin/entradaproductos');
		}
		function atender_requesicion(){
			$('.general_vistas').load('../../html/system/admin/atenderequisiciones');
		}
	</script>
</body>
</html>