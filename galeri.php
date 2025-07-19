<?php
session_start();
include 'includes/header.php';

// Gallery categories
$categories = [
    'all' => 'Tümü',
    'door' => 'Kapı Göçükleri',
    'roof' => 'Tavan Hasarları',
    'hood' => 'Kaput Göçükleri',
    'fender' => 'Çamurluk Hasarları',
    'hail' => 'Dolu Hasarları'
];
?>

<main>
    <!-- Page Header -->
    <section class="bg-dark text-light py-5 mb-5">
        <div class="container">
            <h1 class="text-center">Galeri</h1>
            <p class="text-center lead">Başarılı onarım örneklerimiz</p>
        </div>
    </section>

    <!-- Gallery Filters -->
    <section class="gallery-filters mb-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="d-flex flex-wrap justify-content-center gap-2">
                        <?php foreach ($categories as $key => $value): ?>
                        <button class="btn <?php echo $key === 'all' ? 'btn-danger' : 'btn-outline-danger'; ?>" 
                                onclick="filterGallery('<?php echo $key; ?>')"
                                data-category="<?php echo $key; ?>">
                            <?php echo $value; ?>
                        </button>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Grid -->
    <section class="gallery-grid">
        <div class="container">
            <div class="row g-4">
                <?php
                // This will be replaced with database content later
                $galleryItems = [
                    [
                        'category' => 'door',
                        'title' => 'Kapı Göçük Onarımı',
                        'before' => 'door-before-1.jpg',
                        'after' => 'door-after-1.jpg'
                    ],
                    [
                        'category' => 'roof',
                        'title' => 'Tavan Dolu Hasarı',
                        'before' => 'roof-before-1.jpg',
                        'after' => 'roof-after-1.jpg'
                    ],
                    // Sample items - will be dynamic from database
                ];

                foreach ($galleryItems as $item): ?>
                <div class="col-lg-4 col-md-6 gallery-item fade-in" data-category="<?php echo $item['category']; ?>">
                    <div class="card shadow h-100">
                        <div class="before-after-container position-relative">
                            <img src="assets/images/gallery/before/<?php echo $item['before']; ?>" 
                                 class="card-img-top" 
                                 alt="<?php echo $item['title']; ?> - Öncesi"
                                 data-src="assets/images/gallery/before/<?php echo $item['before']; ?>">
                            <img src="assets/images/gallery/after/<?php echo $item['after']; ?>" 
                                 class="card-img-top position-absolute top-0 end-0 opacity-0" 
                                 alt="<?php echo $item['title']; ?> - Sonrası"
                                 data-src="assets/images/gallery/after/<?php echo $item['after']; ?>">
                            <div class="before-after-slider position-absolute top-0 end-0 bottom-0 w-50 bg-white opacity-75 cursor-pointer"></div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $item['title']; ?></h5>
                            <p class="card-text">
                                <small class="text-muted">Görmek için fareyi resmin üzerine getirin</small>
                            </p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="cta bg-light py-5 mt-5">
        <div class="container text-center">
            <h2 class="mb-4">Aracınızda Göçük mü Var?</h2>
            <p class="mb-4">Ücretsiz ekspertiz için hemen iletişime geçin</p>
            <a href="iletisim.php" class="btn btn-danger btn-lg">İletişime Geç</a>
        </div>
    </section>
</main>

<!-- Additional Gallery JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Gallery hover effect
    const galleryItems = document.querySelectorAll('.before-after-container');
    
    galleryItems.forEach(item => {
        const beforeImg = item.querySelector('img:first-child');
        const afterImg = item.querySelector('img:last-child');
        const slider = item.querySelector('.before-after-slider');
        
        item.addEventListener('mousemove', (e) => {
            const rect = item.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const percentage = (x / rect.width) * 100;
            
            if (percentage >= 0 && percentage <= 100) {
                afterImg.style.opacity = percentage / 100;
                slider.style.width = `${100 - percentage}%`;
            }
        });

        item.addEventListener('mouseleave', () => {
            afterImg.style.opacity = 0;
            slider.style.width = '50%';
        });
    });

    // Filter buttons active state
    const filterButtons = document.querySelectorAll('.gallery-filters button');
    
    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            filterButtons.forEach(btn => btn.classList.remove('btn-danger'));
            button.classList.remove('btn-outline-danger');
            button.classList.add('btn-danger');
        });
    });
});
</script>

<?php include 'includes/footer.php'; ?>