<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-SVVZQYMVME"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-SVVZQYMVME');
    </script>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>
    <meta
        content="Mencari Perusahaan Konstruksi yang andal dengan pengalaman luas untuk proyek Anda berikutnya? Di Wase Intan Perdana, kami mendukung keunggulan pekerjaan kami dan memberikan perhatian khusus kepada klien berdasarkan kebutuhan spesifik mereka. Jika Anda mencari Perencanaan Konstruksi profesional, silakan hubungi untuk konsultasi Anda."
        name="description">
    <meta
        content="wascons, jasakontraktortangerang, jasakontraktorjakarta, jasakontruksitangerang, jasabangunrumah, jasarenovasirumah, jasakontraktorgreenlakecity, jasakontraktorvillameruya, pemborongtangerang, pemborongkarangtengah, kontraktorkarangtengah, jasarenovasi, jasarenovasirumah, jasarenovasibangunan"
        name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon_2.jpeg') }}" rel="icon">
    <link href="{{ asset('assets/img/favicon_2.jpeg') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
</head>

<body>
    @include('web.components.top-bar')

    @include('web.components.header')

    <main id="main">
        @yield('contents')
    </main>

    @include('web.components.footer')

    @include('web.components.script')

</body>

</html>
