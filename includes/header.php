<?php
// SEO defaults (bisa di-override di tiap halaman)
$title = isset($title) ? $title : "Bintang Terang Makmur - Lengkap & Murah";
$description = isset($description) ? $description : "Bintang Terang Makmur menyediakan berbagai kebutuhan material bangunan dengan harga terbaik.";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="<?= htmlentities($description) ?>">
    <title><?= htmlentities($title) ?></title>

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <!-- Main CSS (cache-bust) -->
    <link rel="stylesheet" href="assets/css/style.css?v=<?= time(); ?>">
</head>
<body>
<header>
    <div class="container header-inner">
        <div class="logo">
            <a href="index.php">Bintang <span>Terang</span> Makmur</a>
        </div>

        <button id="darkModeToggle" class="dark-toggle" title="Toggle dark mode">
            <span class="toggle-slider">
                <span class="icon sun">🌞</span>
                <span class="icon moon">🌙</span>
            </span>
        </button>


        <div class="menu-toggle" id="menu-toggle">&#9776;</div>

        <nav id="nav-menu">
            <ul>
                <li><a href="index.php">Beranda</a></li>
                <li><a href="about.php">Tentang Kami</a></li>
                <li><a href="products.php">Produk</a></li>
                <li><a href="services.php">Layanan</a></li>
                <li><a href="contact.php">Kontak</a></li>
            </ul>
        </nav>
    </div>
</header>
