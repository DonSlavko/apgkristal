@extends('layouts.app', ['landing' => false])

@section('content')
    <section class="inner-page-zic-sud">
        <div class="hero-container" data-aos-delay="100">

        </div>
    </section><!-- End Hero Section -->

    <main id="main">

        <!-- ======= Breadcrumbs Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>ŽICA ZA SUDOVE</h2>
                    <ol>
                        <li><a href="/">Početna</a></li>
                        <li><a href="/#portfolio">Proizvodi</a></li>
                        <li>Žica za sudove</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs Section -->

        <section class="portfolio-details">
            <div class="container">
                <div class="portfolio-description">
                    <p>
                        Žice za čišćenje i održavanja posuđa, izrađene od kvalitetnog inox materijala.
                        Posebno dizajnirane za skidanje najtvrdokornijih naslaga. Odlikuju se svojim visokim
                        kvalitetom, i dugovečnosti.
                        Da, proizvođači smo i najvalitetnijih žica za sudove na tržištu. Vaš KRISTAL misli na vas.
                    </p>
                </div>

                <div class="portfolio-details-container">
                    <div class="owl-carousel portfolio-details-carousel">
                        <a href="/assets/img/proizvodi/zica/zica_za_sudove_mala.webp"
                           data-gall="portfolioGallery" class="venobox preview-link">
                            <img src="/assets/img/proizvodi/zica/zica_za_sudove_mala.webp"
                                 class="img-fluid" alt="Zica za sudove">
                        </a>
                        <a href="/assets/img/proizvodi/zica/zica_za_sudove_velika.webp"
                           data-gall="portfolioGallery" class="venobox preview-link">
                            <img src="/assets/img/proizvodi/zica/zica_za_sudove_velika.webp"
                                 class="img-fluid" alt="Zica za sudove">
                        </a>
                        <a href="/assets/img/proizvodi/zica/zica_za_sudove_gratis.webp"
                           data-gall="portfolioGallery" class="venobox preview-link">
                            <img src="/assets/img/proizvodi/zica/zica_za_sudove_gratis.webp"
                                 class="img-fluid" alt="Zica za sudove">
                        </a>
                        <a href="/assets/img/proizvodi/zica/zica_za_sudove_sve.webp"
                           data-gall="portfolioGallery" class="venobox preview-link">
                            <img src="/assets/img/proizvodi/zica/zica_za_sudove_sve.webp"
                                 class="img-fluid" alt="Zica za sudove">
                        </a>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->

@endsection
