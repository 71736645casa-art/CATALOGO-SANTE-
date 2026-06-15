<?php
$categories = [
    [
        'name' => 'Scrubs Mujer',
        'desc' => 'Cortes comodos, frescos y funcionales para turnos largos.',
        'image' => 'assets/img/placeholders/perfil.jpg'
    ],
    [
        'name' => 'Scrubs Hombre',
        'desc' => 'Diseno profesional con telas resistentes y ligeras.',
        'image' => 'assets/img/placeholders/perfil2.jpg'
    ],
    [
        'name' => 'Batas Clinicas',
        'desc' => 'Acabado elegante para consulta, laboratorio y visitas.',
        'image' => 'assets/img/placeholders/perfil3.jpg'
    ],
    [
        'name' => 'Accesorios',
        'desc' => 'Gorros, chaquetas y complementos para un look completo.',
        'image' => 'assets/img/placeholders/perfil4.jpg'
    ]
];

$featuredProducts = [
    [
        'name' => 'Set Vital Pro',
        'type' => 'Uniforme Unisex'
    ],
    [
        'name' => 'Set Aura Flex',
        'type' => 'Uniforme Mujer'
    ],
    [
        'name' => 'Bata Core White',
        'type' => 'Bata Clinica'
    ],
    [
        'name' => 'Set Motion Fit',
        'type' => 'Uniforme Hombre'
    ],
    [
        'name' => 'Chaqueta Guard Shift',
        'type' => 'Abrigo Ligero'
    ],
    [
        'name' => 'Gorro Clean Line',
        'type' => 'Accesorio'
    ]
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sante | Uniformes Medicos</title>
    <meta name="description" content="Sante: tienda online de ropa para enfermeros y personal de salud.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <div class="top-strip" aria-label="Avisos de tienda">
        <div class="top-strip-inner">
            <span>CATALOGO OFICIAL SANTE 2026</span>
            <span>SIGUENOS EN INSTAGRAM @SANTE_MEDWEAR</span>
            <span>UNIFORMES PARA ENFERMERIA Y SALUD</span>
        </div>
    </div>

    <header class="header">
        <a href="#inicio" class="brand" aria-label="Sante inicio">SANTE</a>

        <nav class="menu" aria-label="Menu principal">
            <a href="#inicio">HOME</a>
            <a href="#destacados">LO NUEVO</a>
            <a href="#coleccion">MUJER</a>
        </nav>

        <div class="header-actions">
            <label class="search-box" for="search-input">
                <input id="search-input" type="text" placeholder="BUSCAR">
            </label>
            <button class="menu-toggle" aria-label="Abrir menu">MENU</button>
        </div>
    </header>

    <main>
        <section class="hero-banner" id="inicio" aria-label="Video principal">
            <video class="hero-video" autoplay muted loop playsinline poster="assets/img/placeholders/portada-sante.jpeg">
                <source src="assets/img/placeholders/1.mp4" type="video/mp4">
            </video>
            <div class="hero-overlay"></div>
            <div class="hero-caption reveal-up">
                <p class="label">NUEVA COLECCION</p>
                <h1>SANTE SIGNATURE</h1>
                <a href="#destacados" class="btn btn-solid">VER COLECCION</a>
            </div>
        </section>

        <section class="hm-showcase" id="coleccion" aria-label="Novedades">
            <div class="hm-showcase-head">
                <h2>Novedades</h2>
               <a href="productos.php">Ver todo</a>
            </div>

            <div class="grid-categories">
                <?php foreach ($categories as $index => $category): ?>
                    <a class="category-card" href="productos.php" style="--delay: <?php echo $index * 70; ?>ms;">
                        <div class="category-photo">
                            <img
                                src="<?php echo htmlspecialchars($category['image'], ENT_QUOTES, 'UTF-8'); ?>"
                                alt="<?php echo htmlspecialchars($category['name'], ENT_QUOTES, 'UTF-8'); ?>"
                            >
                        </div>
                        <div class="category-content">
                            <h3><?php echo htmlspecialchars($category['name'], ENT_QUOTES, 'UTF-8'); ?></h3>
                            <span aria-hidden="true">&rarr;</span>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="editorial-duo" aria-label="Colecciones destacadas">
            <a class="editorial-card" href="productos.php">
                <img src="assets/img/placeholders/verde.jpg.jpg" alt="Coleccion verde Sante">
                <div class="editorial-copy">
                    <h2>Verdes esenciales</h2>
                    <span>Comprar ahora</span>
                </div>
            </a>

            <a class="editorial-card" href="productos.php">
                <img src="assets/img/placeholders/beige.jpg" alt="Coleccion beige Sante">
                <div class="editorial-copy">
                    <h2>Beige moderno</h2>
                    <span>Comprar ahora</span>
                </div>
            </a>
        </section>
    </main>

    <footer class="site-footer" aria-label="Informacion de Sante">
        <div class="site-footer-grid">
            <section class="footer-column">
                <h2>Colecciones</h2>
                <a href="#coleccion">Mujer</a>
                <a href="#coleccion">Hombre</a>
                <a href="#coleccion">Batas clinicas</a>
                <a href="#coleccion">Accesorios</a>
            </section>

            <section class="footer-column">
                <h2>Sante</h2>
                <a href="#inicio">Uniformes medicos</a>
                <a href="#coleccion">Telas confortables</a>
                <a href="#coleccion">Diseno funcional</a>
                <a href="#coleccion">Cuidado profesional</a>
            </section>

            <section class="footer-column">
                <h2>Ayuda</h2>
                <a href="#coleccion">Guia de tallas</a>
                <a href="#coleccion">Cambios y ajustes</a>
                <a href="#coleccion">Atencion personalizada</a>
                <a href="#coleccion">Contacto</a>
            </section>

            <section class="footer-column footer-feature">
                <h2>Hecho para tu rutina</h2>
                <p>Prendas medicas con cortes limpios, movimiento comodo y una presencia elegante para consulta, clinica y turnos largos.</p>
            </section>
        </div>

        <div class="footer-bottom">
            <div>
                <a class="footer-brand" href="#inicio" aria-label="Sante inicio">SANTE</a>
                <p>Peru (S/) &nbsp; Catalogo oficial Sante</p>
            </div>

            <a
                class="social-link"
                href="https://www.instagram.com/sante.medwear/"
                target="_blank"
                rel="noopener noreferrer"
                aria-label="Instagram de Sante Medwear"
            >
                <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                    <rect x="3" y="3" width="18" height="18" rx="5"></rect>
                    <circle cx="12" cy="12" r="4"></circle>
                    <circle cx="17.5" cy="6.5" r="1.2"></circle>
                </svg>
            </a>
        </div>
    </footer>

    <script src="assets/js/main.js"></script>
</body>
</html>
