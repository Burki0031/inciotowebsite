<?php
include 'includes/header.php';
?>

<main>
    <!-- Page Header -->
    <section class="bg-dark text-light py-5 mb-5">
        <div class="container">
            <h1 class="text-center">İletişim</h1>
            <p class="text-center lead">Bize ulaşın, yardımcı olalım</p>
        </div>
    </section>

    <!-- Contact Information -->
    <section class="contact-info mb-5">
        <div class="container">
            <div class="row g-4">
                <!-- Phone -->
                <div class="col-md-4 fade-in">
                    <div class="card h-100 border-0 shadow text-center">
                        <div class="card-body">
                            <i class="fas fa-phone fa-3x text-danger mb-3"></i>
                            <h3>Telefon</h3>
                            <p class="mb-0">
                                <a href="tel:+905XXXXXXXXX" class="text-dark text-decoration-none">
                                    +90 5XX XXX XX XX
                                </a>
                            </p>
                            <p class="text-muted">
                                Pazartesi - Cumartesi: 09:00 - 19:00
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Social Media -->
                <div class="col-md-4 fade-in">
                    <div class="card h-100 border-0 shadow text-center">
                        <div class="card-body">
                            <i class="fab fa-instagram fa-3x text-danger mb-3"></i>
                            <h3>Sosyal Medya</h3>
                            <p class="mb-0">
                                <a href="https://instagram.com/incioto" target="_blank" class="text-dark text-decoration-none">
                                    @incioto
                                </a>
                            </p>
                            <p class="text-muted">
                                En güncel bilgiler için takip edin
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Address -->
                <div class="col-md-4 fade-in">
                    <div class="card h-100 border-0 shadow text-center">
                        <div class="card-body">
                            <i class="fas fa-map-marker-alt fa-3x text-danger mb-3"></i>
                            <h3>Adres</h3>
                            <p class="mb-0">[Adres satırı 1]</p>
                            <p class="mb-0">[Adres satırı 2]</p>
                            <p class="text-muted">
                                [İlçe/Şehir]
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section mb-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="map-container shadow rounded overflow-hidden" style="height: 450px;">
                        <!-- Replace src with actual Google Maps embed URL -->
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=REPLACE_WITH_ACTUAL_EMBED_URL"
                            width="100%" 
                            height="100%" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Additional Info -->
    <section class="additional-info bg-light py-5">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <h2 class="mb-4">Ücretsiz Ekspertiz</h2>
                    <p class="lead mb-4">
                        Aracınızdaki hasarı değerlendirmek için ücretsiz ekspertiz hizmetimizden yararlanın. 
                        Size en uygun çözümü ve fiyat teklifini sunalım.
                    </p>
                    <div class="d-flex justify-content-center gap-3">
                        <a href="https://wa.me/905XXXXXXXXX" class="btn btn-success btn-lg" target="_blank">
                            <i class="fab fa-whatsapp me-2"></i>WhatsApp
                        </a>
                        <a href="tel:+905XXXXXXXXX" class="btn btn-danger btn-lg">
                            <i class="fas fa-phone me-2"></i>Hemen Ara
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Business Hours -->
    <section class="business-hours py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h3 class="mb-4">Çalışma Saatleri</h3>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td>Pazartesi - Cuma</td>
                                    <td>09:00 - 19:00</td>
                                </tr>
                                <tr>
                                    <td>Cumartesi</td>
                                    <td>09:00 - 17:00</td>
                                </tr>
                                <tr>
                                    <td>Pazar</td>
                                    <td>Kapalı</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="text-muted mt-3">
                        Randevu almanızı öneririz. Acil durumlar için bizi arayabilirsiniz.
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>