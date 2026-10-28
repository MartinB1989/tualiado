<section class="section" id="proceso">
  <div class="container">
    <header class="section__head reveal">
      <p class="eyebrow">Cómo trabajamos</p>
      <h2>De la idea a la entrega en 4 etapas</h2>
    </header>
    <ol class="steps">
      <?php foreach ($content['pasos'] as $i => $s): ?>
        <li class="step reveal" style="--d:<?= $i * 0.08 ?>s">
          <span class="step__n"><?= $i + 1 ?></span>
          <h3><?= e($s[0]) ?></h3>
          <p><?= e($s[1]) ?></p>
        </li>
      <?php endforeach; ?>
    </ol>
  </div>
</section>
