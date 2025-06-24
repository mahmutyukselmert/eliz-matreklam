<section class="hero-video-slider">
    <div class="video-slider-container">
        <div class="video-slides">

            <!-- Video Item not: data-duration değeri videonun ekranda kalacağı süre bunu back-end üzerinden ayarlayınız() -->

            <?php if (isMobileDevice()) { ?>
            <div class="video-slide" data-video="MobilePart01.mp4" data-duration="15">
                <video class="hero-video" muted autoplay>
                    <source src="./assets/media/MobilePart01.mp4" type="video/mp4">
                </video>
                <div class="video-overlay">
                    <div class="hero-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h1 class="hero-title">MAT Reklam</h1>
                                    <p class="hero-subtitle">Profesyonel reklam ve tanıtım materyalleriyle markanızı öne
                                        çıkarın</p>
                                    <div class="hero-buttons">
                                        <a href="#services" class="btn btn-primary hero-btn">Hizmetlerimiz</a>
                                        <a href="#contact" class="btn btn-outline-light hero-btn">İletişim</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="video-slide" data-video="MobilePart02.mp4" data-duration="15">
                <video class="hero-video" muted autoplay>
                    <source src="./assets/media/MobilePart02.mp4" type="video/mp4">
                </video>
                <div class="video-overlay">
                    <div class="hero-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h1 class="hero-title">MAT Reklam</h1>
                                    <p class="hero-subtitle">Profesyonel reklam ve tanıtım materyalleriyle markanızı öne
                                        çıkarın</p>
                                    <div class="hero-buttons">
                                        <a href="#services" class="btn btn-primary hero-btn">Hizmetlerimiz</a>
                                        <a href="#contact" class="btn btn-outline-light hero-btn">İletişim</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="video-slide" data-video="MobilePart03.mp4" data-duration="15">
                <video class="hero-video" muted autoplay>
                    <source src="./assets/media/MobilePart03.mp4" type="video/mp4">
                </video>
                <div class="video-overlay">
                    <div class="hero-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h1 class="hero-title">MAT Reklam</h1>
                                    <p class="hero-subtitle">Profesyonel reklam ve tanıtım materyalleriyle markanızı öne
                                        çıkarın</p>
                                    <div class="hero-buttons">
                                        <a href="#services" class="btn btn-primary hero-btn">Hizmetlerimiz</a>
                                        <a href="#contact" class="btn btn-outline-light hero-btn">İletişim</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>

            <?php if (!isMobileDevice()) { ?>
            <div class="video-slide active" data-video="BigShopSmall.mp4" data-duration="15">
                <video class="hero-video" muted>
                    <source src="./assets/media/BigShopSmall.mp4" type="video/mp4">
                </video>
                <div class="video-overlay dark-overlay">
                    <div class="hero-content">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-12 text-center">
                                    <h1 class="hero-title">MAT Reklam</h1>
                                    <p class="hero-subtitle">Profesyonel reklam ve tanıtım materyalleriyle markanızı öne
                                        çıkarın</p>
                                    <div class="hero-buttons">
                                        <a href="#services" class="btn btn-primary hero-btn">Hizmetlerimiz</a>
                                        <a href="#contact" class="btn btn-outline-light hero-btn">İletişim</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="video-slide" data-video="OfficeSmall.mp4" data-duration="15">
                <video class="hero-video" muted>
                    <source src="./assets/media/OfficeSmall.mp4" type="video/mp4">
                </video>
                <div class="video-overlay dark-overlay">
                    <div class="hero-content">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-12 text-center">
                                    <h1 class="hero-title">Ofis Çözümleri</h1>
                                    <p class="hero-subtitle">Kurumsal kimliğinizi güçlendiren profesyonel baskı
                                        hizmetleri</p>
                                    <div class="hero-buttons">
                                        <a href="#services" class="btn btn-primary hero-btn">Hizmetlerimiz</a>
                                        <a href="#contact" class="btn btn-outline-light hero-btn">İletişim</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="video-slide" data-video="WEBVideoPart01.mp4" data-duration="20">
                <video class="hero-video" muted>
                    <source src="./assets/media/WEBVideoPart01.mp4" type="video/mp4">
                </video>
                <div class="video-overlay dark-overlay">
                    <div class="hero-content">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-12 text-center">
                                    <h1 class="hero-title">Dijital Çözümler</h1>
                                    <p class="hero-subtitle">Web tasarımından dijital reklama kadar tüm ihtiyaçlarınız
                                    </p>
                                    <div class="hero-buttons">
                                        <a href="#services" class="btn btn-primary hero-btn">Hizmetlerimiz</a>
                                        <a href="#contact" class="btn btn-outline-light hero-btn">İletişim</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="video-slide" data-video="WEBVideoPart02.mp4" data-duration="20">
                <video class="hero-video" muted>
                    <source src="./assets/media/WEBVideoPart02.mp4" type="video/mp4">
                </video>
                <div class="video-overlay dark-overlay">
                    <div class="hero-content">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-12 text-center">
                                    <h1 class="hero-title">Yaratıcı Tasarım</h1>
                                    <p class="hero-subtitle">Markanıza özel yaratıcı ve etkili tasarım çözümleri</p>
                                    <div class="hero-buttons">
                                        <a href="#services" class="btn btn-primary hero-btn">Hizmetlerimiz</a>
                                        <a href="#contact" class="btn btn-outline-light hero-btn">İletişim</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="video-slide" data-video="WEBVideoPart03.mp4" data-duration="20">
                <video class="hero-video" muted>
                    <source src="./assets/media/WEBVideoPart03.mp4" type="video/mp4">
                </video>
                <div class="video-overlay dark-overlay">
                    <div class="hero-content">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-12 text-center">
                                    <h1 class="hero-title">Profesyonel Hizmet</h1>
                                    <p class="hero-subtitle">15 yıllık deneyimimizle size en iyi hizmeti sunuyoruz</p>
                                    <div class="hero-buttons">
                                        <a href="#services" class="btn btn-primary hero-btn">Hizmetlerimiz</a>
                                        <a href="#contact" class="btn btn-outline-light hero-btn">İletişim</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Dark videos -->
            <div class="video-slide" data-video="BigShopSmallDARK.mp4" data-duration="15">
                <video class="hero-video" muted>
                    <source src="./assets/media/BigShopSmallDARK.mp4" type="video/mp4">
                </video>
                <div class="video-overlay dark-overlay">
                    <div class="hero-content">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-12 text-center">
                                    <h1 class="hero-title">Premium Mağaza Çözümleri</h1>
                                    <p class="hero-subtitle">Lüks ve şık tasarımlarla markanıza değer katın</p>
                                    <div class="hero-buttons">
                                        <a href="#services" class="btn btn-primary hero-btn">Hizmetlerimiz</a>
                                        <a href="#contact" class="btn btn-outline-light hero-btn">İletişim</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="video-slide" data-video="OfficeSmallDARK.mp4" data-duration="15">
                <video class="hero-video" muted>
                    <source src="./assets/media/OfficeSmallDARK.mp4" type="video/mp4">
                </video>
                <div class="video-overlay dark-overlay">
                    <div class="hero-content">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-12 text-center">
                                    <h1 class="hero-title">Elit Ofis Çözümleri</h1>
                                    <p class="hero-subtitle">Prestijli kurumsal kimlik materyalleri</p>
                                    <div class="hero-buttons">
                                        <a href="#services" class="btn btn-primary hero-btn">Hizmetlerimiz</a>
                                        <a href="#contact" class="btn btn-outline-light hero-btn">İletişim</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="video-slide" data-video="WEBVideoPart01DARK.mp4" data-duration="20">
                <video class="hero-video" muted>
                    <source src="./assets/media/WEBVideoPart01DARK.mp4" type="video/mp4">
                </video>
                <div class="video-overlay dark-overlay">
                    <div class="hero-content">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-12 text-center">
                                    <h1 class="hero-title">Premium Dijital Çözümler</h1>
                                    <p class="hero-subtitle">Gelişmiş teknoloji ile modern tasarım</p>
                                    <div class="hero-buttons">
                                        <a href="#services" class="btn btn-primary hero-btn">Hizmetlerimiz</a>
                                        <a href="#contact" class="btn btn-outline-light hero-btn">İletişim</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="video-slide" data-video="WEBVideoPart02DARK.mp4" data-duration="20">
                <video class="hero-video" muted>
                    <source src="./assets/media/WEBVideoPart02DARK.mp4" type="video/mp4">
                </video>
                <div class="video-overlay dark-overlay">
                    <div class="hero-content">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-12 text-center">
                                    <h1 class="hero-title">Sanatsal Tasarım</h1>
                                    <p class="hero-subtitle">Estetik ve işlevselliği birleştiren çözümler</p>
                                    <div class="hero-buttons">
                                        <a href="#services" class="btn btn-primary hero-btn">Hizmetlerimiz</a>
                                        <a href="#contact" class="btn btn-outline-light hero-btn">İletişim</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="video-slide" data-video="WEBVideoPart03DARK.mp4" data-duration="20">
                <video class="hero-video" muted>
                    <source src="./assets/media/WEBVideoPart03DARK.mp4" type="video/mp4">
                </video>
                <div class="video-overlay dark-overlay">
                    <div class="hero-content">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-12 text-center">
                                    <h1 class="hero-title">Mükemmel Hizmet</h1>
                                    <p class="hero-subtitle">Size özel çözümlerle fark yaratıyoruz</p>
                                    <div class="hero-buttons">
                                        <a href="#services" class="btn btn-primary hero-btn">Hizmetlerimiz</a>
                                        <a href="#contact" class="btn btn-outline-light hero-btn">İletişim</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } //Masaüstü videoları ?>

        </div>

        <!-- Slider Controls -->
        <div class="slider-controls">
            <button class="control-btn prev-btn" id="heroPrevBtn" aria-label="Önceki Slayt">
                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                    viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m15 19-7-7 7-7" />
                </svg>
            </button>
            <button class="control-btn next-btn" id="heroNextBtn" aria-label="Sonraki Slayt">
                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                    viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m9 5 7 7-7 7" />
                </svg>
            </button>
        </div>

        <!-- Slider Indicators -->
        <div class="slider-indicators">
            <?php if (isMobileDevice()) { ?>
            <div class="indicator active" data-slide="0"></div>
            <div class="indicator" data-slide="1"></div>
            <div class="indicator" data-slide="2"></div>
            <?php } else { ?>
            <div class="indicator active" data-slide="0"></div>
            <div class="indicator" data-slide="1"></div>
            <div class="indicator" data-slide="2"></div>
            <div class="indicator" data-slide="3"></div>
            <div class="indicator" data-slide="4"></div>
            <div class="indicator" data-slide="5"></div>
            <div class="indicator" data-slide="6"></div>
            <div class="indicator" data-slide="7"></div>
            <div class="indicator" data-slide="8"></div>
            <div class="indicator" data-slide="9"></div>
            <?php } ?>
        </div>

        <!-- Loading Progress -->
        <div class="video-progress">
            <div class="progress-bar"></div>
        </div>
    </div>
</section>

<!-- Video Tooltip -->
<div class="video-tooltip hidden" id="videoTooltip">
    Videoyu başlatmak için tıklayın
</div>