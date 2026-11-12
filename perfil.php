<?php
$titulo = 'Mi perfil';
$descripcion = 'Gestiona tu perfil en CoSpace.';
include 'header.php';
?>
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
<?php include 'footer.php'; ?>
