(function () {
  'use strict';
  var root = document.documentElement;

  // Tema claro / oscuro
  document.getElementById('themeToggle').addEventListener('click', function () {
    var next = root.getAttribute('data-theme') === 'dark' ? 'light' : 'dark';
    root.setAttribute('data-theme', next);
    try { localStorage.setItem('theme', next); } catch (e) {}
  });

  // Menú móvil
  var menuBtn = document.getElementById('menuBtn');
  var nav = document.getElementById('nav');
  menuBtn.addEventListener('click', function () {
    var open = nav.classList.toggle('open');
    menuBtn.setAttribute('aria-expanded', open ? 'true' : 'false');
  });
  nav.addEventListener('click', function (e) {
    if (e.target.tagName === 'A') { nav.classList.remove('open'); menuBtn.setAttribute('aria-expanded', 'false'); }
  });

  // Aparición al hacer scroll
  var items = document.querySelectorAll('.reveal');
  if ('IntersectionObserver' in window) {
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (en) {
        if (en.isIntersecting) { en.target.classList.add('in'); io.unobserve(en.target); }
      });
    }, { threshold: 0.12 });
    items.forEach(function (el) { io.observe(el); });
  } else {
    items.forEach(function (el) { el.classList.add('in'); });
  }

  // Hero: el título alterna entre los servicios principales (fundido, sin slide)
  var swap = document.getElementById('heroSwap');
  var tabs = document.querySelectorAll('.hero__tab');
  if (swap && tabs.length) {
    var current = 0, timer = null;
    var still = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    var show = function (i) {
      current = i;
      tabs.forEach(function (t, n) {
        t.classList.toggle('is-active', n === i);
        t.setAttribute('aria-pressed', n === i ? 'true' : 'false');
      });
      swap.classList.add('is-out');
      setTimeout(function () {
        swap.textContent = tabs[i].getAttribute('data-word');
        swap.classList.remove('is-out');
      }, still ? 0 : 300);
    };
    var start = function () {
      if (still) return;
      stop();
      timer = setInterval(function () { show((current + 1) % tabs.length); }, 4000);
    };
    var stop = function () { clearInterval(timer); };

    tabs.forEach(function (t, n) {
      t.addEventListener('click', function () { show(n); start(); });
    });
    var box = document.getElementById('heroTabs');
    box.addEventListener('mouseenter', stop);
    box.addEventListener('mouseleave', start);
    box.addEventListener('focusin', stop);
    box.addEventListener('focusout', start);
    start();
  }

  // Formulario: valida y redirige a WhatsApp con el mensaje armado (mismas reglas que contacto.php)
  var form = document.getElementById('contactForm');
  if (!form) return;

  var rules = {
    nombre: function (v) { return v.length >= 2 && v.length <= 80 ? '' : 'Ingresá tu nombre.'; },
    telefono: function (v) { return /^[0-9+()\s-]{8,20}$/.test(v) ? '' : 'Ingresá un teléfono válido.'; },
    email: function (v) { return v === '' || /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v) ? '' : 'El email no es válido.'; },
    mensaje: function (v) { return v.length >= 10 && v.length <= 1000 ? '' : 'Contanos brevemente qué necesitás (mínimo 10 caracteres).'; }
  };

  function clean(v) { return v.replace(/\s+/g, ' ').trim(); }

  function check(name) {
    var el = form.elements[name];
    var msg = rules[name](clean(el.value));
    var out = el.parentNode.querySelector('.error');
    if (out) out.textContent = msg;
    el.classList.toggle('invalid', !!msg);
    el.setAttribute('aria-invalid', msg ? 'true' : 'false');
    return !msg;
  }

  Object.keys(rules).forEach(function (name) {
    form.elements[name].addEventListener('blur', function () { check(name); });
    form.elements[name].addEventListener('input', function () {
      if (form.elements[name].classList.contains('invalid')) check(name);
    });
  });

  form.addEventListener('submit', function (e) {
    var firstBad = null;
    Object.keys(rules).forEach(function (name) {
      if (!check(name) && !firstBad) firstBad = form.elements[name];
    });
    if (firstBad) { e.preventDefault(); firstBad.focus(); return; }
    if (form.elements.web.value) { e.preventDefault(); return; } // honeypot

    e.preventDefault();
    var v = function (n) { return clean(form.elements[n].value); };
    var lines = ['Hola! Quiero consultar por un servicio.', '', 'Nombre: ' + v('nombre'), 'Teléfono: ' + v('telefono')];
    if (v('email')) lines.push('Email: ' + v('email'));
    lines.push('Mensaje: ' + v('mensaje'));
    window.location.href = 'https://wa.me/' + form.getAttribute('data-wa') + '?text=' + encodeURIComponent(lines.join('\n'));
  });
})();
