<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "Agenda";

$connect = new mysqli($server, $user, $password, $db);

if ($connect->connect_errno) {
    die("Conexion Fallida" . $connect->connect_errno);
}

?>