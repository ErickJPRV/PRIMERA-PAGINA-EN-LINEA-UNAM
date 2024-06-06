<?php
    include('conexion.php');
	$con= connection();
	$sql= 'SELECT * FROM articulos';
	$query=mysqli_query($con,$sql)
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
				<h1>Comprar articulos</h1>
			</div>
			<nav class="menu">
				<a href="#">Inicio</a>
				<a href="https://github.com/ErickJPRV/CRUD-en-linea" target="_blank">Repositorio</a>
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
			<a href="#">Crud</a>
		</nav>
		<label for="btn-menu">✖️</label>
	</div>
</div>
	<div class="registro">
		<form action="agregar.php" method="post">
			<H1 style="text-align: center; color:white">Insertar Articulo</H1>
			<center>
			<input type="text" name="ID" placeholder="Id" oninput="this.value = this.value.replace(/[^0-9]/g, '');" required>
			<input type="text" name="Nombre" placeholder="Nombre del articulo" required>
			<input type="text" name="Precio" placeholder="Precio" oninput="this.value = this.value.replace(/[^0-9.]/g, '');" required>
			<input type="text" name="Categoria" placeholder="Categoria" required>
			<input type="text" name="Cantidad" placeholder="Cantidad" oninput="this.value = this.value.replace(/[^0-9]/g, '');" required>
			<input type="submit" value="Insertar Articulo">
			</center>
		</form>
	</div>
	<div class="tabla">
		<table class="table" style="color: white";>
  			<thead>
    			<tr>
      				<th>ID</th>
      				<th>Nombre</th>
      				<th>Precio</th>
      				<th>Categoria</th>
      				<th>Cantidad</th>
					<th></th>
					<th></th>
    			</tr>
  			</thead>
  			<tbody>
				<?php
					while($row=mysqli_fetch_array($query)):
				?>;
    			<tr>
      				<th><?= $row['ID'] ?></th>
      				<th><?= $row['Nombre'] ?></th>
					<th><?= $row['Precio'] ?></th>
					<th><?= $row['Categoria'] ?></th>
					<th><?= $row['Cantidad'] ?></th>
					<th><a href="actualizar.php?id=<?=$row['ID']?>">Editar</a></th>
					<th><a href="eliminar.php?id=<?=$row['ID']?>">Eliminar</a></th>
    			</tr>
				<?php endwhile; ?>
  			</tbody>
		</table>
	</div>
</body>
</html>