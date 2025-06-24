<?php require_once 'init.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MatReklam</title>
    <?php include 'include/head.html'; ?>
    
    <!-- Swiper CSS - Blog Detay ve Hizmet Detay -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

</head>

<body>
    <?php include 'include/header.html'; ?>

    <main class="sub-page">
        <section class="hero-section blog-page blog-page-detail">
            <div class="container-fluid">
                <div class="row col-lg-10 offset-lg-1 justify-content-center align-items-center mb-5">
                    <h1 class="text-center">Reklam ve Tanıtım Materyalleri</h1>
                </div>
            </div>
        </section>

        <section class="blog-section blog-page scroll-reveal-top" id="services">

            <div class="blog-page-detail row col-xl-10 col-lg-10 col-md-10 col-12 gy-4 gx-5">
                <div class="col-lg-4 p-lg-0">
                    <div class="swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <img src="./assets/images/ReklamveTanitim-Materyalleri.webp" class="img-fluid" alt="Vinil (Branda) Baskılar">
                            </div>
                            <div class="swiper-slide">
                                <img src="./assets/images/vinil_branda_baskilar.webp" class="img-fluid" alt="Vinil (Branda) Baskılar">
                            </div>
                            <div class="swiper-slide">
                                <img src="./assets/images/arac_giydirme.webp" class="img-fluid" alt="Araç Giydirme">
                            </div>
                        </div>
                        <!-- If we need pagination -->
                        <div class="swiper-pagination"></div>
                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                        <!-- If we need scrollbar -->
                        <div class="swiper-scrollbar"></div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card-body text-white">
                        <p>Profesyonelce hazırlanmış reklam ve tanıtım materyalleriyle, markanızın kurumsal duruşunu en etkili şekilde yansıtıyoruz.</p>
                        <p>En yaygın kullanılan dış mekan baskı türüdür. Dayanıklı, ekonomik ve büyük ebatlı uygulamalara uygundur. Bina cepheleri, etkinlik alanları ve geçici kampanya duyuruları için idealdir.</p>
                        <p>En yaygın kullanılan dış mekan baskı türüdür. Dayanıklı, ekonomik ve büyük ebatlı uygulamalara uygundur. Bina cepheleri, etkinlik alanları ve geçici kampanya duyuruları için idealdir.</p>
                        <p>En yaygın kullanılan dış mekan baskı türüdür. Dayanıklı, ekonomik ve büyük ebatlı uygulamalara uygundur. Bina cepheleri, etkinlik alanları ve geçici kampanya duyuruları için idealdir.</p>
                        <p>En yaygın kullanılan dış mekan baskı türüdür. Dayanıklı, ekonomik ve büyük ebatlı uygulamalara uygundur. Bina cepheleri, etkinlik alanları ve geçici kampanya duyuruları için idealdir.</p>
                        <p>En yaygın kullanılan dış mekan baskı türüdür. Dayanıklı, ekonomik ve büyük ebatlı uygulamalara uygundur. Bina cepheleri, etkinlik alanları ve geçici kampanya duyuruları için idealdir.</p>
                    </div>
                </div>
            </div>

        </section>

    </main>

    <?php include 'include/footer.html'; ?>

    <!-- Swiper JS - Blog Detay -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            slidesPerView: 1,
            spaceBetween: 10,
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            speed: 500,
            effect: 'coverflow',
            pagination: {
                el: '.swiper-pagination',
                clickable: true,    
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        }); 
    </script>

</body>

</html>