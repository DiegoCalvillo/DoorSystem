<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
	<title>Mensaje de Bienvenida</title>
</head>
<body>
	<p>Hola, Diego</p>
	<p>Te ha sido creada una cuenta en el sistema DoorSystem. La siguiente clave te servirá para que puedas iniciar sesion en el sistema por primera vez. Te pedimos que una vez dentro te pedimos que sigas las instrucciones al pie de la letra</p>
	<br>
	<p><b>{{ $usuario->first_key }}</b></p>

	<p>Gracias y Saludos</p>
</body>
</html>