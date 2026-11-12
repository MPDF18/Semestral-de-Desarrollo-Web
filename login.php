<?php
$titulo = 'Iniciar sesión';
$descripcion = 'Iniciar sesión en CoSpace para gestionar tus espacios de trabajo.';
include 'header.php';
?>
    <main class="eq01-contenido">
        <h1>Iniciar sesión</h1>
        <form action="#" method="post" class="eq01-formulario">
            <fieldset>
                <legend>Acceso a tu cuenta</legend>
                <label for="eq01-usuario">Usuario:</label>
                <input type="text" id="eq01-usuario" name="usuario" required>
                <label for="eq01-contrasena">Contraseña:</label>
                <input type="password" id="eq01-contrasena" name="contrasena" required>
                <button type="submit">Iniciar sesión</button>
                <p>¿No tienes una cuenta? <a href="registro.php">Regístrate aquí</a>.</p>  
                <p>¿Olvidaste tu contraseña? <a href="recuperar.php">Recupérala aquí</a>.</p>     
            </fieldset> 
        </form>
    </main>
<?php include 'footer.php'; ?>
