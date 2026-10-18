<?php
/** @var array $cfg */
/** @var array $content */
$canonical = rtrim($cfg['domain'], '/') . '/';
$pageTitle = str_replace('{city}', $cfg['city'], $cfg['title']) . ' | ' . $cfg['brand'];
$cfg['description'] = str_replace('{city}', $cfg['city'], $cfg['description']);
$schema = [
    '@context' => 'https://schema.org',
    '@type' => 'ProfessionalService',
    'name' => $cfg['brand'],
    'url' => $canonical,
    'description' => $cfg['description'],
    'telephone' => $cfg['phone'],
    'email' => $cfg['email'],
    'areaServed' => $cfg['zones'],
    'address' => ['@type' => 'PostalAddress', 'addressLocality' => $cfg['city']],
];
$faqSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'FAQPage',
    'mainEntity' => array_map(fn($f) => [
        '@type' => 'Question', 'name' => str_replace('{city}', $cfg['city'], $f[0]),
        'acceptedAnswer' => ['@type' => 'Answer', 'text' => str_replace('{city}', $cfg['city'], $f[1])],
    ], $content['faq']),
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= e($pageTitle) ?></title>
<meta name="description" content="<?= e($cfg['description']) ?>">
<link rel="canonical" href="<?= e($canonical) ?>">
<meta property="og:type" content="website">
<meta property="og:title" content="<?= e($pageTitle) ?>">
<meta property="og:description" content="<?= e($cfg['description']) ?>">
<meta property="og:url" content="<?= e($canonical) ?>">
<meta name="theme-color" content="#1F5FD1">
<script>
// Aplica el tema antes de pintar para evitar parpadeo.
(function () {
  var t = null;
  try { t = localStorage.getItem('theme'); } catch (e) {}
  if (!t) t = 'light';
  document.documentElement.setAttribute('data-theme', t);
})();
</script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?= e(asset('css/main.css')) ?>">
<noscript><style>.reveal{opacity:1;transform:none}</style></noscript>
<script type="application/ld+json"><?= json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?></script>
<script type="application/ld+json"><?= json_encode($faqSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?></script>
</head>
<body>
<a class="skip" href="#contenido">Saltar al contenido</a>

<header class="header" id="top">
  <div class="container header__in">
    <a class="logo" href="#top" aria-label="<?= e($cfg['brand']) ?> - inicio">
      <span class="logo__mark" aria-hidden="true">&lt;/&gt;</span><span><?= e($cfg['brand']) ?></span>
    </a>
    <nav class="nav" id="nav" aria-label="Principal">
      <a href="#servicios">Servicios</a>
      <a href="#proyecto-1">Proyectos</a>
      <a href="#proceso">Proceso</a>
      <a href="#faq">Preguntas</a>
      <a href="#contacto" class="btn btn--sm">Contactar</a>
    </nav>
    <div class="header__actions">
      <button class="icon-btn" id="themeToggle" type="button" aria-label="Cambiar tema claro/oscuro">
        <svg class="i-moon" viewBox="0 0 24 24" aria-hidden="true"><path d="M21 12.8A9 9 0 1 1 11.2 3a7 7 0 0 0 9.8 9.8z"/></svg>
        <svg class="i-sun" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="4"/><path d="M12 2v2M12 20v2M4.9 4.9l1.4 1.4M17.7 17.7l1.4 1.4M2 12h2M20 12h2M4.9 19.1l1.4-1.4M17.7 6.3l1.4-1.4"/></svg>
      </button>
      <button class="icon-btn menu-btn" id="menuBtn" type="button" aria-label="Abrir menú" aria-expanded="false" aria-controls="nav">
        <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 7h16M4 12h16M4 17h16"/></svg>
      </button>
    </div>
  </div>
</header>

<main id="contenido">
<?php
include __DIR__ . '/sections/hero.php';
include __DIR__ . '/sections/servicios.php';
foreach ($content['proyectos'] as $i => $p) {
    $n = $i + 1;
    $reverse = $i % 2 === 1;
    include __DIR__ . '/sections/proyecto.php';
}
include __DIR__ . '/sections/proceso.php';
wa_cta($cfg, '¿Tenés un proyecto en mente? Consultá sin compromiso', 'Hola! Vi tu web y quiero consultar por un proyecto.');
include __DIR__ . '/sections/faq.php';
include __DIR__ . '/sections/contacto.php';
?>
</main>

<footer class="footer">
  <div class="container footer__in">
    <div>
      <strong><?= e($cfg['brand']) ?></strong>
      <p><?= e($cfg['zones']) ?> · <?= e($cfg['modality']) ?></p>
    </div>
    <div>
      <a href="mailto:<?= e($cfg['email']) ?>"><?= e($cfg['email']) ?></a><br>
      <a href="https://wa.me/<?= e($cfg['whatsapp']) ?>" rel="noopener">WhatsApp <?= e($cfg['phone']) ?></a>
    </div>
    <p class="footer__copy">&copy; <?= date('Y') ?> <?= e($cfg['brand']) ?>. Todos los derechos reservados.</p>
  </div>
</footer>

<a class="wa-float" href="https://wa.me/<?= e($cfg['whatsapp']) ?>?text=<?= rawurlencode('Hola! Vi tu web y quiero hacer una consulta para mi negocio.') ?>" target="_blank" rel="noopener" aria-label="Escribime por WhatsApp">
  <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M21 11.5a8.5 8.5 0 0 1-12.6 7.4L3 20.5l1.7-5.2A8.5 8.5 0 1 1 21 11.5z"/><path d="M9 8.5c0 3.5 3 6.5 6.5 6.5l1-1.6-2-1-1 .8c-1-.4-1.8-1.2-2.2-2.2l.8-1-1-2z"/></svg>
  <span>WhatsApp</span>
</a>

<script src="<?= e(asset('js/main.js')) ?>" defer></script>
</body>
</html>
