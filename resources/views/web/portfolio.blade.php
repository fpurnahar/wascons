@extends('web.layouts.index')
@section('title', 'Portfolio')
@section('contents')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="section-title" data-aos="zoom-in">
            <span>Layanan profesional</span>
            <h2>Layanan profesional</h2>
            <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
        </div>
        <section class="inner-page">
            <div class="container">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    @foreach ($portfolio as $item)
                        <div class="col" data-aos="zoom-in">
                            <div class="card">
                                <img src="{{ $item->image }}" class="card-img-top" style="border-radius:2%" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->title }}</h5>
                                    <p class="card-text">{{ $item->description }}.</p>
                                </div>
                                <div class="card-footer">
                                    <p class="card-text"><small class="text-muted">Last
                                            updated {{ $item->updated_at }}</small></p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col mt-5">
                        <nav aria-label="Page navigation example" data-aos="zoom-in">
                            <ul class="pagination justify-content-center">
                                {{ $portfolio->links('pagination::bootstrap-4') }}
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
    </section><!-- End Breadcrumbs -->
@endsection
