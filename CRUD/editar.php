<?php
include('conexion.php');
$con= connection();
$id=$_POST['ID'];
$nombre=$_POST['Nombre'];
$precio=$_POST['Precio'];
$categoria=$_POST['Categoria'];
$cantidad=$_POST['Cantidad'];
$sql="UPDATE articulos set Nombre='$nombre', Precio='$precio', Categoria='$categoria',Cantidad='$cantidad' where ID='$id'";
$query=mysqli_query($con,$sql);
if($query){
Header("Location:index.php");
}
?>;