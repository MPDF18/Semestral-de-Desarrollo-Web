<?php
$titulo = 'Registro';
$descripcion = 'Regístrate en CoSpace para gestionar tus espacios de trabajo.';
define('COSPACE', true);
require __DIR__ . '/includes/header.php';
?>
    <main class="eq01-contenido">
        <h1>Registro de usuario</h1>
        <form action="#" method="post" class="eq01-formulario">
            <fieldset>
                <legend>Crear una nueva cuenta</legend>
                <label for="eq01-nombre">Nombre:</label>
                <input type="text" id="eq01-nombre" name="nombre" required>
                <label for="eq01-apellido">Apellido:</label>
                <input type="text" id="eq01-apellido" name="apellido" required>
                <label for="eq01-email">Correo electrónico:</label>
                <input type="email" id="eq01-email" name="email" required>
                <label for="eq01-usuario">Usuario:</label>
                <input type="text" id="eq01-usuario" name="usuario" required>
                <label for="eq01-contrasena">Contraseña:</label>
                <input type="password" id="eq01-contrasena" name="contrasena" required>
                <button type="submit">Registrarse</button>
                <p>¿Ya tienes una cuenta? <a href="login.php">Inicia sesión aquí</a>.</p>  
            </fieldset> 
        </form>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
