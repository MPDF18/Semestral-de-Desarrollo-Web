<?php
$titulo = 'Detalle de reserva';
$descripcion = 'Detalle de una reserva de CoSpace: espacio, fecha, horario y estado.';
define('COSPACE', true);
require __DIR__ . '/includes/header.php';
?>
    <main class="eq01-contenido">
        <h1>Detalle de la reserva</h1>
        <article class="eq01-reserva">
            <h2>Reserva <abbr title="Código de reserva">CS-0123</abbr></h2>
            <dl class="eq01-datos">
                <dt>Miembro</dt>
                <dd>Juan Pérez</dd>
                <dt>Espacio</dt>
                <dd>Sala de reuniones 1</dd>
                <dt>Fecha</dt>
                <dd><time datetime="2026-10-20">20 de octubre de 2026</time></dd>
                <dt>Horario</dt>
                <dd><time datetime="09:00">9:00 a.m.</time> a <time datetime="10:00">10:00 a.m.</time></dd>
                <dt>Estado</dt>
                <dd><strong>Confirmada</strong></dd>
            </dl>
            <p>Las salas de reuniones se reservan en <strong>bloques de 1 hora</strong>, de 8:00 a.m. a 8:00 p.m., con un máximo de <em>4 horas por miembro al día</em>.</p>
        </article>
        <section class="eq01-seccion">
            <h2>Opciones</h2>
            <ul>
                <li><a href="principal-formulario.php">Editar reserva</a></li>
                <li><a href="principal-listado.php">Volver al listado</a></li>
            </ul>
        </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
