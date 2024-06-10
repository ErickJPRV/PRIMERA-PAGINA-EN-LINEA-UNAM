<?php
include('conexion.php');
$con = connection();
$contra = $_POST['contra'];
$email = $_POST['email'];

$sql_check = "SELECT IDusuario, correo_electronico FROM registros WHERE correo_electronico = ?";
$stmt_check = $con->prepare($sql_check);
$stmt_check->bind_param("s", $email);
$stmt_check->execute();
$stmt_check->store_result();
$stmt_check->bind_result($id_usuario, $correo_electronico);

if ($stmt_check->num_rows > 0) {
    $stmt_check->fetch();
    echo '<script type="text/javascript">
            window.location.href = "http://localhost:3000?userid=' . urlencode($id_usuario) . '";
          </script>';
} else {
    echo '<script type="text/javascript">
            alert("No existe registro de su correo");
          </script>';
}
$stmt_check->close();
$con->close();
?>;
