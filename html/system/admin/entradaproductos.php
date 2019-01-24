<?php
	session_start();

	if(!isset($_SESSION["id"])){
		unset($_SESSION);
        session_destroy();
        header("location: http://localhost/ICATEP_PANEL/");
	}
?>
<p class="titulo">Entrada de productos</p>
<div class="registrarent">
	<form>
		<label>Clave del articulo</label>
		<input type="text" name="" class="inputform" />
		<label>Fecha de caducidad</label>
		<input type="text" name="" class="inputform" />
		<label>Precio</label>
		<input type="number" name="" class="inputform" />
		<label>Cantidad</label>
		<input type="number" name="" class="inputform" />
		<label>Fecha de ingreso</label>
		<input type="text" name="" class="inputform" />
		<label>Clave del articulo</label>
		<input type="number" name="" class="inputform" />
		<label>Concepto</label>
		<div class="datos_f">Discos no se qué</div>
		<label>Medidas</label>
		<div class="datos_f">PZS</div>
		<label>Categoría</label>
		<div class="datos_f">Computo</div>
		<label>Fecha de caducidad</label>
		<input type="text" name="" class="inputform" />
		<label>Precio</label>
		<input type="number" name="" class="inputform" />
		<label>Cantidad</label>
		<input type="number" name="" class="inputform" />
		<label>Fecha de ingreso</label>
		<input type="text" name="" class="inputform" />
		<input type="submit" name="" value="Registrar" class="registrar" />
	</form>
</div>
<script type="text/javascript">
	$('.registrar').on('click', function(){
		swal("Producto registrado");
	});
</script>