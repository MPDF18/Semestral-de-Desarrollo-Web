<?php
if (!defined('COSPACE')) { http_response_code(403); exit('Acceso denegado'); }

function e(?string $texto): string { return htmlspecialchars($texto ?? '', ENT_QUOTES, 'UTF-8'); }
function limpiar(?string $valor): string { return trim($valor ?? ''); }
function validar_requerido(string $valor): bool { return $valor !== ''; }
function validar_email(string $valor): bool { return filter_var($valor, FILTER_VALIDATE_EMAIL) !== false; }
function validar_codigo(string $valor): bool { return preg_match('/^[A-Za-z]{2}-[0-9]{4}$/', $valor) === 1; }
function validar_contrasena(string $valor): bool { return strlen($valor) >= 8; }
function hashear_contrasena(string $clave): string { return password_hash($clave, PASSWORD_DEFAULT); }
function verificar_contrasena(string $clave, string $hash): bool { return password_verify($clave, $hash); }