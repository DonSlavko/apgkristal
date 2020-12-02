@extends('layouts.app', ['landing' => false])

@section('content')
    <section class="inner-page-pap-pec">
        <div class="hero-container" data-aos-delay="100">

        </div>
    </section><!-- End Hero Section -->

    <main id="main">

        <!-- ======= Breadcrumbs Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>PAPIR ZA PEČENJE</h2>
                    <ol>
                        <li><a href="/">Početna</a></li>
                        <li><a href="/#portfolio">Proizvodi</a></li>
                        <li>Papir za pečenje</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs Section -->

        <section class="portfolio-details">
            <div class="container">
                <div class="portfolio-description">
                    <p>
                        Papir za pečenje je vrlo praktična stvar, njegova je glavna svrha zaštititi posudje od paljenja i
                        pomoći domaćici da brže rešava kuhinjske poslove. Svrha papira za pečenje je sprečiti da se
                        proizvod lepi za lim za pečenje kako bi se sprečilo
                        da gori. Takođe štiti od izgaranja u slučaju izlivanja punjenja. Pećnica prilikom
                        spremanja hrane, ostaju čiste a hrana se ne lepi.

                    </p>
                </div>

                <div class="portfolio-details-container">
                    <div class="owl-carousel portfolio-details-carousel">
                        <a href="/assets/img/proizvodi/papir_za_pecenje/papir_za_pecenje_8m_var1.webp"
                           data-gall="portfolioGallery" class="venobox preview-link">
                            <img src="/assets/img/proizvodi/papir_za_pecenje/papir_za_pecenje_8m_var1.webp"
                                 class="img-fluid" alt="Papir za pecenje">
                        </a>
                        <a href="/assets/img/proizvodi/papir_za_pecenje/papir_za_pecenje_8m_var2.webp"
                           data-gall="portfolioGallery" class="venobox preview-link">
                            <img src="/assets/img/proizvodi/papir_za_pecenje/papir_za_pecenje_8m_var2.webp"
                                 class="img-fluid" alt="Papir za pecenje">
                        </a>
                        <a href="/assets/img/proizvodi/papir_za_pecenje/papir_za_pecenje_8m_var3.webp"
                           data-gall="portfolioGallery" class="venobox preview-link">
                            <img src="/assets/img/proizvodi/papir_za_pecenje/papir_za_pecenje_8m_var3.webp"
                                 class="img-fluid" alt="Papir za pecenje">
                        </a>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->

@endsection
