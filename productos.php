<?php
$products = [
    [
        'name' => 'Set Azul Abierto',
        'category' => 'Mujer',
        'price' => '',
        'colors' => 'Azul marino',
        'images' => ['azulabi.jpg', 'azulabi2.jpg', 'azulabi3.jpg', 'azulabi4.jpg', 'azulabi5.jpg', 'azulabi6.jpg']
    ],
    [
        'name' => 'Set Azul Liso',
        'category' => 'Mujer',
        'price' => '',
        'colors' => 'Azul',
        'images' => ['azulisa.jpg', 'azulisa2.jpg', 'azulisa3.jpg', 'azulisa4.jpg', 'azulisa5.jpg']
    ],
    [
        'name' => 'Set Beige',
        'category' => 'Mujer',
        'price' => '',
        'colors' => 'Beige',
        'images' => ['beige.jpg', 'beige2.jpg', 'beige3.jpg', 'beige4.jpg', 'beige5.jpg', 'beige6.jpg']
    ],
    [
        'name' => 'Set Negro Abierto',
        'category' => 'Mujer',
        'price' => '',
        'colors' => 'Negro',
        'images' => ['negroabi.jpg', 'negroabi2.jpg', 'negroabi3.jpg', 'negroabi4.jpg', 'negroabi5.jpg']
    ],
    [
        'name' => 'Set Negro Cerrado',
        'category' => 'Hombre',
        'price' => '',
        'colors' => 'Negro',
        'images' => ['negrocerrado.jpg', 'negrocerrado2.jpg', 'negrocerrado3.jpg']
    ],
    [
        'name' => 'Set Plomo Abierto',
        'category' => 'Mujer',
        'price' => '',
        'colors' => 'Plomo',
        'images' => ['plomoabierto.jpg', 'plomoabierto2.jpg', 'plomoabierto3.jpg', 'plomoabierto4.jpg', 'plomoabierto5.jpg']
    ],
    [
        'name' => 'Set Plomo Cerrado',
        'category' => 'Hombre',
        'price' => '',
        'colors' => 'Plomo',
        'images' => ['plomocerrado.jpg', 'plomocerrado2.jpg', 'plomocerrado3.jpg', 'plomocerrado4.jpg', 'plomocerrado5.jpg']
    ],
    [
        'name' => 'Saco Plomo',
        'category' => 'Chaquetas',
        'price' => '',
        'colors' => 'Plomo',
        'images' => ['sacoplomo.jpg', 'sacoplomo2.jpg', 'sacoplomo3.jpg', 'sacoplomo4.jpg', 'sacoplomo5.jpg', 'sacoplomo6.jpg']
    ],
    [
        'name' => 'Polo Clinico',
        'category' => 'Basicos',
        'price' => '',
        'colors' => 'Blanco',
        'images' => ['polo.jpg', 'polo2.jpg']
    ],
    [
        'name' => 'Bata Blanca',
        'category' => 'Batas',
        'price' => '',
        'colors' => 'Blanco',
        'images' => ['batablanca.jpg', 'batablanca2.jpg']
    ],
    [
        'name' => 'Set Verde Cerrado',
        'category' => 'Hombre',
        'price' => '',
        'colors' => 'Verde',
        'images' => ['verdecerrado.jpg.jpg', 'verdecarrado2.jpg.jpg', 'verdecerrado3.jpg.jpg', 'verdecerrado4.jpg.jpg']
    ],
    [
        'name' => 'Set Verde Abierto',
        'category' => 'Mujer',
        'price' => '',
        'colors' => 'Verde',
        'images' => ['verdeabiertop.jpg', 'verdeabiertop2.jpg', 'verdeabiertop3.jpg', 'verdeabiertop4.jpg', 'verdeabiertop5.jpg']
    ],
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sante | Productos</title>
    <meta name="description" content="Catalogo de uniformes medicos Sante.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/productos.css?v=5">
</head>
<body class="products-page">
    <div class="top-strip" aria-label="Avisos de tienda">
        <div class="top-strip-inner">
            <span>CATALOGO OFICIAL SANTE 2026</span>
            <span>UNIFORMES MEDICOS EN PERU</span>
            <span>ATENCION POR INSTAGRAM @SANTE_MEDWEAR</span>
        </div>
    </div>

    <header class="header">
        <a href="index.php" class="brand" aria-label="Sante inicio">SANTE</a>

        <nav class="menu" aria-label="Menu principal">
            <a href="index.php">INICIO</a>
         
        </nav>

        <div class="header-actions">
           
            <button class="menu-toggle" type="button" aria-label="Abrir menu">MENU</button>
        </div>
    </header>

    <main class="plp-shell">
        <section class="plp-hero" aria-label="Coleccion de temporada">
            <div>
                <p>Nueva coleccion</p>
                <h1>Ropa medica de temporada</h1>
            </div>
            <span><?php echo count($products); ?> productos</span>
        </section>

        <section class="plp-layout" aria-label="Listado de productos">
            <aside class="plp-filters" aria-label="Filtros">
                <div class="filter-block">
                    <button type="button">Categoria</button>
                    <a href="productos.php">Mujer</a>
                    <a href="productos.php">Hombre</a>
                    <a href="productos.php">Batas</a>
                    <a href="productos.php">Chaquetas</a>
                </div>

                <div class="filter-block">
                    <button type="button">Color</button>
                    <a href="productos.php">Azul</a>
                    <a href="productos.php">Negro</a>
                    <a href="productos.php">Plomo</a>
                    <a href="productos.php">Verde</a>
                    <a href="productos.php">Beige</a>
                </div>

                <div class="filter-block">
                    <button type="button">Talla</button>
                    <a href="productos.php">XS</a>
                    <a href="productos.php">S</a>
                    <a href="productos.php">M</a>
                    <a href="productos.php">L</a>
                    <a href="productos.php">XL</a>
                </div>
            </aside>

            <div class="plp-content">
                <div class="plp-toolbar">
                    <button type="button">Filtrar y ordenar</button>
                    <span>Ordenar por: Recomendados</span>
                </div>

                <div class="plp-grid">
                    <?php foreach ($products as $productIndex => $product): ?>
                        <?php
                            $imagePaths = array_map(
                                fn($image) => 'assets/img/placeholders/' . $image,
                                $product['images']
                            );
                            $firstImage = $imagePaths[0];
                        ?>
                        <article class="plp-card">
                            <div
                                class="product-carousel"
                                data-carousel
                                data-product-title="<?php echo htmlspecialchars($product['name'], ENT_QUOTES, 'UTF-8'); ?>"
                                data-images="<?php echo htmlspecialchars(json_encode($imagePaths), ENT_QUOTES, 'UTF-8'); ?>"
                            >
                                <div class="carousel-track">
                                    <img
                                        class="is-active"
                                        src="<?php echo htmlspecialchars($firstImage, ENT_QUOTES, 'UTF-8'); ?>"
                                        alt="<?php echo htmlspecialchars($product['name'], ENT_QUOTES, 'UTF-8'); ?>"
                                        loading="<?php echo $productIndex < 4 ? 'eager' : 'lazy'; ?>"
                                    >
                                </div>
                            </div>

                            <div class="plp-card-info">
                                <p><?php echo htmlspecialchars($product['category'], ENT_QUOTES, 'UTF-8'); ?></p>
                                <h2><?php echo htmlspecialchars($product['name'], ENT_QUOTES, 'UTF-8'); ?></h2>
                                <span><?php echo htmlspecialchars($product['colors'], ENT_QUOTES, 'UTF-8'); ?></span>
                                <strong><?php echo htmlspecialchars($product['price'], ENT_QUOTES, 'UTF-8'); ?></strong>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </main>

    <div class="gallery-modal" data-gallery-modal aria-hidden="true">
        <div class="gallery-backdrop" data-gallery-close></div>
        <section class="gallery-dialog" role="dialog" aria-modal="true" aria-label="Galeria de producto">
            <button class="gallery-close" type="button" data-gallery-close aria-label="Cerrar galeria">&times;</button>
            <button class="gallery-nav gallery-prev" type="button" data-gallery-prev aria-label="Imagen anterior">&lsaquo;</button>
            <img class="gallery-image" data-gallery-image src="" alt="">
            <button class="gallery-nav gallery-next" type="button" data-gallery-next aria-label="Imagen siguiente">&rsaquo;</button>
            <div class="gallery-info">
                <h2 data-gallery-title></h2>
                <span data-gallery-count></span>
            </div>
            <div class="gallery-dots" data-gallery-dots aria-label="Fotos del mismo modelo"></div>
        </section>
    </div>

    <script src="assets/js/main.js?v=6"></script>
</body>
</html>
