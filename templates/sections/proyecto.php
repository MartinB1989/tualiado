<?php /** @var array $p @var int $n @var bool $reverse */ ?>
<section class="project <?= $reverse ? 'project--rev' : '' ?> project--<?= $n ?>" id="proyecto-<?= $n ?>" aria-labelledby="proyecto-<?= $n ?>-t">
  <div class="container project__in">
    <div class="project__text reveal">
      <dl class="project__facts">
        <div><dt>El problema</dt><dd><?= e($p['problema']) ?></dd></div>
        <div><dt>Lo que construimos</dt><dd><?= e($p['solucion']) ?></dd></div>
        <?php if ($p['resultado'] !== ''): ?>
        <div><dt>Resultado</dt><dd><?= e($p['resultado']) ?></dd></div>
        <?php endif; ?>
      </dl>

      <ul class="project__features">
        <?php foreach ($p['features'] as $f): ?><li><?= e($f) ?></li><?php endforeach; ?>
      </ul>

      <ul class="tags" aria-label="Tecnologías">
        <?php foreach ($p['tech'] as $t): ?><li><?= e($t) ?></li><?php endforeach; ?>
      </ul>

      <div class="hero__cta">
        <?php if ($p['url'] !== ''): ?>
          <a class="btn" href="<?= e($p['url']) ?>" target="_blank" rel="noopener">Ver proyecto</a>
        <?php endif; ?>
        <a class="btn <?= $p['url'] !== '' ? 'btn--ghost' : '' ?>" href="#contacto">Quiero algo así</a>
      </div>
    </div>

    <div class="project__media reveal" style="--d:.15s">
      <header class="project__head">
        <p class="eyebrow"><?= e($p['tag']) ?></p>
        <h2 id="proyecto-<?= $n ?>-t"><?= e($p['nombre']) ?></h2>
        <p class="lead"><?= e($p['resumen']) ?></p>
      </header>
      <div class="project__shot">
        <div class="browser">
          <div class="browser__bar"><i></i><i></i><i></i></div>
          <img src="<?= e(photo($p['img'])) ?>" width="1000" height="640" alt="<?= e($p['alt']) ?>" loading="lazy">
        </div>
        <img class="project__thumb" src="<?= e(photo($p['img2'])) ?>" width="480" height="360" alt="<?= e($p['alt2']) ?>" loading="lazy">
      </div>
    </div>
  </div>
</section>
