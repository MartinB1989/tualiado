<?php
/** @var array $cfg */
$flash = $_SESSION['contact_flash'] ?? ['errors' => [], 'old' => []];
unset($_SESSION['contact_flash']);
$errors = $flash['errors'];
$old = $flash['old'];
$val = fn(string $k) => e($old[$k] ?? '');
$field = function (string $k) use ($errors) {
    return isset($errors[$k]) ? '<span class="error" role="alert">' . e($errors[$k]) . '</span>' : '<span class="error" role="alert"></span>';
};
?>
<section class="section section--contact" id="contacto">
  <div class="container contact">
    <div class="contact__info reveal">
      <p class="eyebrow">Contacto</p>
      <h2>Hablemos de tu proyecto</h2>
      <ul class="contact__list">
        <li><strong>WhatsApp</strong><a href="https://wa.me/<?= e($cfg['whatsapp']) ?>" rel="noopener"><?= e($cfg['phone']) ?></a></li>
        <li><strong>Email</strong><a href="mailto:<?= e($cfg['email']) ?>"><?= e($cfg['email']) ?></a></li>
      </ul>
    </div>

    <form class="form reveal" id="contactForm" action="<?= e(base_path()) ?>/contacto.php" method="post" novalidate style="--d:.15s"
          data-wa="<?= e($cfg['whatsapp']) ?>">
      <div class="form__row">
        <label>Nombre *
          <input type="text" name="nombre" autocomplete="name" required maxlength="80" value="<?= $val('nombre') ?>">
          <?= $field('nombre') ?>
        </label>
        <label>Teléfono (WhatsApp) *
          <input type="tel" name="telefono" autocomplete="tel" required maxlength="20" value="<?= $val('telefono') ?>">
          <?= $field('telefono') ?>
        </label>
      </div>
      <label>Email <small>(opcional)</small>
        <input type="email" name="email" autocomplete="email" maxlength="120" value="<?= $val('email') ?>">
        <?= $field('email') ?>
      </label>
      <label>Mensaje *
        <textarea name="mensaje" rows="4" required minlength="10" maxlength="1000"><?= isset($old['mensaje']) ? $val('mensaje') : 'Me interesa contratar los servicios' ?></textarea>
        <?= $field('mensaje') ?>
      </label>
      <div class="hp" aria-hidden="true"><label>No completar <input type="text" name="web" tabindex="-1" autocomplete="off"></label></div>
      <button class="btn btn--block" type="submit">Enviar por WhatsApp</button>
      <p class="form__note">Al enviar se abrirá WhatsApp con tu mensaje. Los datos no se guardan en ningún servidor.</p>
    </form>
  </div>
</section>
