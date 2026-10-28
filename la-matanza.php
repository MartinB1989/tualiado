<?php
declare(strict_types=1);

session_start();
$root = __DIR__;
$cfg = require $root . '/src/config.php';
$content = require $root . '/src/data/content.php';
$local = require $root . '/src/data/local.php';
require $root . '/src/helpers.php';

header('X-Content-Type-Options: nosniff');
header('Referrer-Policy: strict-origin-when-cross-origin');
header('X-Frame-Options: SAMEORIGIN');

// Esta página usa sus propias preguntas y datos de zona; el index queda intacto.
$content['faq'] = $local['faq'];
$cfg['zones'] = 'La Matanza y Zona Oeste del Gran Buenos Aires';
$cfg['modality'] = 'En persona desde Laferrere · A distancia en toda la zona';

$path = '/' . $local['slug'];
$title = 'Páginas web para negocios en La Matanza y Zona Oeste | ' . $cfg['brand'];
$description = 'Páginas web, catálogos con stock y sistemas de gestión para negocios y oficios de La Matanza y Zona Oeste. Atención desde Laferrere. Consultá por WhatsApp.';

$page = [
    'path' => $path,
    'title' => $title,
    'description' => $description,
    'wa_msg' => 'Hola! Vi tu web y quiero hacer una consulta para mi negocio.',
    'nav' => [
        [base_path() . '/', 'Inicio'],
        ['#rubros', 'Tu rubro'],
        ['#incluye', 'Qué incluye'],
        [base_path() . '/#proyecto-1', 'Trabajos realizados'],
        ['#zonas', 'Zonas'],
        ['#faq', 'Preguntas'],
    ],
    'sections' => ['local-hero', 'local-problemas', 'local-rubros', 'local-incluye', 'local-zonas', 'proceso', 'local-cta', 'faq', 'contacto'],
    'schema' => [
        '@context' => 'https://schema.org',
        '@type' => 'ProfessionalService',
        'name' => $cfg['brand'],
        'url' => rtrim($cfg['domain'], '/') . $path,
        'description' => $description,
        'telephone' => $cfg['phone'],
    ] + schema_brand($cfg, $content['servicios']) + [
        'address' => [
            '@type' => 'PostalAddress',
            'addressLocality' => 'Gregorio de Laferrere',
            'addressRegion' => 'Buenos Aires',
            'addressCountry' => 'AR',
        ],
        'areaServed' => array_map(
            fn($n) => ['@type' => 'AdministrativeArea', 'name' => $n],
            array_merge(['La Matanza', 'Zona Oeste del Gran Buenos Aires'], $local['oeste'])
        ),
    ],
];

require $root . '/templates/layout.php';
