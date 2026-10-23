<section class="hero">
  <div class="container hero__in">
    <div class="hero__text reveal">
      <p class="eyebrow">Laferrere · La Matanza · Zona Oeste</p>
      <h1>Páginas web y sistemas para negocios de La Matanza y Zona Oeste</h1>
      <p class="lead">Soy de Laferrere y trabajo con comercios, oficios y servicios de toda la zona. Te hago la web, el catálogo o el sistema que necesitás para que te encuentren más clientes, con trato directo y sin vueltas.</p>
      <div class="hero__cta">
        <a class="btn" href="https://wa.me/<?= e($cfg['whatsapp']) ?>?text=<?= rawurlencode('Hola! Soy de la zona y quiero consultar por una web para mi negocio.') ?>" target="_blank" rel="noopener">Escribime por WhatsApp</a>
        <a class="btn btn--ghost" href="#rubros">Ver soluciones por rubro</a>
      </div>
      <ul class="hero__points">
        <li>Trato directo, sin intermediarios</li>
        <li>Propuesta por escrito antes de empezar</li>
        <li>Consulta sin compromiso</li>
      </ul>
    </div>
    <div class="hero__media reveal" style="--d:.15s">
      <img src="<?= e(photo('hero-local', 900, 700)) ?>" width="900" height="700" alt="" fetchpriority="high">
      <div class="float-card float-card--a"><span class="dot"></span> Aparecé en Google Maps</div>
      <div class="float-card float-card--b">Consultas por WhatsApp</div>
    </div>
  </div>
</section>
