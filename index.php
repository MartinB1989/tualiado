<?php
declare(strict_types=1);

session_start();
$root = __DIR__;
$cfg = require $root . '/src/config.php';
$content = require $root . '/src/data/content.php';
require $root . '/src/helpers.php';

header('X-Content-Type-Options: nosniff');
header('Referrer-Policy: strict-origin-when-cross-origin');
header('X-Frame-Options: SAMEORIGIN');

require $root . '/templates/layout.php';
