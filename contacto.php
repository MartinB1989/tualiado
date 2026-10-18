<?php
declare(strict_types=1);

// Respaldo del lado servidor (sin JS): valida y redirige a WhatsApp. No usa base de datos ni guarda nada.
session_start();
$root = __DIR__;
$cfg = require $root . '/src/config.php';
require $root . '/src/helpers.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ' . base_path() . '/#contacto');
    exit;
}

// Honeypot: los bots completan este campo oculto.
if (!empty($_POST['web'])) {
    header('Location: ' . base_path() . '/');
    exit;
}

[$data, $errors] = validate_contact($_POST);

if ($errors) {
    $_SESSION['contact_flash'] = ['errors' => $errors, 'old' => $data];
    header('Location: ' . base_path() . '/#contacto');
    exit;
}

header('Location: ' . whatsapp_url($cfg['whatsapp'], $data));
exit;
