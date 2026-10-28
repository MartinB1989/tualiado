<?php
// Contenido de la página local (La Matanza y Zona Oeste). Sin precios: cada proyecto se presupuesta por alcance.
return [
    'slug' => 'la-matanza',

    'problemas' => [
        'Tu negocio no aparece cuando alguien de la zona busca en Google o en Maps.',
        'Todo pasa por Instagram y WhatsApp, y te preguntan siempre lo mismo: precio, stock, horarios.',
        'Llevás el stock, los pedidos o los turnos en un cuaderno o en un Excel.',
        'Querés una web pero no sabés por dónde empezar ni en quién confiar.',
    ],

    'rubros' => [
        [
            'nombre' => 'Ropa y calzado',
            'icon' => '<path d="M8 3 3 6l2 4 3-1v12h8V9l3 1 2-4-5-3a4 4 0 0 1-8 0z"/>',
            'problema' => 'Mostrás todo por Instagram y respondés "¿tenés talle?" una por una.',
            'solucion' => 'Catálogo o tienda online con talles, colores y stock que actualizás vos, y pedidos directos por WhatsApp.',
        ],
        [
            'nombre' => 'Peluquerías y estética',
            'icon' => '<circle cx="6" cy="6" r="3"/><circle cx="6" cy="18" r="3"/><path d="M20 4 8.1 15.9M14.5 14.5 20 20M8.1 8.1 12 12"/>',
            'problema' => 'Los turnos se anotan en un cuaderno o se pierden entre mensajes.',
            'solucion' => 'Una web con tus servicios, fotos de trabajos y ubicación en Maps. Si lo necesitás, un sistema de turnos.',
        ],
        [
            'nombre' => 'Muebles y decoración',
            'icon' => '<path d="M5 11V8a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v3M3 13a2 2 0 0 1 4 0v2h10v-2a2 2 0 0 1 4 0v5H3zM5 18v2M19 18v2"/>',
            'problema' => 'Cada cliente pide fotos, medidas y precios uno por uno.',
            'solucion' => 'Catálogo o tienda con fotos, medidas y categorías. El cliente elige y te consulta o compra, con el producto ya indicado.',
        ],
        [
            'nombre' => 'Electrónica y electrodomésticos',
            'icon' => '<path d="M9 2v6M15 2v6M6 8h12v4a6 6 0 0 1-12 0zM12 18v4"/>',
            'problema' => 'Muchos productos y un stock que cambia todos los días.',
            'solucion' => 'Catálogo o tienda online con carga de productos y control de stock, con un panel simple para administrarlo vos.',
        ],
        [
            'nombre' => 'Corralones y ferreterías',
            'icon' => '<path d="M14.7 6.3a4 4 0 0 0-5.4 5.4L3 18l3 3 6.3-6.3a4 4 0 0 0 5.4-5.4l-2.7 2.7-2.3-.7-.7-2.3z"/>',
            'problema' => 'Te llaman todo el día para saber si hay un material y cómo viene.',
            'solucion' => 'Catálogo o tienda de materiales con stock al día y un sistema para armar presupuestos más rápido.',
        ],
        [
            'nombre' => 'Masajes y salud',
            'icon' => '<path d="M12 21s-8-5-8-11a4.5 4.5 0 0 1 8-2.8A4.5 4.5 0 0 1 20 10c0 6-8 11-8 11z"/>',
            'problema' => 'Te encuentran solo por recomendación: si alguien busca "masajes en mi barrio", no aparecés.',
            'solucion' => 'Página con SEO local y tu ficha de Google Maps para que te encuentren cuando te buscan cerca.',
        ],
        [
            'nombre' => 'Electricistas, albañiles y oficios',
            'icon' => '<path d="M13 2 4 14h7l-1 8 9-12h-7z"/>',
            'problema' => 'Vivís del boca a boca y perdés trabajos con quien sí aparece en Google.',
            'solucion' => 'Una web simple con tus trabajos, zonas que cubrís y WhatsApp a un toque, lista para que te contacten.',
        ],
        [
            'nombre' => 'Cursos y clases',
            'icon' => '<path d="M2 6c3-1 7-1 10 1 3-2 7-2 10-1v13c-3-1-7-1-10 1-3-2-7-2-10-1zM12 7v13"/>',
            'problema' => 'Las consultas e inscripciones se pierden en mensajes sueltos.',
            'solucion' => 'Página con programa, horarios e inscripción por WhatsApp. Si crecés, un sistema para gestionar alumnos.',
        ],
    ],

    'incluye' => [
        [
            'titulo' => 'Página web con SEO local',
            'texto' => 'Rápida, pensada para el celular y preparada para que Google entienda qué hacés y dónde estás.',
            'icon' => '<path d="M3 5h18v12H3zM8 21h8M12 17v4"/>',
        ],
        [
            'titulo' => 'Google Maps y WhatsApp',
            'texto' => 'Tu ficha de Google al día y un botón de WhatsApp para que te escriban en un toque.',
            'icon' => '<path d="M12 21s-7-6.2-7-11a7 7 0 0 1 14 0c0 4.8-7 11-7 11z"/><circle cx="12" cy="10" r="2.5"/>',
        ],
        [
            'titulo' => 'Catálogo o tienda con stock',
            'texto' => 'Mostrás tus productos para consultar o vendés online, y cargás precios y stock vos mismo, sin depender de nadie.',
            'icon' => '<path d="M21 8 12 3 3 8l9 5zM3 8v8l9 5 9-5V8M12 13v8"/>',
        ],
        [
            'titulo' => 'Sistema a medida',
            'texto' => 'Ventas, pedidos, turnos o lo que necesite tu negocio, hecho a tu forma de trabajar.',
            'icon' => '<path d="M4 20V10M10 20V4M16 20v-7M22 20H2"/>',
        ],
    ],

    'matanza' => [
        'Gregorio de Laferrere', 'San Justo', 'Ramos Mejía', 'Lomas del Mirador', 'La Tablada', 'Villa Luzuriaga',
        'Isidro Casanova', 'Rafael Castillo', 'González Catán', 'Virrey del Pino', 'Ciudad Evita', 'Aldo Bonzi',
        'Tapiales', 'Villa Madero', 'Villa Celina', '20 de Junio', 'Villa Insuperable',
    ],

    'oeste' => [
        'Morón', 'Ituzaingó', 'Hurlingham', 'Merlo', 'Moreno', 'Tres de Febrero', 'Esteban Echeverría', 'Ezeiza', 'Marcos Paz',
    ],

    'faq' => [
        ['¿Atienden en persona en La Matanza?', 'Sí. Si estás en Gregorio de Laferrere o cerca, podemos vernos en persona. Para el resto de La Matanza y Zona Oeste trabajamos por WhatsApp y videollamada, con el mismo seguimiento.'],
        ['¿Cuánto cuesta una página web para mi negocio?', 'Depende de lo que necesites: no es lo mismo una página simple que un catálogo con stock o un sistema de gestión. Por eso no hay precios fijos: nos contás tu caso y te pasamos una propuesta por escrito, sin compromiso, antes de empezar.'],
        ['Ya tengo Instagram, ¿necesito una página web?', 'Instagram sirve para mostrarte, pero la web es tuya, te encuentran en Google cuando buscan cerca y ahorra las preguntas repetidas (precios, horarios, stock). Se complementan.'],
        ['¿Mi negocio va a aparecer en Google y en Maps?', 'Dejamos todo preparado: textos, datos de contacto y tu ficha de Google Maps. Los resultados llevan tiempo y dependen de tu rubro y de la competencia en tu zona, por eso no prometemos un puesto, pero sí una buena base.'],
        ['¿Puedo cargar mis productos y el stock yo mismo?', 'Sí. Armamos un panel simple para que agregues, modifiques y controles todo sin depender de nadie.'],
        ['Mi negocio está en otro lugar de Zona Oeste, ¿trabajan igual?', 'Sí. Trabajamos con negocios de toda La Matanza y Zona Oeste, y también a distancia.'],
    ],
];
