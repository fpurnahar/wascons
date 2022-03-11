@extends('layouts.app')

@section('title', 'Information Company')

@section('dashboard')
    <section class="content">
        <div class="container-fluid">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row">
                <!-- left column -->
                <div class="col">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit @yield('title')</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('update.company.infmation', $edit_information) }}"
                            enctype="multipart/form-data" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Company Name</label>
                                            <input type="text" class="form-control" name="company_name" id="company_name"
                                                placeholder="Enter Company Name..."
                                                value="{{ $edit_information->company_name }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Company Number Phone</label>
                                            <input type="text" class="form-control" name="company_number_phone"
                                                id="company_number_phone" placeholder="Enter Company Number Phone..."
                                                value="{{ $edit_information->company_number_phone }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Company Facebook</label>
                                            <input type="text" class="form-control" name="company_facebook"
                                                id="company_facebook" placeholder="Enter Company Facebook..."
                                                value="{{ $edit_information->company_facebook }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Company Name</label>
                                            <input type="text" class="form-control" name="company_instagram"
                                                id="company_intagram" placeholder="Enter Company Instagram..."
                                                value="{{ $edit_information->company_instagram }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Company Name</label>
                                            <input type="text" class="form-control" name="company_linkedin"
                                                id="company_linkedin" placeholder="Enter Company Linkedin..."
                                                value="{{ $edit_information->company_linkedin }}" required>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputFile">File input</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="company_logo"
                                                        id="customFile" accept="image/*" onchange="loadFile(event)"
                                                        required />
                                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                                </div>
                                            </div>
                                            <div class="card m-1">
                                                <img class="img-fluid" id="output"
                                                    src="{{ $edit_information->company_logo }}" alt="your image" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Company Address</label>
                                            <textarea type="text" class="form-control" name="company_address"
                                                id="company_address" placeholder="Enter Company Name..."
                                                required>{{ $edit_information->company_address }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <a href="{{ route('list.company.infmation') }}" class="btn btn-success">Back</a>
                                <button type="submit" class="btn btn-primary float-right">Update</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
@endsection

@section('script')
    <script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <script>
        $(function() {
            bsCustomFileInput.init();
        });
        var loadFile = function(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('output');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        };
    </script>
@endsection
