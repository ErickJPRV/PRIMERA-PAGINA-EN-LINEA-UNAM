<?php
function connection() {
    $host = 'localhost';
    $user = "root";
    $pass = "";
    $bd = "usuarios";
    $connect = mysqli_connect($host, $user, $pass, $bd);
    return $connect;
}
?>;