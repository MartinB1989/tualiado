# Contexto de negocio (leído por el agente seo-copy-local)

Estado: datos confirmados para la publicación. Lo que no existe todavía figura como "No definido" y no se inventa.

## Marca
- Nombre / marca: TuAliado
- Dominio: https://tualiado.com (sin `www`; la versión con `www` debe redirigir a esta)
- Tono de voz: cercano, profesional, sin jerga técnica
- Voz: **siempre en plural** ("trabajamos", "escribinos", "contanos"), nunca en primera persona del singular

## Ubicación
- Ubicación (la única que se publica): Gregorio de Laferrere, La Matanza, Zona Oeste, Buenos Aires, Argentina
- Dónde se muestra:
  - `/la-matanza`: hero, zonas, FAQ, schema (localidad, provincia, país) y footer.
  - Index (`/`): solo en el footer. Sin ciudad en el hero, el título ni el schema.
- Barrios / localidades a cubrir: todo La Matanza y Zona Oeste (listado en `src/data/local.php`)
- Modalidad: en persona en Laferrere y alrededores; a distancia (WhatsApp y videollamada) en el resto de La Matanza y Zona Oeste
- Dirección: no se publica
- Horarios: no definidos
- Redes sociales: no definidas por ahora
- Google Business Profile: pendiente; cuando exista, usar `https://tualiado.com/la-matanza` como sitio web

## Contacto
- WhatsApp: +5491155955602 (`5491155955602` para los enlaces `wa.me`)
- Email: j.martin.b1989@gmail.com (provisorio; se cambiará por uno con el dominio)
- Un único lugar para estos datos: `src/config.php`

## Propuesta de valor
Ayudamos a negocios de nuestra zona a ganar posicionamiento, clientes y visibilidad.

## Precios
No se publican precios ni orientativos: el precio final depende del alcance. Siempre "propuesta por escrito, sin compromiso".

## Servicios
1. Páginas web para negocios locales (SEO local, WhatsApp, Google Maps)
2. Catálogo online con carga y stock de productos
3. Sistemas de gestión / administración a medida
4. Apps móviles para Android e iOS
5. Soporte y mantenimiento (incluye ficha de Google Maps al día)

## Clientes ideales
1. Negocios locales con lugar físico o servicio por zona que quieren más clientes (ropa, peluquería, muebles, electrónica, electrodomésticos, corralón, masajes, electricista, albañil, cursos...).
2. Negocios que necesitan sistema de gestión, catálogo/stock online o administración a medida.

## Diferenciales y pruebas
- Diferenciales que ya se comunican: trato directo y sin intermediarios, propuesta por escrito antes de empezar, consulta sin compromiso.
- Proyectos reales (sin inventar):
  - **Gigiad** (https://gigiad.com): sistema de presupuestos y gestión para pastelerías. En línea; es el primer proyecto del sitio y tiene botón "Ver proyecto".
  - **Onetick**: ticketing con QR, streaming y apps Android/iOS. La empresa ya no existe, por eso se muestra como "Proyecto finalizado" y sin enlace.
- Resultados medibles: ninguno publicado (el campo `resultado` de cada proyecto queda vacío y no se muestra).
- Testimonios: no hay; la sección se omite.
- Plazos y garantías: no se prometen plazos fijos; el plazo queda por escrito en cada propuesta.

## Páginas legales
No hay política de privacidad ni términos por ahora: el formulario no guarda datos (redirige a WhatsApp con el mensaje armado). Revisar si se agrega analítica, cookies o almacenamiento de datos.

## Competencia local conocida
No definida.

## Stack
- PHP renderizado en servidor, sin framework y sin base de datos.
- Estructura: `index.php` y `la-matanza.php` (landing local), `contacto.php`, `src/` (config, helpers, datos), `templates/`, `assets/`.
- Imágenes locales en `assets/img/`. Si falta una, se ve un 404 (no hay imágenes de reemplazo).
- `sitemap.xml` y `robots.txt` apuntan a `https://tualiado.com`.

## Pendientes
- Cambiar el email por uno con el dominio.
- Dar de alta Search Console y enviar el sitemap.
- Crear la ficha de Google Business Profile.
- Confirmar que el servidor redirija `www` a la versión sin `www` y HTTP a HTTPS.
