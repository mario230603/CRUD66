<?php

include 'db.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$password = $_POST['password'];

$sql = "INSERT INTO users (nombre, apellido, correo, password)
VALUES ('$nombre', '$apellido', '$correo', '$password')";

$conn->query($sql);

header("Location: index.php");

exit();

?>