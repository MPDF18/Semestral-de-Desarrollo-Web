<?php
$titulo = 'Nueva reserva';
$descripcion = 'Reserva un puesto, oficina, sala o la terraza de CoSpace.';
define('COSPACE', true);
require __DIR__ . '/includes/procesar_reserva.php';
require __DIR__ . '/includes/header.php';
?>
    <main class="eq01-contenido">
        <h1>Nueva reserva</h1>
<?php if ($exito): ?><p class="eq01-aviso" style="color:#1b5e20"><strong><?= e($exito) ?></strong></p><?php endif; ?>
<?php if ($errores): ?><ul style="color:#b00020"><?php foreach ($errores as $err): ?><li><?= e($err) ?></li><?php endforeach; ?></ul><?php endif; ?>
        <p class="eq01-aviso">Reservas en bloques de 1 hora, de 8:00 a 20:00. Máximo 4 horas por día.</p>
        <p class="eq01-aviso">Horas usadas hoy: <strong>2 de 4</strong>.</p>
        <form id="eq01-form-reserva" action="#" method="post" class="eq01-formulario">
            <fieldset class="eq01-grupo">
                <legend>Datos de la reserva</legend>

                <label for="eq01-espacio">Espacio:</label>
<select id="eq01-espacio" name="espacio" required>
<option value="">Seleccione&hellip;</option>
<?php foreach ($espacios as $esp): ?>
<option value="<?= e($esp) ?>"<?= $valores['espacio'] === $esp ? ' selected' : '' ?>><?= e($esp) ?></option>
<?php endforeach; ?>
</select>

                <label for="eq01-fecha">Fecha:</label>
                <input type="date" id="eq01-fecha" name="fecha" min="<?= date('Y-m-d') ?>" value="<?= e($valores['fecha']) ?>" required>

                <label for="eq01-bloque-horario">Bloque horario (1 hora):</label>
                <select id="eq01-bloque-horario" name="bloque" required>
                    <option value="">Seleccione…</option>
                    <option value="08:00">08:00 – 09:00</option>
                    <option value="09:00">09:00 – 10:00</option>
                    <option value="10:00">10:00 – 11:00</option>
                    <option value="11:00">11:00 – 12:00</option>
                    <option value="12:00">12:00 – 13:00</option>
                    <option value="13:00">13:00 – 14:00</option>
                    <option value="14:00">14:00 – 15:00</option>
                    <option value="15:00">15:00 – 16:00</option>
                    <option value="16:00">16:00 – 17:00</option>
                    <option value="17:00">17:00 – 18:00</option>
                    <option value="18:00">18:00 – 19:00</option>
                    <option value="19:00">19:00 – 20:00</option>
                </select>

                <label for="eq01-personas">Número de personas:</label>
                <input type="number" id="eq01-personas" name="personas" min="1" max="20" value="<?= e($valores['personas']) ?>" required>

                <label for="eq01-codigo">Código de reserva (lo asigna el sistema):</label>
                <input type="text" id="eq01-codigo" name="codigo" value="<?= e($codigo_sugerido) ?>"
                       pattern="[A-Za-z]{2}-[0-9]{4}" title="2 letras, un guion y 4 números" readonly>

                <label for="eq01-notas">Notas (opcional):</label>
                <textarea id="eq01-notas" name="notas" rows="3" maxlength="200"><?= e($valores['notas']) ?></textarea>
            </fieldset>
            <button type="submit" class="eq01-boton">Reservar</button>
            <p><a href="principal-listado.php">Volver a mis reservas</a></p>
        </form>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
