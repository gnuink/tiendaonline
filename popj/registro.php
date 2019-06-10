<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,900">
	<link rel="stylesheet" type="text/css" href="./css/main.css">
	<title>Register</title>
</head>
<body>
	<div class="login__container">
		<div class="login__top">
			<h2 class="login__title">Register<span>Users</span></h2>
		</div>
		<form class="login__form" action="./PHP/codigo.php" method="POST">
			<table>
					<td>
						<input type="text" name="Nombre" placeholder="&#128100; Nombres" tabindex="1" required>
						<input type="text" name="Paterno" placeholder="&#128100; Apellido Paterno" required>
						<input type="text" name="Materno" placeholder="&#128100; Apellido Materno" required>
						<input type="text" name="Username" placeholder="&#128590; username" required>
					</td>
					<td>
						<input type="email" name="Email" placeholder="&#9993; Email" required autofocus>
						<input type="email" name="Email2" placeholder="&#9993; Confirm Email" required>
						<input type="password" name="Pass" placeholder="&#x1f512; password" required>
						<input type="password" name="Pass2" placeholder="&#x1f512; confirm password" required>
					</td>
			<table/>
			<input class="btn__register2" type="submit" value="Registrarte">
			<input class="btn__volver" onclick="location.href='./index2.html'" type="button" value="Volver">
		</form>
	</div>

</body>
</html>
