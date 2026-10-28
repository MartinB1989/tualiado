<?php $porque = $content['porque']; ?>
<section class="section section--alt" id="porque">
  <div class="container">
    <header class="section__head reveal">
      <p class="eyebrow">Por qué <?= e($cfg['brand']) ?></p>
      <h2><?= e($porque['titulo']) ?></h2>
      <p class="lead"><?= e($porque['lead']) ?></p>
    </header>
    <div class="grid grid--4">
      <?php foreach ($porque['items'] as $i => $s): ?>
        <article class="feature reveal" style="--d:<?= $i * 0.08 ?>s">
          <svg viewBox="0 0 24 24" aria-hidden="true"><?= $s['icon'] ?></svg>
          <h3><?= e($s['titulo']) ?></h3>
          <p><?= e($s['texto']) ?></p>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>
