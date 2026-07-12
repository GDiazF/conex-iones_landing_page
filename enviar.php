<?php
/**
 * Conex-Iones — envío del formulario de contacto (cPanel)
 *
 * 1. Cambia $DESTINO por el correo real donde quieres recibir consultas.
 * 2. Sube este archivo junto a index.html en public_html.
 * 3. Asegúrate de que el dominio pueda enviar correo (cPanel → Email).
 */

declare(strict_types=1);

header('Content-Type: application/json; charset=utf-8');
header('X-Content-Type-Options: nosniff');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['ok' => false, 'error' => 'Método no permitido.']);
    exit;
}

/* ——— Configuración ——— */
$DESTINO = 'contacto@conex-iones.cl';
$ASUNTO_PREFIJO = 'Consulta web Conex-Iones';
$REMITENTE_NOMBRE = 'Conex-Iones Web';

function campo(string $key): string
{
    $valor = $_POST[$key] ?? '';
    if (!is_string($valor)) {
        return '';
    }
    $valor = trim($valor);
    $valor = str_replace(["\r", "\n"], ' ', $valor);
    return $valor;
}

/* Honeypot anti-spam (campo oculto; si viene lleno, fingimos éxito) */
$honeypot = campo('empresa');
if ($honeypot !== '') {
    echo json_encode(['ok' => true]);
    exit;
}

$nombre = campo('nombre');
$telefono = campo('telefono');
$tipo = campo('tipo');
$mensaje = isset($_POST['mensaje']) && is_string($_POST['mensaje'])
    ? trim($_POST['mensaje'])
    : '';
$mensaje = strip_tags($mensaje);

$tiposOk = ['residencial', 'comercial', 'industrial', 'urgencia', 'otro'];

if ($nombre === '' || $telefono === '' || $tipo === '' || $mensaje === '') {
    http_response_code(422);
    echo json_encode(['ok' => false, 'error' => 'Completa todos los campos obligatorios.']);
    exit;
}

if (mb_strlen($nombre) > 120 || mb_strlen($telefono) > 40 || mb_strlen($mensaje) > 4000) {
    http_response_code(422);
    echo json_encode(['ok' => false, 'error' => 'Algunos datos son demasiado largos.']);
    exit;
}

if (!in_array($tipo, $tiposOk, true)) {
    http_response_code(422);
    echo json_encode(['ok' => false, 'error' => 'Tipo de proyecto no válido.']);
    exit;
}

$tipoLabel = [
    'residencial' => 'Residencial',
    'comercial' => 'Comercial',
    'industrial' => 'Industrial',
    'urgencia' => 'Urgencia',
    'otro' => 'Otro',
][$tipo];

$ip = $_SERVER['REMOTE_ADDR'] ?? 'desconocida';
$ua = substr($_SERVER['HTTP_USER_AGENT'] ?? '', 0, 200);
$fecha = date('d/m/Y H:i');

$cuerpo = "Nueva consulta desde el sitio web\n";
$cuerpo .= "--------------------------------\n";
$cuerpo .= "Nombre: {$nombre}\n";
$cuerpo .= "Teléfono: {$telefono}\n";
$cuerpo .= "Tipo de proyecto: {$tipoLabel}\n";
$cuerpo .= "Fecha: {$fecha}\n";
$cuerpo .= "IP: {$ip}\n";
$cuerpo .= "--------------------------------\n\n";
$cuerpo .= $mensaje . "\n\n";
$cuerpo .= "--------------------------------\n";
$cuerpo .= "UA: {$ua}\n";

$host = $_SERVER['HTTP_HOST'] ?? 'conex-iones.com';
$host = preg_replace('/:\d+$/', '', $host);
$fromEmail = 'noreply@' . $host;

$asunto = $ASUNTO_PREFIJO . ' — ' . $tipoLabel . ' — ' . $nombre;

$headers = [];
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-Type: text/plain; charset=UTF-8';
$headers[] = 'From: ' . $REMITENTE_NOMBRE . ' <' . $fromEmail . '>';
$headers[] = 'X-Mailer: PHP/' . phpversion();

/* Reply-To con teléfono en el cuerpo; no hay email del cliente en el form */
$ok = @mail($DESTINO, '=?UTF-8?B?' . base64_encode($asunto) . '?=', $cuerpo, implode("\r\n", $headers));

if (!$ok) {
    http_response_code(500);
    echo json_encode([
        'ok' => false,
        'error' => 'No se pudo enviar el correo. Intenta por WhatsApp o más tarde.',
    ]);
    exit;
}

echo json_encode(['ok' => true]);
