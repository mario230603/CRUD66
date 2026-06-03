<?php

include 'db.php';

$id = $_POST['id'];

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$password = $_POST['password'];

$conn->query(
    "UPDATE users
    SET
        nombre='$nombre',
        apellido='$apellido',
        correo='$correo',
        password='$password'
    WHERE id=$id"
);

header("Location: index.php");

exit();

?>