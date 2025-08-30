<?php
$title = "Kontak - Bintang Terang Makmur";
$description = "Hubungi Bintang Terang Makmur untuk informasi lebih lanjut.";
include 'includes/header.php';
?>

<style>
/* Gaya khusus untuk halaman Kontak */
.page-header {
    background: linear-gradient(135deg, #004aad, #0066cc);
    color: white;
    text-align: center;
    padding: 60px 20px;
}

.page-header h2 {
    font-size: 2.5rem;
    margin: 0;
}

.contact-section {
    max-width: 1000px;
    margin: 50px auto;
    padding: 20px;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 30px;
    align-items: start;
}

.contact-info {
    background: #ddd;
    border-radius: 8px;
    padding: 25px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}

.contact-info h3 {
    margin-bottom: 15px;
    color: #004aad;
}

.contact-info p {
    margin: 10px 0;
    font-size: 1rem;
}

.contact-info a {
    color: #004aad;
    text-decoration: none;
}

.contact-info a:hover {
    text-decoration: underline;
}

.contact-map iframe {
    width: 100%;
    height: 350px;
    border-radius: 8px;
    border: none;
}

@media (max-width: 768px) {
    .contact-section {
        grid-template-columns: 1fr;
    }

    .page-header h2 {
        font-size: 2rem;
    }
}
</style>

<section class="page-header">
    <div class="container">
        <h2>Kontak Kami</h2>
        <p>Hubungi kami untuk pertanyaan, penawaran, atau kerja sama</p>
    </div>
</section>

<section class="contact-section">
    <div class="contact-info">
        <h3>Informasi Kontak</h3>
        <p><strong>Alamat:</strong><br> Jl. Salim Batubara No.91, Kupang Teba, Kec. Teluk Betung Utara, Kota Bandar Lampung, Lampung 35212</p>
        <p><strong>Telepon/WA:</strong><br>
            <a href="https://wa.me/628118060777" target="_blank" rel="noopener noreferrer">+62 811-8060-777</a>
        </p>
        <p><strong>Email:</strong><br>
            <a href="mailto:bintangterangmakmurbtm@gmail.com">bintangterangmakmurbtm@gmail.com</a>
        </p>
        <p><strong>Jam Kerja:</strong><br> Senin - Sabtu, 08:00 - 17:00</p>
    </div>

    <div class="contact-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.8441404205923!2d105.26830037401439!3d-5.4406249542764575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40dbd3c8fb9a9b%3A0x9c0da0bf072b28e3!2sBintang%20Terang%20Makmur%20(%20CV.%20Alumka%20Cipta%20Prima%20-%20Cabang%20Lampung)%20(DISTRIBUTOR%20RESMI%20ACP%20SEVEN%20%26%20MARKS)!5e0!3m2!1sid!2sid!4v1756539108042!5m2!1sid!2sid"
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
