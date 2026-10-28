<section class="hero">
  <div class="container hero__in">
    <div class="hero__text reveal">
      <p class="eyebrow">Desarrollo de software y sitios web</p>
      <h1>Desarrollo de <span class="hero__swap" id="heroSwap" aria-live="polite">sitios web</span></h1>
      <div class="hero__tabs" id="heroTabs" role="group" aria-label="Servicios principales">
        <button type="button" class="hero__tab is-active" data-word="sitios web" aria-pressed="true">Sitios web</button>
        <button type="button" class="hero__tab" data-word="sistemas de gestión" aria-pressed="false">Sistemas de gestión</button>
        <button type="button" class="hero__tab" data-word="apps móviles" aria-pressed="false">Apps Android e iOS</button>
      </div>
      <p class="lead">Sitios web, sistemas de gestión y aplicaciones móviles a medida de tu negocio.</p>
      <div class="hero__cta">
        <a class="btn" href="https://wa.me/<?= e($cfg['whatsapp']) ?>?text=<?= rawurlencode('Hola! Vi tu web y quiero hacer una consulta.') ?>" target="_blank" rel="noopener">Contactar</a>
        <a class="btn btn--ghost" href="#proyecto-1">Ver proyectos</a>
      </div>
    </div>
    <div class="hero__media reveal" style="--d:.15s">
      <img src="<?= e(photo('hero-trabajo')) ?>" width="900" height="700" alt="Equipo trabajando sobre bocetos de pantallas de una app móvil" fetchpriority="high">
      <div class="float-card float-card--a"><span class="dot"></span> Sitio en línea</div>
      <div class="float-card float-card--b">Consultas por WhatsApp</div>
    </div>
  </div>
</section>
