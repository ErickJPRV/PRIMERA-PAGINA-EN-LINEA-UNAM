<?php
include('conexion.php');
$con = connection();

$nombre = $_POST['name'];
$apellido = $_POST['ap'];
$contra = $_POST['contra'];
$email = $_POST['email'];

// Verificar si el correo ya está registrado
$sql_check = "SELECT correo_electronico FROM registros WHERE correo_electronico = ?";
$stmt_check = $con->prepare($sql_check);
$stmt_check->bind_param("s", $email);
$stmt_check->execute();
$stmt_check->store_result();

if ($stmt_check->num_rows > 0) {
    // El correo ya está registrado
    echo '<script type="text/javascript">
            alert("Ya existe un correo registrado.");
            window.history.back(); // Regresar a la página anterior
          </script>';
} else {
    // Insertar nuevo registro
    $sql_insert = "INSERT INTO registros (Nombre,Apellidos,Contraseña,Correo_Electronico) VALUES (?, ?, ?, ?)";
    $stmt_insert = $con->prepare($sql_insert);
    $stmt_insert->bind_param("ssss",$nombre, $apellido, $contra, $email);

    if ($stmt_insert->execute()) {
        echo '<script type="text/javascript">
                alert("Registro exitoso. Serás redirigido a la página de ingreso.");
                window.location.href = "ingresar.php";
              </script>';
    } else {
        echo "Error: " . $stmt_insert->error;
    }
}

// Cerrar conexiones
$stmt_check->close();
$stmt_insert->close();
$con->close();
?>;
