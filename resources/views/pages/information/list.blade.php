@extends('layouts.app')

@section('title', 'Information Company')

@section('style')

@endsection

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
                    @foreach ($info_company as $info)
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col">
                                        <h5>@yield('title')</h5>
                                    </div>
                                    <div class="col">
                                        <a href="{{ route('edit.company.infmation', $info) }}"
                                            class="btn btn-sm btn-success float-right"><i class="far fa-edit"></i>
                                            Edit Company Information</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row g-0">
                                    <div class="col-sm-4">
                                        <div class="position-relative">
                                            <img src="{{ $info->company_logo }}" alt="Photo 1" class="img-fluid">
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
                                                    class="far fa-building"></i>&nbsp;&nbsp;&nbsp;{{ $info->company_name }}
                                            </p>

                                            <p class="text-md-start"><i class="fas fa-envelope"></i>&nbsp;&nbsp;&nbsp;
                                                <a class="btn btn-outline-secondary" target="_blank"
                                                    href="mailto:{{ $info->company_email }}">{{ $info->company_email }}</a>
                                            </p>

                                            <p class="text-md-start"><i
                                                    class="fas fa-mobile-alt"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <a class="btn btn-outline-secondary" target="_blank"
                                                    href="https://api.whatsapp.com/send?phone={{ $info->company_number_phone }}&text=Hallo">{{ $info->company_number_phone }}</a>
                                            </p>
                                            <p class="text-md-start"><i
                                                    class="fab fa-facebook-square"></i>&nbsp;&nbsp;&nbsp;
                                                <a class="btn btn-outline-secondary" target="_blank"
                                                    href="{{ $info->company_facebook }}">{{ $info->company_facebook }}</a>
                                            </p>

                                            <p class="text-md-start"><i
                                                    class="fab fa-instagram-square"></i>&nbsp;&nbsp;&nbsp;
                                                <a class="btn btn-outline-secondary" target="_blank"
                                                    href="{{ $info->company_instagram }}">{{ $info->company_instagram }}</a>
                                            </p>

                                            <p class="text-md-start"><i class="fab fa-linkedin"></i>&nbsp;&nbsp;&nbsp;
                                                <a class="btn btn-outline-secondary" target="_blank"
                                                    href="{{ $info->company_linkedin }}">{{ $info->company_linkedin }}</a>
                                            </p>
                                            <p class="text-sm-start"><i class="fas fa-map-marked-alt"></i>
                                                <button
                                                    class="btn btn-outline-secondary">{{ $info->company_address }}</button>
                                            </p>

                                            <p class="text-sm-start"><i class="fas fa-book"></i>
                                            </p>
                                            <div class="card card-success">
                                                <div class="card-body">
                                                    <embed src="{{ $info->company_pdf }}" width="600px" height="200px" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <p class="text-muted">last Update {{ $info->updated_at }}</p>
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

@section('script')

@endsection
