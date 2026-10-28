<section class="section section--alt" id="incluye">
  <div class="container">
    <header class="section__head reveal">
      <p class="eyebrow">Qué incluye</p>
      <h2>Todo lo que tu negocio necesita para crecer en la zona</h2>
    </header>
    <div class="grid grid--4">
      <?php foreach ($local['incluye'] as $i => $s): ?>
        <article class="feature reveal" style="--d:<?= $i * 0.08 ?>s">
          <svg viewBox="0 0 24 24" aria-hidden="true"><?= $s['icon'] ?></svg>
          <h3><?= e($s['titulo']) ?></h3>
          <p><?= e($s['texto']) ?></p>
        </article>
      <?php endforeach; ?>
    </div>
    <p class="reveal incluye__more"><a href="<?= e(base_path()) ?>/#proyecto-1">Ver trabajos realizados &rarr;</a></p>
  </div>
</section>
