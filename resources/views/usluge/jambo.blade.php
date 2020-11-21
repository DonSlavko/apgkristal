@extends('layouts.app', ['landing' => false])

@section('content')
    <section class="inner-page-jambo">
        <div class="hero-container" data-aos-delay="100">

        </div>
    </section><!-- End Hero Section -->

    <main id="main">

        <!-- ======= Breadcrumbs Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>JAMBO ROLNE</h2>
                    <ol>
                        <li><a href="/">Početna</a></li>
                        <li><a href="/#services">Usluge</a></li>
                        <li>Jambo Rolne</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs Section -->

        <section class="portfolio-details">
            <div class="container">
                <div class="portfolio-description">
                    <p>
                        Svojim potrošačima smo uvek na raspolaganju sa svojim mnogobrojnim proizvodima. Takođe, bavimo
                        se prodajom Jumbo Rolni programa ALU, PVC folije i papira za pečenje, ostalim proizvođačima kako u
                        Srbiji tako i u regionu. Birajte najbolje, kupujte najkvalitetnije. Vaš KRISTAL, uvek na usluzi.
                    </p>
                </div>

                <div class="portfolio-details-container">
                    <div class="owl-carousel portfolio-details-carousel">
                        <a href="/assets/img/usluge/jambo/jambo_alu.webp"
                           data-gall="portfolioGallery" class="venobox preview-link">
                            <img src="/assets/img/usluge/jambo/jambo_alu.webp"
                                 class="img-fluid" alt="Jambo rolna">
                        </a>
                        <a href="/assets/img/usluge/jambo/jambo_strech.webp"
                           data-gall="portfolioGallery" class="venobox preview-link">
                            <img src="/assets/img/usluge/jambo/jambo_strech.webp"
                                 class="img-fluid" alt="Jambo rolna">
                        </a>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->

@endsection
