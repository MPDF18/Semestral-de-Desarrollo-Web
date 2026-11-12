<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Recuperar contraseña para acceder a tu cuenta.">
    <title>Recuperar contraseña | CoSpace</title>
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
        <h1>Recuperar contraseña</h1>
        <form action="#" method="post" class="eq01-formulario">
            <fieldset>
                <legend>Recupera tu contraseña</legend>
                <label for="eq01-email">Correo electrónico:</label>
                <input type="email" id="eq01-email" name="email" required>
                <button type="submit">Enviar enlace de recuperación</button>
                <p>¿Ya tienes una cuenta? <a href="login.php">Inicia sesión aquí</a>.</p>  
            </fieldset> 
        </form>
    </main>
    <footer class="eq01-pie">
        <p>&copy; 2026 CoSpace. Todos los derechos reservados.</p>
    </footer>
</body>
</html>