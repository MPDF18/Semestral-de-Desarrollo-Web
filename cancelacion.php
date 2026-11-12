<?php
$titulo = 'Cancelar reserva';
$descripcion = 'Consulta y cancela una reserva en CoSpace.';
define('COSPACE', true);
require __DIR__ . '/includes/header.php';
?>
    <main class="eq01-contenido">
        <h1>Detalle de la reserva</h1>
        <section class="eq01-seccion">
            <h2>Datos de la reserva</h2>
            <dl class="eq01-datos">
                <dt>Código</dt>
                <dd>CS-0123</dd>
                <dt>Espacio</dt>
                <dd>Sala de reuniones 1</dd>
                <dt>Fecha</dt>
                <dd>20 de octubre de 2026</dd>
                <dt>Horario</dt>
                <dd>10:00 – 11:00</dd>
                <dt>Estado</dt>
                <dd>Confirmada</dd>
            </dl>
        </section>
        <section class="eq01-seccion">
            <h2>Cancelar reserva</h2>
            <form id="eq01-form-cancelar" action="#" method="post" class="eq01-formulario">
                <fieldset>
                    <legend>Confirmar cancelación</legend>

                    <label for="eq01-codigo-cancelar">Código de la reserva:</label>
                    <input type="text" id="eq01-codigo-cancelar" name="codigo" value="CS-0123"
                           pattern="[A-Za-z]{2}-[0-9]{4}" title="2 letras, un guion y 4 números" required>

                    <label for="eq01-motivo">Motivo de la cancelación:</label>
                    <select id="eq01-motivo" name="motivo" required>
                        <option value="">Seleccione…</option>
                        <option value="cambio-planes">Cambio de planes</option>
                        <option value="otro-horario">Reservaré en otro horario</option>
                        <option value="error">Me equivoqué al reservar</option>
                        <option value="otro">Otro</option>
                    </select>

                    <label for="eq01-comentario">Comentario (opcional):</label>
                    <textarea id="eq01-comentario" name="comentario" rows="3" maxlength="200"></textarea>

                    <label for="eq01-confirmar">
                        <input type="checkbox" id="eq01-confirmar" name="confirmar" required>
                        Entiendo que el espacio quedará libre para otras personas.
                    </label>

                    <button type="submit" class="eq01-boton">Cancelar reserva</button>
                </fieldset>
            </form>
            <p><a href="principal-listado.php">Volver a reservas</a></p>
        </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
