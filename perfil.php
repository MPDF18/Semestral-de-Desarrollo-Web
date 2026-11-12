<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Gestiona tu perfil en CoSpace.">
    <title>Mi perfil | CoSpace</title>
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
    <main class="eq01-contenido">
        <h1>Mi perfil</h1>
        <section class="eq01-seccion">
            <h2>Información personal</h2>
            <dl class="eq01-datos">
                <dt>Nombre</dt>
                <dd>Juan Pérez</dd>
                <dt>Correo electrónico</dt>
                <dd>juan.perez@example.com</dd>
                <dt>Usuario</dt>
                <dd>jperez</dd>
            </dl>
        </section>

        <section class="eq01-seccion">
            <h2>Mi membresía</h2>
            <p>Plan: <strong>Flexible</strong>. Horas usadas este mes: <strong>12 de 40</strong>.</p>
        </section>

        <section class="eq01-seccion">
            <h2>Cuenta</h2>
            <ul>
                <li><a href="recuperar.php">Cambiar contraseña</a></li>
                <li><a href="login.php">Cerrar sesión</a></li>
            </ul>
        </section>
    </main>
    <footer class="eq01-pie">
        <p>&copy; 2026 CoSpace. Todos los derechos reservados.</p>
    </footer>
</body>

</html>