<section class="section" id="zonas">
  <div class="container">
    <header class="section__head reveal">
      <p class="eyebrow">Zonas que cubrimos</p>
      <h2>Trabajamos con negocios de toda La Matanza y Zona Oeste</h2>
      <p class="lead">Desde Gregorio de Laferrere, en persona o a distancia, según te quede más cómodo.</p>
    </header>
    <h3 class="reveal">Partido de La Matanza</h3>
    <ul class="chips reveal">
      <?php foreach ($local['matanza'] as $z): ?><li><?= e($z) ?></li><?php endforeach; ?>
    </ul>
    <h3 class="zonas__sub reveal">Zona Oeste y alrededores</h3>
    <ul class="chips reveal">
      <?php foreach ($local['oeste'] as $z): ?><li><?= e($z) ?></li><?php endforeach; ?>
      <li class="chips__more">¿Otra zona? Consultanos</li>
    </ul>
  </div>
</section>
