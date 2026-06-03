<?php
include 'db.php';

$id = $_GET['id'];

$result = $conn->query(
    "SELECT * FROM users WHERE id=$id"
);

$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>

    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>

<header class="header">

    <div class="logo">
        BioGenAnalyzer
    </div>

    <div class="search-bar">
        <input type="search" placeholder="Buscar...">

        <button>
            <i class="fas fa-search"></i>
        </button>
    </div>

</header>

<div class="overlay">

    <div class="card">

        <div class="card-header">
            <i class="fas fa-user-edit"></i>
            Editar Usuario
        </div>

        <h2>Actualizar Información</h2>

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
                type="password"
                name="password"
                value="<?= $row['password'] ?>"
                required
            >

            <button
                class="register-btn"
                type="submit"
            >
                Actualizar Usuario
            </button>

            <a
                href="index.php"
                class="back-btn"
            >
                Volver al Registro
            </a>

        </form>

    </div>

</div>

</body>
</html>