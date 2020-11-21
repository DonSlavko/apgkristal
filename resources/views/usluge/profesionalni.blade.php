@extends('layouts.app', ['landing' => false])

@section('content')
    <section class="inner-page-prof">
        <div class="hero-container" data-aos-delay="100">

        </div>
    </section><!-- End Hero Section -->

    <main id="main">

        <!-- ======= Breadcrumbs Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>PROFESIONALNI KUPCI</h2>
                    <ol>
                        <li><a href="/">Početna</a></li>
                        <li><a href="/#services">Usluge</a></li>
                        <li>Profesionalni kupci</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs Section -->

        <section class="portfolio-details">
            <div class="container">
                <div class="portfolio-description">
                    <p>
                        Zbog potreba tržišta i naših kupaca razvili smo poseban asortiman artikala velikih metraža,
                        većih pakovanja. Potreba naših profesionalnih kupaca je najbitnija i mi smo tu da im budemo
                        maksimalno na usluzi. Veća pakovanja, veća metraža, prilagodljivost i pronalaženje svakog
                        rešenja za naše verne potrošače. ALU POSUDE (300m i 1 KG), ALU FOLIJE (1 KG, 150m),
                        PVC FOLIJA (300m, 1 KG), PAPIR ZA PEČENJE (1 KG) i PAPIR U TABACIMA (40 x 60). Svi navedeni
                        proizvodi su velika pakovanja specijalna za velike profesionalne kupce (Pekare, Restorane,
                        Fast Food-ove...). Naravno, pogledajte naš celokupni asortiman proizvoda koji vam
                        je na raspolaganju jer se dokazujemo svojim kvalitetom kako u Srbiji tako i u regionu.
                        Birajte najbolje, kupujte najkvalitetnije!
                    </p>
                </div>

                <div class="portfolio-details-container">
                    <div class="owl-carousel portfolio-details-carousel">
                        <a href="/assets/img/usluge/profesional/prof_1.webp"
                           data-gall="portfolioGallery" class="venobox preview-link">
                            <img src="/assets/img/usluge/profesional/prof_1.webp"
                                 class="img-fluid" alt="Profesionalni kupci">
                        </a>
                        <a href="/assets/img/usluge/profesional/prof_2.webp"
                           data-gall="portfolioGallery" class="venobox preview-link">
                            <img src="/assets/img/usluge/profesional/prof_2.webp"
                                 class="img-fluid" alt="Profesionalni kupci">
                        </a>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->

@endsection
