<?php if (session_status() === PHP_SESSION_NONE) { session_start(); } ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= htmlspecialchars($descripcion) ?>">
    <title><?= htmlspecialchars($titulo) ?> | CoSpace</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <header class="eq01-encabezado">
        <img src="img/logo.png" alt="Logo de CoSpace" width="100" height="100" class="eq01-logo">
        <nav class="eq01-menu">
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="principal-listado.php">Reservas</a></li>
                <li><a href="principal-formulario.php">Nueva reserva</a></li>
                <li><a href="secundaria-formulario.php">Miembros</a></li>
                <li><a href="panel.php">Panel</a></li>
                <li><a href="perfil.php">Mi perfil</a></li>
                <li><a href="login.php">Iniciar sesión</a></li>
            </ul>
        </nav>
    </header>
