<?php

include 'db.php';

$result = $conn->query("SELECT * FROM users");

?>

<!DOCTYPE html>
<html>
<head>
    <title>BioGenAnalyzer</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h2>Registro de Usuarios BioGenAnalyzer</h2>

    <form action="insert.php" method="POST">

        <input
            type="text"
            name="nombre"
            placeholder="Ingrese nombre"
            required
        >

        <input
            type="text"
            name="apellido"
            placeholder="Ingrese apellido"
            required
        >

        <input
            type="email"
            name="correo"
            placeholder="Ingrese correo"
            required
        >

        <input
            type="password"
            name="password"
            placeholder="Ingrese contraseña"
            required
        >

        <button type="submit">
            Registrar Usuario
        </button>

    </form>

    <table>

        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Correo</th>
            <th>Acción</th>
        </tr>

        <?php while($row = $result->fetch_assoc()) { ?>

        <tr>

            <td><?= $row['id'] ?></td>
            <td><?= $row['nombre'] ?></td>
            <td><?= $row['apellido'] ?></td>
            <td><?= $row['correo'] ?></td>

            <td>
                <a href="edit.php?id=<?= $row['id'] ?>">
                    Editar
                </a>
                
                <a
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

</body>
</html>