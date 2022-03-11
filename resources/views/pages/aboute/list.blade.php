@extends('layouts.app')

@section('title', 'Aboute Company')

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
                    @foreach ($about as $about)
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col">
                                        <h5>@yield('title')</h5>
                                    </div>
                                    <div class="col">
                                        <a href="{{ route('edit', $about) }}"
                                            class="btn btn-sm btn-success float-right"><i class="far fa-edit"></i>
                                            Edit Company Information</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row g-0">
                                    <div class="col-sm-4">
                                        <div class="position-relative">
                                            <img src="{{ $about->image }}" alt="Photo 1" class="img-fluid">
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
                                                    class="far fa-building"></i>&nbsp;&nbsp;&nbsp;{{ $about->title }}
                                            </p>
                                            <p class="text-md-start">{{ $about->description }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <p class="text-muted">last Update {{ $about->updated_at }}</p>
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
