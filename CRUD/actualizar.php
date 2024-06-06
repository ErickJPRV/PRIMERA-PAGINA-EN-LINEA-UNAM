<?php
include('conexion.php');
$con= connection();
$id=$_GET['id'];
$sql= "SELECT * FROM articulos where ID='$id'";
$query=mysqli_query($con,$sql);
$row=mysqli_fetch_array($query);
?>;
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Pagina en linea</title>
	<link rel="stylesheet" href="style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<header class="header">
		<div class="container">
		<div class="btn-menu">
			<label for="btn-menu">☰</label>
		</div>
			<div class="logo">
				<h1>Actualizar articulo</h1>
			</div>
			<nav class="menu">
				<a href="index.php">Inicio</a>
				<a href="#">Repositorio</a>
				<a href="https://sigeun.unam.edu.pe/modulos/modaulavirtual/user/perfil" target="_blank">Aula Virtual</a>
				<a href="https://sigeun.unam.edu.pe/modulos/modestudiante/#/matricula/ProcesoMatricula" target="_blank">Modulo Estudiante</a>
			</nav>
		</div>
	</header>
	<div class="capa"></div>
<!--	--------------->
<input type="checkbox" id="btn-menu">
<div class="container-menu">
	<div class="cont-menu">
		<nav>
			<a href="index.php">Crud</a>
		</nav>
		<label for="btn-menu">✖️</label>
	</div>
</div>
<div class="registro">
		<form action="editar.php" method="POST">
			<H1 style="text-align: center; color:white">Actualizar articulo</H1>
			<center>
			<input type="hidden" name="ID" placeholder="Id" oninput="this.value = this.value.replace(/[^0-9]/g, '');" required value="<?= $row['ID']?>">
			<input type="text" name="Nombre" placeholder="Nombre del articulo" required value="<?= $row['Nombre']?>">
			<input type="text" name="Precio" placeholder="Precio" oninput="this.value = this.value.replace(/[^0-9.]/g, '');" required  value="<?= $row['Precio']?>">
			<input type="text" name="Categoria" placeholder="Categoria" required value="<?= $row['Categoria']?>">
			<input type="text" name="Cantidad" placeholder="Cantidad" oninput="this.value = this.value.replace(/[^0-9]/g, '');" required value="<?= $row['Cantidad']?>">
			<input type="submit" value="Actualizar articulo">
			</center>
		</form>
	</div>
</body>
</html>