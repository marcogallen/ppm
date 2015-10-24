<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8" />
<title></title>
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />

</head>
<body>
<h1>¿Crees que es tu perro?</h1>
<p>El usuario {{$encontrador->name}} vio a tu perro, aquí esta su información para que lo contactes</p>
<ul>
	<li>Nombre: {{$encontrador->name}}</li>
	<li>Teléfono: {{$encontrador->telefone}}</li>
	<li>Email: {{$encontrador->email}}</li>
</ul>
<h2>Suerte en la busqueda, pronto regresara a casa</h2>
</body>
</html>