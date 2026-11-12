<?php
if (!defined('COSPACE')) { http_response_code(403); exit('Acceso denegado'); }
require_once __DIR__ . '/funciones.php';
require_once __DIR__ . '/Reserva.php';
if (session_status() === PHP_SESSION_NONE) { session_start(); }

$espacios = ['Sala Cobre', 'Terraza Aurora', 'Puesto Flex 14', 'Oficina 1'];
$bloques = ['08:00', '09:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00'];
$errores = [];
$exito = '';
$valores = ['espacio' => '', 'fecha' => '', 'bloque' => '', 'personas' => '1', 'notas' => ''];
$codigo_sugerido = 'CS-' . str_pad((string) (7304 + count($_SESSION['reservas'] ?? [])), 4, '0', STR_PAD_LEFT);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($valores as $campo => $v) { $valores[$campo] = limpiar($_POST[$campo] ?? ''); }
    if (!in_array($valores['espacio'], $espacios, true)) { $errores[] = "Seleccione un espacio v\u{00E1}lido."; }
    $f = DateTime::createFromFormat('Y-m-d', $valores['fecha']);
    if (!$f || $f->format('Y-m-d') !== $valores['fecha']) { $errores[] = "La fecha no es v\u{00E1}lida."; }
    elseif ($valores['fecha'] < date('Y-m-d')) { $errores[] = "La fecha no puede ser anterior a hoy."; }
    if (!in_array($valores['bloque'], $bloques, true)) { $errores[] = "Seleccione un bloque horario v\u{00E1}lido."; }
    if (filter_var($valores['personas'], FILTER_VALIDATE_INT, ['options' => ['min_range' => 1, 'max_range' => 20]]) === false) { $errores[] = "El n\u{00FA}mero de personas debe estar entre 1 y 20."; }
    if (mb_strlen($valores['notas']) > 200) { $errores[] = "Las notas admiten m\u{00E1}ximo 200 caracteres."; }
    if (!$errores) {
        $inicio = $valores['bloque'];
        $fin = str_pad((string) ((int) substr($inicio, 0, 2) + 1), 2, '0', STR_PAD_LEFT) . ':00';
        $existentes = array_merge(require __DIR__ . '/../config/datos_demo.php', $_SESSION['reservas'] ?? []);
        if (Reserva::hayConflicto($existentes, $valores['espacio'], $valores['fecha'], $inicio, $fin)) {
            $errores[] = "No se puede reservar: entre dos reservas del mismo espacio debe quedar al menos 1 hora libre para limpieza.";
        } else {
            $_SESSION['reservas'][] = ['codigo' => $codigo_sugerido, 'miembro' => 'Invitado', 'espacio' => $valores['espacio'], 'fecha' => $valores['fecha'], 'inicio' => $inicio, 'fin' => $fin, 'estado' => 'Confirmada'];
            $exito = 'Reserva ' . $codigo_sugerido . ' confirmada.';
            $valores = ['espacio' => '', 'fecha' => '', 'bloque' => '', 'personas' => '1', 'notas' => ''];
            $codigo_sugerido = 'CS-' . str_pad((string) (7304 + count($_SESSION['reservas'])), 4, '0', STR_PAD_LEFT);
        }
    }
}