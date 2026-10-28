<section class="section" id="faq">
  <div class="container container--narrow">
    <header class="section__head reveal">
      <p class="eyebrow">Preguntas frecuentes</p>
      <h2>Lo que suelen preguntarnos</h2>
    </header>
    <div class="faq reveal">
      <?php foreach ($content['faq'] as $f): ?>
        <details>
          <summary><?= e(str_replace('{city}', $cfg['city'], $f[0])) ?></summary>
          <p><?= e(str_replace('{city}', $cfg['city'], $f[1])) ?></p>
        </details>
      <?php endforeach; ?>
    </div>
  </div>
</section>
