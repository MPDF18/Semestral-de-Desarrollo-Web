<?php
$titulo = 'Recuperar contraseña';
$descripcion = 'Recuperar contraseña para acceder a tu cuenta.';
include 'header.php';
?>
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
<?php include 'footer.php'; ?>
