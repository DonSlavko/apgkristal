@extends('layouts.app', ['landing' => false])

@section('content')
    <section class="inner-page-pvc-foil">
        <div class="hero-container" data-aos-delay="100">

        </div>
    </section><!-- End Hero Section -->

    <main id="main">

        <!-- ======= Breadcrumbs Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>PVC FOLIJA</h2>
                    <ol>
                        <li><a href="/">Početna</a></li>
                        <li><a href="/#portfolio">Proizvodi</a></li>
                        <li>PVC folija</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs Section -->

        <section class="portfolio-details">
            <div class="container">
                <div class="portfolio-description">
                    <p>
                        PVC folije se dobijaju kalendrisanjem ili ekstrudiranjem.
                        Odlikuju se izuzetnom transparentnošću, visokim sjajem i ravnom površinom.
                        Na njima se može štampati bilo kojom tehnologijom pa se zbog toga često koriste za izradu
                        reklama. Zahvaljujući svojoj otpornosti na hemikalije, veoma lakom oblikovanju zagrevanjem,
                        presovanjem i jednostavnoj mehaničkoj obradi veoma često se koriste u proizvodnji pakovanja i
                        ambalaže.
                    </p>
                </div>

                <div class="portfolio-details-container">
                    <div class="owl-carousel portfolio-details-carousel">
                        <a href="/assets/img/proizvodi/pvc/pvc_folija_var1.webp"
                           data-gall="portfolioGallery" class="venobox preview-link">
                            <img src="/assets/img/proizvodi/pvc/pvc_folija_var1.webp"
                                 class="img-fluid" alt="Pvc folija">
                        </a>
                        <a href="/assets/img/proizvodi/pvc/pvc_folija_var2.webp"
                           data-gall="portfolioGallery" class="venobox preview-link">
                            <img src="/assets/img/proizvodi/pvc/pvc_folija_var2.webp"
                                 class="img-fluid" alt="Pvc folija">
                        </a>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->

@endsection
