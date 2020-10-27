@extends('layouts.app', ['landing' => false])

@section('content')
    <section class="inner-page">
        <div class="hero-container" data-aos-delay="100">

        </div>
    </section><!-- End Hero Section -->

    <main id="main">

        <!-- ======= Breadcrumbs Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Inner Page</h2>
                    <ol>
                        <li><a href="/">Pocetna</a></li>
                        <li>Example Page</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs Section -->

        <section class="inner-page pt-4">
            <div class="container">
                <p>
                    Example inner page template
                </p>
            </div>
        </section>

    </main><!-- End #main -->

@endsection
