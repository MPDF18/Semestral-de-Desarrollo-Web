<?php
if (!defined('COSPACE')) { http_response_code(403); exit('Acceso denegado'); }

class Reserva {
    public const HORAS_LIMPIEZA = 1;

    public static function minutos(string $hora): int {
        [$h, $m] = array_map('intval', explode(':', $hora));
        return $h * 60 + $m;
    }

    public static function hayConflicto(array $existentes, string $espacio, string $fecha, string $inicio, string $fin): bool {
        $holgura = self::HORAS_LIMPIEZA * 60;
        $ini = self::minutos($inicio);
        $f = self::minutos($fin);
        foreach ($existentes as $r) {
            if ($r['espacio'] !== $espacio || $r['fecha'] !== $fecha) { continue; }
            if (($r['estado'] ?? '') === 'Cancelada') { continue; }
            if ($ini < self::minutos($r['fin']) + $holgura && $f + $holgura > self::minutos($r['inicio'])) { return true; }
        }
        return false;
    }
}