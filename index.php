<?php
session_start();
include 'includes/header.php';
?>

<main>
    <!-- Hero Carousel -->
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/images/placeholder.jpg" class="d-block w-100" alt="Araç Göçük Tamiri">
                <div class="carousel-caption">
                    <h1>İnci Oto Göçük Tamiri</h1>
                    <p>Profesyonel boyasız göçük düzeltme hizmeti</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Why Choose Us Section -->
    <section class="why-choose-us py-5">
        <div class="container">
            <h2 class="text-center mb-5">Neden Bizi Seçmelisiniz?</h2>
            <div class="row">
                <div class="col-md-3 text-center">
                    <i class="fas fa-tools fa-3x mb-3"></i>
                    <h3>Uzmanlık</h3>
                    <p>10+ yıllık deneyim</p>
                </div>
                <div class="col-md-3 text-center">
                    <i class="fas fa-clock fa-3x mb-3"></i>
                    <h3>Hızlı Servis</h3>
                    <p>Aynı gün teslimat</p>
                </div>
                <div class="col-md-3 text-center">
                    <i class="fas fa-shield-alt fa-3x mb-3"></i>
                    <h3>Garanti</h3>
                    <p>%100 müşteri memnuniyeti</p>
                </div>
                <div class="col-md-3 text-center">
                    <i class="fas fa-star fa-3x mb-3"></i>
                    <h3>Kalite</h3>
                    <p>En iyi sonuç garantisi</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="process bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-5">Nasıl Çalışıyoruz?</h2>
            <div class="row">
                <div class="col-md-4 text-center">
                    <i class="fas fa-car fa-3x mb-3"></i>
                    <h3>1. Aracınızı Getirin</h3>
                    <p>Ücretsiz ekspertiz için bizi ziyaret edin</p>
                </div>
                <div class="col-md-4 text-center">
                    <i class="fas fa-search fa-3x mb-3"></i>
                    <h3>2. Hasar Tespiti</h3>
                    <p>Detaylı inceleme ve fiyat teklifi</p>
                </div>
                <div class="col-md-4 text-center">
                    <i class="fas fa-check-circle fa-3x mb-3"></i>
                    <h3>3. Onarım ve Teslim</h3>
                    <p>Profesyonel onarım ve zamanında teslim</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center">
                    <div class="counter" data-count="500">0</div>
                    <h3>Başarılı Onarım</h3>
                </div>
                <div class="col-md-4 text-center">
                    <div class="counter" data-count="10">0</div>
                    <h3>Yıllık Deneyim</h3>
                </div>
                <div class="col-md-4 text-center">
                    <div class="counter" data-count="98">0</div>
                    <h3>Müşteri Memnuniyeti</h3>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- WhatsApp Button -->
<a href="https://wa.me/your-number" class="whatsapp-button" target="_blank">
    <i class="fab fa-whatsapp"></i>
</a>

<?php include 'includes/footer.php'; ?>