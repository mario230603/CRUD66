<?php
include 'db.php';
$result = $conn->query("SELECT * FROM users");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BioGenAnalyzer</title>

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
            <i class="fas fa-dna"></i>
            BioGenAnalyzer
        </div>

        <h2>Registro de Usuario</h2>

        <form action="insert.php" method="POST">

            <input
                type="text"
                name="nombre"
                placeholder="Nombres"
                required
            >

            <input
                type="text"
                name="apellido"
                placeholder="Apellidos"
                required
            >

            <input
                type="email"
                name="correo"
                placeholder="Correo Electrónico"
                required
            >

            <input
                type="password"
                name="password"
                placeholder="Contraseña"
                required
            >

            <button class="register-btn" type="submit">
                Registrar
            </button>

        </form>

    </div>

    <div class="table-card">

        <h2>Usuarios Registrados</h2>

        <table>

            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Acciones</th>
            </tr>

            <?php while($row = $result->fetch_assoc()) { ?>

            <tr>

                <td><?= $row['id'] ?></td>
                <td><?= $row['nombre'] ?></td>
                <td><?= $row['apellido'] ?></td>
                <td><?= $row['correo'] ?></td>

                <td>

                    <a
                        class="edit-btn"
                        href="edit.php?id=<?= $row['id'] ?>"
                    >
                        Editar
                    </a>

                    <a
                        class="delete-btn"
                        href="delete.php?id=<?= $row['id'] ?>"
                        onclick="return confirm('Eliminar usuario?')"
                    >
                        Eliminar
                    </a>

                </td>

            </tr>

            <?php } ?>

        </table>

    </div>

</div>

</body>
</html>