<section class="section section--alt" id="problemas">
  <div class="container">
    <header class="section__head reveal">
      <p class="eyebrow">¿Te suena?</p>
      <h2>Lo que les pasa a muchos negocios de la zona</h2>
    </header>
    <ul class="pains">
      <?php foreach ($local['problemas'] as $i => $p): ?>
        <li class="pain reveal" style="--d:<?= $i * 0.08 ?>s"><?= e($p) ?></li>
      <?php endforeach; ?>
    </ul>
    <p class="pains__close reveal">Tiene solución, y no hace falta que sea complicada ni cara de entender.</p>
  </div>
</section>
