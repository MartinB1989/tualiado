<?php
// Contenido editable del sitio.
return [
    'servicios' => [
        [
            'icon' => '<path d="M3 5h18v12H3zM8 21h8M12 17v4"/>',
            'titulo' => 'Sitios web',
            'texto' => 'Institucionales, landing pages, tiendas y catálogos online. Rápidos, con SEO y pensados para el celular.',
            'img' => 'web-negocio',
            'alt' => 'Código HTML de un sitio web en una pantalla',
        ],
        [
            'icon' => '<path d="M4 20V10M10 20V4M16 20v-7M22 20H2"/>',
            'titulo' => 'Sistemas de gestión',
            'texto' => 'Ventas, stock, turnos o lo que necesite tu operación, en un solo lugar y a medida de tu forma de trabajar.',
            'img' => 'sistema-gestion',
            'alt' => 'Persona sosteniendo una tablet con engranajes que representan un sistema de gestión',
        ],
        [
            'icon' => '<rect x="7" y="2" width="10" height="20" rx="2"/><path d="M11 18h2"/>',
            'titulo' => 'Apps móviles',
            'texto' => 'Aplicaciones para Android y iOS, desde la idea hasta su publicación en las tiendas.',
            'img' => 'app-movil',
            'alt' => 'Bocetos de pantallas de una app móvil sobre un escritorio, junto a un celular',
        ],
        [
            'icon' => '<path d="M12 3 4 6v6c0 5 3.5 8 8 9 4.5-1 8-4 8-9V6z"/><path d="m9 12 2 2 4-4"/>',
            'titulo' => 'Soporte y mantenimiento',
            'texto' => 'Actualizaciones, soporte técnico y tu ficha de Google Maps al día.',
            'img' => 'mantenimiento-soporte',
            'alt' => 'Herramientas de mantenimiento sobre una mesa de madera',
        ],
    ],

    'proyectos' => [
        [
            'tag' => 'Sistema de gestión',
            'nombre' => 'Gigiad',
            'resumen' => 'Sistema de cálculo de presupuestos y gestión para pastelerías.',
            'problema' => 'Quienes empiezan en la pastelería se enfrentan a una pregunta clave: ¿cuánto cobrar por mis creaciones? La respuesta no es simple: son muchas las variables y es fácil cometer errores al presupuestar.',
            'solucion' => 'Un sistema de gestión para pastelerías que calcula presupuestos de forma dinámica según el precio de los ingredientes, y donde además se anotan los pedidos y se les hace seguimiento. Incluye un panel de administración centralizado para el dueño del sistema, con métricas clave para la toma de decisiones.',
            'resultado' => '',
            'features' => ['Carga de materiales', 'Cálculo automático de presupuestos', 'Seguimiento de pedidos', 'Panel de métricas clave'],
            'tech' => ['Web', 'Panel de administración'],
            'url' => 'https://gigiad.com',
            'img' => 'gigiad',
            'img2' => 'gigiad-detalle',
            'alt' => 'Página de inicio de Gigiad con una calculadora de costos de pastelería',
            'alt2' => 'Panel de Gigiad con el desglose de costo y precio de venta de una receta',
        ],
        [
            'tag' => 'Ticketing y streaming · Proyecto finalizado',
            'nombre' => 'Onetick',
            'resumen' => 'Sistema de ticketing para venta de entradas, control de acceso con QR y transmisión de streaming en vivo.',
            'problema' => 'La empresa necesitaba una plataforma con app para Android y iOS para vender entradas digitales, tanto de shows presenciales como de shows en streaming en vivo, y que cualquier persona pudiera publicar su propio show y vender entradas.',
            'solucion' => 'Una web de venta al público donde cualquiera puede registrarse, publicar su show y cobrar directo en su cuenta de Mercado Pago. Una app híbrida para Android y iOS donde el público compra y guarda sus entradas. Un sistema de streaming en vivo con links privados, solo para quienes pagaron el acceso. Y un sistema de escaneo QR para controlar los ingresos.',
            'resultado' => '',
            'features' => ['Control de acceso QR', 'Transmisión de streaming en vivo', 'Sistema de gestión centralizado', 'Venta web y a través de la app'],
            'tech' => ['Web', 'App Android', 'App iOS', 'Mercado Pago'],
            'url' => '',
            'img' => 'onetick',
            'img2' => 'onetick-detalle',
            'alt' => 'Página de inicio de Onetick con la app de entradas digitales en un celular',
            'alt2' => 'Beneficios de Onetick: entradas QR, pagos seguros y gestión completa de eventos',
        ],
    ],

    'pasos' => [
        ['Consulta', 'Nos contás tu idea y qué necesitás resolver. Sin costo.'],
        ['Propuesta', 'Recibís alcance, plazo y presupuesto por escrito antes de empezar.'],
        ['Desarrollo', 'Avanzamos por etapas y te mostramos cada entrega para que valides y ajustes.'],
        ['Entrega y soporte', 'Lo publicamos, te capacitamos para usarlo y queda soporte disponible.'],
    ],

    'faq' => [
        ['¿Cuánto cuesta?', 'Cada proyecto se presupuesta según su alcance, por eso no hay precios fijos. Contanos tu idea y te enviamos una propuesta por escrito, sin compromiso.'],
        ['¿Cuánto tarda?', 'Depende del alcance. Una vez definido, el plazo queda por escrito en la propuesta.'],
        ['¿Qué tipo de proyectos desarrollamos?', 'Sitios web de cualquier tipo, sistemas de gestión a medida y aplicaciones móviles para Android e iOS.'],
        ['¿Puedo actualizar yo mismo el contenido, los productos o el stock?', 'Sí. Armamos un panel simple para que cargues y modifiques todo sin depender de nadie.'],
        ['¿Mi negocio va a aparecer en Google?', 'Dejamos todo preparado para que Google entienda qué hacés y dónde estás: textos, datos de contacto y tu ubicación en Maps. Los resultados llevan tiempo y dependen de tu rubro y de la competencia en tu zona, por eso no te prometemos un puesto, pero sí una buena base.'],
        ['¿Qué pasa después de la entrega?', 'Podés contratar mantenimiento y soporte para que todo siga funcionando y actualizado.'],
    ],
];
