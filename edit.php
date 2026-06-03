<?php

include 'db.php';

$id = $_GET['id'];

$result = $conn->query(
    "SELECT * FROM users WHERE id=$id"
);

$row = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Usuario</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h2>Editar Usuario</h2>

    <form action="update.php" method="POST">

        <input
            type="hidden"
            name="id"
            value="<?= $row['id'] ?>"
        >

        <input
            type="text"
            name="nombre"
            value="<?= $row['nombre'] ?>"
            required
        >

        <input
            type="text"
            name="apellido"
            value="<?= $row['apellido'] ?>"
            required
        >

        <input
            type="email"
            name="correo"
            value="<?= $row['correo'] ?>"
            required
        >

        <input
            type="text"
            name="password"
            value="<?= $row['password'] ?>"
            required
        >

        <button type="submit">
            Actualizar Usuario
        </button>

    </form>

</div>

</body>
</html>