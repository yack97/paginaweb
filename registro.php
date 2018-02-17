<?php require_once('conexion.php');
$menu='registro';
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title> Registro datos</title>
	<link rel="shortcut icon" type="image/x-icon" href="img/descarga(2.1).ico" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/base.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
	<?php include("inc/header.php");?>
	<?php include("inc/menu.php");?>


	<div class="contenedor fondo-blanco relleno-8 borde-gris" style="min-height: 500px">
		<div class="fila">
			
			<div class="columna columna-m-9 columna-g-9">
				<form  onsubmit="return false" class="formulario" id="formRegistro" style="max-width: 300px">
					<div class="formulario-grupo">
						<label for="user">Usuario</label>
						<input type="text" name="user" id="user" placeholder="usuario...">
					</div>

					<div class="formulario-grupo">
						<label for="correo">Email</label>
						<input type="text" name="correo" id="correo" placeholder="correo...">
					</div>

					<div class="formulario-grupo">
						<label for="contraseña1">Contraseña</label>
						<input type="text" name="contraseña1" id="contraseña1" placeholder="contraseña1...">
					</div>

					<div class="formulario-grupo">
						<label for="contraseña2">Repetir contraseña</label>
						<input type="text" name="contraseña2" id="contraseña2" placeholder="contraseña2...">
					</div>

					<div class="formulario-grupo oculto" id="registro-error">
						<div class="alerta alerta-rojo alerta-pequeña" id="registro-mensaje">Error</div>
					</div>

					<div class="formulario-grupo">
						<input  type="submit" value="enviar" class="boton boton-verde derecha" onclick="registro_max(user.value, correo.value, contraseña1.value, contraseña2.value);">
						<!--	<button type="submit">enviar</button>-->
						
						
					</div>
				</form>
			</div>
			<div class="columna columna-m-3 columna-g-3">
			</div>
		</div>
	</div>

	<script src="js/base.js"></script>
	<script src="js/funcion.js"></script>	
</body>
</html>