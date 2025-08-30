<?php
$title = "Tentang Kami - Bintang Terang Makmur";
$description = "Informasi tentang Bintang Terang Makmur, penyedia bahan bangunan lengkap dengan harga terbaik.";
include 'includes/header.php';
?>

<section class="page-header">
    <div class="container" data-aos="fade-down">
        <h2 class="section-title">Tentang Kami</h2>
        <p class="section-subtitle">
            Kami berkomitmen untuk menyediakan material bangunan berkualitas dengan pelayanan profesional dan harga terbaik.
        </p>
    </div>
</section>

<section class="about-section container">
    <div class="about-grid">
        <!-- Teks Tentang Kami -->
        <div class="about-text" data-aos="fade-right">
            <h3>Sejarah Singkat</h3>
            <p>
                Berdiri sejak 2019, Bintang Terang Makmur telah berkembang dari toko kecil menjadi penyedia material bangunan yang dipercaya
                ratusan pelanggan setiap bulannya, mencakup proyek rumah tinggal hingga bangunan komersial.
            </p>

            <h4>Mengapa Memilih Kami?</h4>
            <ul class="about-list">
                <li><strong>Stok Lengkap:</strong> Material siap tersedia untuk berbagai kebutuhan.</li>
                <li><strong>Harga Kompetitif:</strong> Memberikan nilai terbaik untuk pelanggan.</li>
                <li><strong>Pengiriman Cepat:</strong> Tepat waktu dan dapat diandalkan.</li>
                <li><strong>Konsultasi Material:</strong> Tim kami siap memberikan saran profesional.</li>
            </ul>
        </div>

        <!-- Statistik -->
        <div class="about-stats" data-aos="fade-left">
            <div class="stat-card">
                <span class="counter" data-target="1000">0</span>
                <p>Pelanggan Puas</p>
            </div>
            <div class="stat-card">
                <span class="counter" data-target="120">0</span>
                <p>Proyek Terselesaikan</p>
            </div>
            <div class="stat-card">
                <span class="counter" data-target="6">0</span>
                <p>Tahun Pengalaman</p>
            </div>
        </div>
    </div>
</section>

<style>
    .about-section {
        padding: 60px 20px;
    }
    .about-grid {
        display: flex;
        flex-wrap: wrap;
        gap: 40px;
        align-items: flex-start;
    }
    .about-text {
        flex: 1 1 55%;
        line-height: 1.8;
    }
    .about-text h3, .about-text h4 {
        margin-bottom: 15px;
        color: #333;
    }
    .about-list {
        list-style: none;
        padding: 0;
    }
    .about-list li {
        margin-bottom: 10px;
        padding-left: 20px;
        position: relative;
    }
    .about-list li::before {
        content: "✔";
        position: absolute;
        left: 0;
        color: #12f312ff;
    }
    .about-stats {
        flex: 1 1 40%;
        display: flex;
        flex-direction: column;
        gap: 20px;
    }
    .stat-card {
        background: #ddd;
        padding: 25px;
        border-radius: 8px;
        text-align: center;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
    }
    .stat-card .counter {
        font-size: 2rem;
        font-weight: bold;
        color: #f39c12;
        display: block;
        margin-bottom: 10px;
    }
</style>

<?php include 'includes/footer.php'; ?>
