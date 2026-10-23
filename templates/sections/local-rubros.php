<section class="section" id="rubros">
  <div class="container">
    <header class="section__head reveal">
      <p class="eyebrow">Soluciones por rubro</p>
      <h2>Qué puedo hacer por tu negocio</h2>
      <p class="lead">Si tu rubro no está en la lista, escribime igual: la mayoría de los problemas se parecen.</p>
    </header>
    <div class="grid grid--rubros">
      <?php foreach ($local['rubros'] as $i => $r): ?>
        <article class="rubro reveal" style="--d:<?= ($i % 4) * 0.08 ?>s">
          <span class="rubro__icon"><svg viewBox="0 0 24 24" aria-hidden="true"><?= $r['icon'] ?></svg></span>
          <h3><?= e($r['nombre']) ?></h3>
          <p class="rubro__problema"><strong>El problema:</strong> <?= e($r['problema']) ?></p>
          <p class="rubro__solucion"><strong>La solución:</strong> <?= e($r['solucion']) ?></p>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>
