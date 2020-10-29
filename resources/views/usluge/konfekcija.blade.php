@extends('layouts.app', ['landing' => false])

@section('content')
    <section class="inner-page-konf">
        <div class="hero-container" data-aos-delay="100">

        </div>
    </section><!-- End Hero Section -->

    <main id="main">

        <!-- ======= Breadcrumbs Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>KONFEKCIJA</h2>
                    <ol>
                        <li><a href="/">Početna</a></li>
                        <li><a href="/#services">Usluge</a></li>
                        <li>Konfekcija</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs Section -->

        <section class="portfolio-details">
            <div class="container">
                <div class="portfolio-description">
                    <p>
                        U konfekciju spadaju naši mnogobrojni zadovoljni potrošači koji obožavaju naš proizvod samo
                        manjih metraža.
                        KRISTAL se trudi da ste zadovoljni i da je uvek dostupan i uvek sa vama.
                    </p>
                </div>

                <div class="portfolio-details-container">
                    <div class="owl-carousel portfolio-details-carousel">
                        <img src="/assets/img/usluge/konfekcija/konf_1.webp" class="img-fluid" alt="konfekcija">
                        <img src="/assets/img/usluge/konfekcija/konf_2.webp" class="img-fluid" alt="konfekcija">
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->

@endsection
