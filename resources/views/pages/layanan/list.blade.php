@extends('layouts.app')

@section('title', 'Layanan')

@section('dashboard')
    <section class="content">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    @foreach ($layanan as $layanan)
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col">
                                        <h5>@yield('title')</h5>
                                    </div>
                                    <div class="col">
                                        <a href="{{ route('edit.layanan', $layanan) }}"
                                            class="btn btn-sm btn-success float-right"><i class="far fa-edit"></i>
                                            Edit @yield('title')</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row g-0">
                                    <div class="col-sm-4">
                                        <div class="position-relative">
                                            <img src="{{ $layanan->image }}" alt="Photo 1" class="img-fluid">
                                            <div class="ribbon-wrapper ribbon-lg">
                                                <div class="ribbon bg-success text-lg">
                                                    LOGO
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <p class="text-md-start"><i
                                                    class="far fa-building"></i>&nbsp;&nbsp;&nbsp;{{ $layanan->title }}
                                            </p>
                                            <p class="text-md-start">{{ $layanan->description }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <p class="text-muted">last Update {{ $layanan->updated_at }}</p>
                            </div>
                        </div>
                    @endforeach
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
@endsection
