@extends('layouts.app', ['landing' => false])

@section('content')
    <section class="inner-page-pap-tab">
        <div class="hero-container" data-aos-delay="100">

        </div>
    </section><!-- End Hero Section -->

    <main id="main">

        <!-- ======= Breadcrumbs Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>PAPIR U TABACIMA</h2>
                    <ol>
                        <li><a href="/">Početna</a></li>
                        <li><a href="/#portfolio">Proizvodi</a></li>
                        <li>Papir u tabacima</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs Section -->

        <section class="portfolio-details">
            <div class="container">
                <div class="portfolio-description">
                    <p>
                        Pored našeg velikog izbora proizvoda iz našeg asortimana
                        naravno nalazi se i papir u tabacima, veličine 40cm x 60cm.
                    </p>
                </div>

                <div class="portfolio-details-container">
                    <div class="owl-carousel portfolio-details-carousel">
                        <img src="/assets/img/proizvodi/tabaci/papir_1.webp" class="img-fluid" alt="papir u tabacima">
                        <img src="/assets/img/proizvodi/tabaci/papir_2.webp" class="img-fluid" alt="papir u tabacima">
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->

@endsection
