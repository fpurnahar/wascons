@extends('web.layouts.index')

@section('title', 'wase-ip')

@section('contents')

    @include('web.components.hero-section')

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">
            @foreach ($aboute as $row)
                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
                        <div class="card">
                            <img src="{{ $row->image }}" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
                        <h3>{{ $row->title }}</h3>
                        <p>
                            {{ $row->description }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </section><!-- End About Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
        <div class="container" data-aos="zoom-in">
            <div class="section-title">
                <span>Our Client</span>
                <h2>Our Client</h2>
            </div>
            <div class="row d-flex align-items-center">
                @foreach ($clients_banner as $item)
                    <div class="col-lg-2 col-md-4 col-6">
                        <img src="{{ $item->image }}" class="img-fluid" alt="">
                    </div>
                @endforeach
            </div>
        </div>
    </section><!-- End Clients Section -->

    <!-- ======= layanan Section ======= -->
    <section id="Pricelist" class="services">
        <div class="container">
            <div class="section-title">
                <span>Paket Harga Jasa Kontraktor</span>
                <h2>Paket Harga Jasa Kontraktor</h2>
            </div>
            <div class="row">
                @foreach ($layanan as $item)
                    <div class="col-lg-6 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="150">
                        <div class="icon-box">
                            <img src="{{ $item->image }}" class="card-img-top" alt="...">
                            <h4 class="mt-3"><a href="">{{ $item->title }}</a></h4>
                            <p>{{ $item->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section><!-- End layanan Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">
            <div class="section-title">
                <span>Services</span>
                <h2>Services</h2>
            </div>
            <div class="row">
                @foreach ($services as $item)
                    <div class="col-lg-4 col-md-6 mt-4 d-flex align-items-stretch" data-aos="fade-up">
                        <div class="icon-box">
                            <div class="icon">@php echo $item->icon; @endphp</div>
                            <h4><a href="">{{ $item->title }}</a></h4>
                            <p>
                                {{ $item->description }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
        <div class="container" data-aos="zoom-in">
            <div class="text-center">
                <h3>Konsultasi Melalui Whatsapp</h3>
                <!--<p> Sejak masuk ke industri konstruksi pada tahun 2016, Wase Intan Perdana telah diakui sebagai Perusahaan-->
                <!--    Konstruksi yang paling dapat diandalkan di Kota Tangerang Selatan. Kami telah menyediakan klien dengan-->
                <!--    berbagai layanan untuk semua kebutuhan mereka. Apa pun yang Anda pikirkan, para profesional kami bekerja-->
                <!--    untuk mewujudkan impian Anda. Hubungi kami untuk konsultasi.</p>-->
                <a class="btn btn-danger" href="https://api.whatsapp.com/send?phone=6282111747520&text=Hallo"
                    target="_blank"><i class="bi bi-whatsapp"></i> Konsultasi Sekarang</a>
            </div>

        </div>
    </section><!-- End Cta Section -->

    <!-- ======= Services Section ======= -->
    <section id="portfolio" class="services">
        <div class="container">
            <div class="section-title">
                <span>Portfolio</span>
                <h2>Portfolio</h2>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach ($portfolio as $item)
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="{{ $item->image }}" class="bd-placeholder-img card-img-top" width="100%"
                                height="225" alt="">
                            <div class="card-body">
                                <p class="card-text">{{ $item->title }}</p>
                                <p class="card-text">{{ $item->client }}</p>
                                <p class="card-text">{{ substr_replace($item->description, '...', 100) }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="{{ route('portfolio.detail', $item) }}"
                                            class="btn btn-sm btn-danger">View</a>
                                    </div>
                                    <small class="text-muted">{{ $item->project_date }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-sm-12 mt-5">
                {{ $portfolio->links('web.pagination.bootstrap-4') }}
            </div>
        </div>
    </section><!-- End Services Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <span>Contact</span>
                <h2>Contact</h2>
            </div>

            <div class="row" data-aos="fade-up">
                @foreach ($information_company as $item)
                    <div class="col-lg-6">
                        <div class="info-box mb-4">
                            <i class="bx bx-map"></i>
                            <h3>Alamat</h3>
                            <p>{{ $item->company_address }}</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-envelope"></i>
                            <h3>Email Us</h3>
                            <p>{{ $item->company_email }}</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-phone-call"></i>
                            <h3>Call Us</h3>
                            <p>{{ $item->company_number_phone }}</p>
                        </div>
                    </div>

            </div>
            <div class="row" data-aos="fade-up">
                <div class="col-lg-6">
                    <iframe class="mb-4 mb-lg-0"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31730.803290270367!2d106.69985781813482!3d-6.217436711944977!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f9f8cd70e77f%3A0x6e2ae82ef1715822!2sPT%20WASE%20INTAN%20PERDANA!5e0!3m2!1sid!2sid!4v1634470975760!5m2!1sid!2sid"
                        frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                </div>
                <div class="col-lg-6">
                    <form action="{{ route('catalog.download') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                    required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                                    required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="number" class="form-control" name="number_phone" id="number_phone"
                                placeholder="Your Phone Number" required>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="messaga" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <div class="my-3">
                            {{-- <div class="loading">Loading</div> --}}
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            {{-- <div class="sent-message">Your message has been sent. Thank you!</div> --}}
                        </div>
                        <button class="btn btn-danger col-12" type="submit"
                            onclick="window.open('{{ route('catalog.download') }}')">Download
                            Catalog</button>
                    </form>
                </div>
            </div>
            @endforeach

        </div>
    </section><!-- End Contact Section -->

@endsection
