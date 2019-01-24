<!DOCTYPE html>
<html>
<head>
	<title>Panel ICATEP</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="css/main.css" />
	<link rel="icon" type="img/png" href="img/icon.png" />
<body>
	<div class="content_login">
		<div class="caja_login">
			<img src="img/logo.jpg" width="160px" alt="Logo ICATEP" title="Logo ICATEP" class="logo" />
			<form id="auth" action="/action/login.php" method="POST">
				<label>Usuario</label>
				<input type="text" name="user"  class="input_login" />
				<label>Contraseña</label>
				<input type="password" name="pass" class="input_login" />
				<input type="submit" class="btn_ingresar" value="Ingresar" />
			</form>
		</div>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/system/login/auth.js"></script>
</body>
</html>