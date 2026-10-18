<section class="section" id="servicios">
  <div class="container">
    <header class="section__head reveal">
      <p class="eyebrow">Servicios</p>
      <h2>Qué desarrollo</h2>
    </header>
    <div class="grid grid--4">
      <?php foreach ($content['servicios'] as $i => $s): ?>
        <article class="card reveal" style="--d:<?= $i * 0.08 ?>s">
          <img class="card__img" src="<?= e(photo($s['img'], 600, 360)) ?>" width="600" height="360" alt="" loading="lazy">
          <div class="card__body">
            <span class="card__icon"><svg viewBox="0 0 24 24" aria-hidden="true"><?= $s['icon'] ?></svg></span>
            <h3><?= e($s['titulo']) ?></h3>
            <p><?= e($s['texto']) ?></p>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>
