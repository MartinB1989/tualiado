<?php
function e(?string $s): string
{
    return htmlspecialchars((string) $s, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

/** Ruta base del sitio (funciona en /soluciones-web/public/ y en la raíz de un dominio). */
function base_path(): string
{
    $dir = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '')), '/');
    return $dir;
}

function asset(string $path): string
{
    return base_path() . '/assets/' . ltrim($path, '/');
}

/**
 * Imagen local assets/img/{seed}.(webp|jpg) si existe; si no, una foto pública
 * aleatoria (placeholder).
 */
function photo(string $seed, int $w, int $h): string
{
    foreach (['webp', 'jpg'] as $ext) {
        if (is_file(__DIR__ . '/../assets/img/' . $seed . '.' . $ext)) {
            return asset('img/' . $seed . '.' . $ext);
        }
    }
    return 'https://picsum.photos/seed/' . rawurlencode($seed) . "/$w/$h";
}

/** Franja con botón directo a WhatsApp (mensaje prellenado según la sección). */
function wa_cta(array $cfg, string $text, string $msg): void
{
    $url = 'https://wa.me/' . $cfg['whatsapp'] . '?text=' . rawurlencode($msg);
    echo '<div class="cta-band"><div class="container cta-band__in reveal"><p>' . e($text) . '</p>'
        . '<a class="btn" href="' . e($url) . '" target="_blank" rel="noopener">Escribime por WhatsApp</a></div></div>';
}

/**
 * Valida los datos del formulario. Devuelve [datos limpios, errores].
 * Se usa del lado servidor (contacto.php); el JS replica las mismas reglas.
 */
function validate_contact(array $in): array
{
    $data = [];
    foreach (['nombre', 'telefono', 'email', 'mensaje'] as $k) {
        $data[$k] = trim(preg_replace('/\s+/u', ' ', (string) ($in[$k] ?? '')));
    }
    $err = [];
    if (mb_strlen($data['nombre']) < 2 || mb_strlen($data['nombre']) > 80) {
        $err['nombre'] = 'Ingresá tu nombre.';
    }
    if (!preg_match('/^[0-9+()\s-]{8,20}$/', $data['telefono'])) {
        $err['telefono'] = 'Ingresá un teléfono válido.';
    }
    if ($data['email'] !== '' && !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $err['email'] = 'El email no es válido.';
    }
    if (mb_strlen($data['mensaje']) < 10 || mb_strlen($data['mensaje']) > 1000) {
        $err['mensaje'] = 'Contanos brevemente qué necesitás (mínimo 10 caracteres).';
    }
    return [$data, $err];
}

function whatsapp_url(string $number, array $d): string
{
    $lines = [
        'Hola! Quiero consultar por un servicio.',
        '',
        'Nombre: ' . $d['nombre'],
        'Teléfono: ' . $d['telefono'],
    ];
    if ($d['email'] !== '') {
        $lines[] = 'Email: ' . $d['email'];
    }
    $lines[] = 'Mensaje: ' . $d['mensaje'];
    return 'https://wa.me/' . $number . '?text=' . rawurlencode(implode("\n", $lines));
}
