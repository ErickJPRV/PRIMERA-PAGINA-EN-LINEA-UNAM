<?php
function connection() {
    $host = 'localhost';
    $user = "id22185888_erick";
    $pass = "W2%BG%h_%ARY)ndG";
    $bd = "id22185888_articulos";
    $connect = mysqli_connect($host, $user, $pass, $bd);
    return $connect;
}
?>