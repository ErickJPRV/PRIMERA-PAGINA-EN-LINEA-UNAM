<?php
    include('conexion.php');
    $con= connection();
    $id=$_POST['ID'];
    $nombre=$_POST['Nombre'];
    $precio=$_POST['Precio'];
    $categoria=$_POST['Categoria'];
    $cantidad=$_POST['Cantidad'];
    $sql="INSERT INTO articulos VALUES ('$id','$nombre','$precio','$categoria','$cantidad')";
    $query=mysqli_query($con,$sql);
    if($query){
        Header("Location:index.php");
    }
?>