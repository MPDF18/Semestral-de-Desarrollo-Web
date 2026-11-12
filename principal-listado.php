<?php
$titulo = 'Reservas';
$descripcion = 'Listado de reservas de CoSpace con búsqueda por miembro y filtro por tipo de espacio.';
define('COSPACE', true);
require __DIR__ . '/includes/header.php';
?>
        <main class="eq01-contenido">
        <h1>Reservas</h1>
        <section class="eq01-seccion">
            <h2>Buscar reservas</h2>
            <form action="#" method="post" class="eq01-formulario">
                <label for="eq01-buscar">Buscar por miembro:</label>
                <input type="search" id="eq01-buscar" name="buscar" placeholder="Ej. Juan Pérez" maxlength="80">
                <label for="eq01-filtro">Tipo de espacio:</label>
                <select id="eq01-filtro" name="tipo_espacio">
                    <option value="">Todos</option>
                    <option value="puesto">Puesto flexible</option>
                    <option value="oficina">Oficina privada</option>
                    <option value="sala">Sala de reuniones</option>
                    <option value="terraza">Terraza</option>
                </select>
                <button type="submit" class="eq01-boton">Buscar</button>
            </form>
        </section>
                <section class="eq01-seccion">
            <h2>Todas las reservas</h2>
            <table class="eq01-tabla">
                <caption>Reservas registradas en CoSpace</caption>
                <thead>
                    <tr>
                        <th scope="col">Código</th>
                        <th scope="col">Miembro</th>
                        <th scope="col">Espacio</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Horario</th>
                        <th scope="col">Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>CS-0123</td>
                        <td>Juan Pérez</td>
                        <td>Sala de reuniones 1</td>
                        <td><time datetime="2026-10-20">20/10/2026</time></td>
                        <td>9:00 a.m. - 10:00 a.m.</td>
                        <td><a href="principal-detalle.php">Ver detalle</a></td>
                    </tr>
                    <tr>
                        <td>CS-0124</td>
                        <td>María López</td>
                        <td>Puesto flexible 5</td>
                        <td><time datetime="2026-10-20">20/10/2026</time></td>
                        <td>10:30 a.m. - 12:00 p.m.</td>
                        <td><a href="principal-detalle.php">Ver detalle</a></td>
                    </tr>
                    <tr>
                        <td>CS-0125</td>
                        <td>Luis Gómez</td>
                        <td>Terraza</td>
                        <td><time datetime="2026-10-21">21/10/2026</time></td>
                        <td>3:00 p.m. - 5:00 p.m.</td>
                        <td><a href="principal-detalle.php">Ver detalle</a></td>
                    </tr>
                    <tr>
                        <td>CS-0126</td>
                        <td>Ana Pérez</td>
                        <td>Oficina privada 2</td>
                        <td><time datetime="2026-10-22">22/10/2026</time></td>
                        <td>8:00 a.m. - 12:00 p.m.</td>
                        <td><a href="principal-detalle.php">Ver detalle</a></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th scope="row" colspan="5">Total de reservas</th>
                        <td>4</td>
                    </tr>
                </tfoot>
            </table>
        </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
