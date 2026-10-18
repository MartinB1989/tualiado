# Propuesta: sitio web para captar clientes (desarrollo web y software)

Basada en [negocio.md](negocio.md). Estado: **borrador para aprobación**. Todavía no se escribió código.

## 1. Objetivo

Que un dueño de negocio local entienda en menos de 10 segundos qué ofrezco, vea pruebas reales (2 proyectos propios) y me contacte por WhatsApp o formulario.

**Conversión principal:** clic en WhatsApp / envío de formulario.
**Público:** (1) negocios locales que quieren más clientes; (2) negocios que necesitan catálogo/stock o un sistema de gestión a medida.
**Tono:** cercano, profesional, sin jerga técnica.

## 2. Estructura de la página (una sola página con anclas + páginas legales mínimas)

| # | Sección | Contenido | Notas |
|---|---------|-----------|-------|
| 1 | **Header** fijo | Logo, menú (Servicios, Proyectos, Proceso, Contacto), botón "Escribime", selector claro/oscuro | Se achica al hacer scroll |
| 2 | **Hero** | Título de propuesta de valor ("Ayudo a negocios de [ciudad] a ganar clientes y visibilidad"), subtítulo, 2 botones (WhatsApp / Ver proyectos), ilustración | Animación de entrada suave |
| 3 | **Servicios** | 4 tarjetas: Páginas web locales, Catálogo online con stock, Sistemas de gestión, Otros (mantenimiento, hosting, Google Business Profile) | Precio orientativo si lo definís |
| 4 | **Para quién es** | Rubros: ropa, peluquería, muebles, electrónica, corralón, masajes, electricista, cursos… | Ayuda al SEO local y a que el visitante se reconozca |
| 5 | **Proyecto 1** (pantalla completa) | Ver sección 4 | `min-height: 100vh` |
| 6 | **Proyecto 2** (pantalla completa) | Ver sección 4 | Layout espejado al anterior |
| 7 | **Cómo trabajo** | 4 pasos: conversamos → propuesta y precio → desarrollo → publicación y soporte | Plazos y garantías: a completar |
| 8 | **Por qué elegirme** | 3 a 4 diferenciales (trato directo, SEO local incluido, sitio rápido, soporte) | Solo lo que sea cierto |
| 9 | **Testimonios** | Se muestra **solo si hay testimonios reales**; si no, se omite | No se inventan |
| 10 | **Preguntas frecuentes** | 5 a 6 preguntas (acordeón) | Con schema FAQPage |
| 11 | **Contacto** | Formulario (nombre, rubro, mensaje, teléfono), WhatsApp, email, mapa si atiende en persona | Con protección anti-spam |
| 12 | **Footer** | Datos de contacto, zonas que cubre, enlaces legales | |

## 3. Diseño

### Paleta (azules, confianza)

| Token | Tema claro | Tema oscuro |
|-------|-----------|-------------|
| Fondo | `#F5F8FD` | `#0A1220` |
| Superficie (tarjetas) | `#FFFFFF` | `#111C30` |
| Texto | `#0F1B2D` | `#E6EEF9` |
| Texto secundario | `#4A5B73` | `#9FB1CB` |
| Primario | `#1F5FD1` | `#4C8DFF` |
| Primario oscuro (hover) | `#1749A3` | `#74A6FF` |
| Acento (detalles) | `#19B5D8` | `#3CCBE8` |
| Borde | `#DCE5F2` | `#22314D` |

- Los contrastes se verifican con WCAG AA.
- **Tema claro/oscuro:** variables CSS con `[data-theme]`. Arranca según `prefers-color-scheme`, se puede cambiar con un botón y se recuerda en `localStorage`. Un script mínimo en el `<head>` evita el parpadeo al cargar.
- **Tipografía:** una sola familia sans-serif moderna (Inter o similar), autoalojada para no depender de terceros.
- **Imágenes ilustrativas:** ilustraciones en SVG (livianas, escalan bien y se adaptan a ambos temas) en hero, servicios y fondos. Son solo estéticas, con `alt=""`.

### Animaciones (simples y profesionales)

- Aparición suave al hacer scroll (fade + leve desplazamiento) con `IntersectionObserver`, sin librerías.
- Hover en tarjetas y botones (elevación sutil).
- Contadores o barra de progreso discretos en las secciones de proyecto, si hay métricas reales.
- Transición de color al cambiar de tema.
- Respeta `prefers-reduced-motion`: se desactivan para quien lo pida.

## 4. Secciones de proyecto (pantalla completa)

Cada una ocupa toda la altura de la pantalla, con dos columnas en escritorio y una sola en móvil:

- **Columna de texto:** nombre, tipo de proyecto, el problema del cliente, qué se construyó, resultado, tecnologías, botón "Ver proyecto" o "Quiero algo así".
- **Columna visual:** capturas del proyecto dentro de un marco de navegador/dispositivo, con un efecto leve de parallax o flotación.
- Fondo diferenciado entre ambas (una clara/azul, otra más profunda) para marcar el ritmo.

**Datos que necesito de cada proyecto:**
1. Nombre y URL (si está en línea)
2. Qué es y para quién
3. Qué problema resolvía
4. Qué funciones tiene
5. Resultados reales (si los hay)
6. 2 a 4 capturas de pantalla
7. Tecnologías usadas
8. Si puedo mostrar el nombre del cliente

## 5. Arquitectura técnica (PHP del lado del servidor)

PHP puro, sin framework, ligero y fácil de alojar en hosting común. Para una página de este tamaño un framework no aporta y sí agrega peso.

```
soluciones-web/
├── docs/                    # negocio.md, esta propuesta
├── public/                  # raíz web (DocumentRoot)
│   ├── index.php            # front controller + ruteo simple
│   ├── .htaccess            # URLs limpias, caché, compresión, cabeceras de seguridad
│   ├── contacto.php         # procesa el formulario (POST)
│   ├── sitemap.xml.php      # sitemap dinámico
│   ├── robots.txt
│   └── assets/
│       ├── css/             # main.css (variables de tema, componentes)
│       ├── js/              # theme.js, reveal.js, form.js (cada uno de pocas líneas)
│       ├── img/             # ilustraciones SVG, capturas de proyectos (WebP)
│       └── fonts/
├── src/
│   ├── config.php           # datos del negocio (nombre, WhatsApp, ciudad…)
│   ├── data/
│   │   ├── servicios.php    # arreglos de contenido
│   │   └── proyectos.php
│   └── helpers.php          # escape HTML, SEO, CSRF
└── templates/
    ├── layout.php           # <head>, header, footer
    └── sections/            # hero.php, servicios.php, proyecto.php, faq.php, contacto.php…
```

- El contenido vive en arreglos PHP (`data/`), así agregar un proyecto o servicio no obliga a tocar el HTML.
- La sección de proyecto es una plantilla reutilizable que recibe los datos de cada proyecto.
- **Formulario:** validación en servidor, token CSRF, campo trampa (honeypot), límite de envíos por IP y envío por `mail()`/SMTP. Los datos se escapan siempre con `htmlspecialchars`.
- **Seguridad:** cabeceras (CSP, X-Content-Type-Options, Referrer-Policy), sin exponer `src/` fuera de `public/`.

## 6. SEO local y rendimiento

- HTML renderizado en servidor, un solo `<h1>`, jerarquía de encabezados correcta.
- `title` y `meta description` con ciudad y servicio. Open Graph y Twitter Cards.
- Schema.org: `LocalBusiness` / `ProfessionalService`, `FAQPage`, `Service`.
- Sitemap, robots, URL canónica y `lang="es"`.
- Datos de contacto (NAP) consistentes con Google Business Profile.
- Rendimiento: imágenes WebP/SVG con `width`/`height` y `loading="lazy"`, CSS y JS mínimos, compresión gzip/brotli y caché de assets. Meta: Lighthouse ≥ 95 en móvil.
- Accesibilidad: navegación por teclado, foco visible, contraste AA, etiquetas en formularios.
- Cuando se escriba el copy final, conviene pasarlo por el agente `seo-copy-local`.

## 7. Plan de trabajo

| Fase | Entregable |
|------|-----------|
| 1 | Estructura de carpetas, layout, sistema de temas claro/oscuro, header y footer |
| 2 | Hero, servicios, rubros, cómo trabajo, por qué elegirme |
| 3 | Las 2 secciones de proyecto a pantalla completa |
| 4 | FAQ, contacto con formulario seguro, WhatsApp |
| 5 | Animaciones, ilustraciones SVG, pulido responsive |
| 6 | SEO (meta, schema, sitemap), rendimiento y accesibilidad, pruebas en navegador |

## 8. Pendientes que necesito de vos

Estos datos están como `[COMPLETAR]` en [negocio.md](negocio.md). Sin ellos dejo marcadores visibles y no invento nada.

**Imprescindibles**
- [ ] Nombre de la marca y dominio
- [ ] Ciudad, zonas que cubrís y si atendés en persona, remoto o ambos
- [ ] WhatsApp, teléfono y email
- [ ] Los 2 proyectos (ver lista de la sección 4) con sus capturas

**Importantes**
- [ ] Precios orientativos (o prefieres "consultá tu presupuesto")
- [ ] Por qué elegirte frente a otros, plazos y garantías
- [ ] Logo (si no hay, hago uno de texto sencillo)

**Opcionales**
- [ ] Testimonios reales
- [ ] Servicios extra (mantenimiento, hosting, Google Business Profile)
- [ ] Competencia local conocida

## 9. Decisiones tomadas

1. **PHP puro con plantillas**, sin framework y **sin base de datos**.
2. **Una sola página** con anclas.
3. **Tipografía:** IBM Plex Sans (Google Fonts), sobria y corporativa, para dar un aspecto profesional y serio.
4. **Imágenes:** públicas aleatorias (picsum.photos) como marcador; se reemplazan por imágenes propias y logo.
5. **Formulario:** el botón "Enviar" valida los campos obligatorios (nombre, teléfono, rubro, servicio y mensaje; el email es opcional). Si todo está completo, redirige a WhatsApp con el mensaje armado. Se valida en el navegador y, como respaldo, en el servidor (`public/contacto.php`). No se guarda nada.
6. **Contacto:** solo WhatsApp y email, visibles en la sección de contacto y el footer.
7. **Testimonios:** no hay reales, por eso la sección se omite.
