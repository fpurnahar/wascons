@extends('layouts.app')

@section('title', 'Insert Portfolio')

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
                            <h3 class="card-title">Edit Portfolio</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('update.portfolio', $portfolio) }}" enctype="multipart/form-data"
                            method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" class="form-control" name="title"
                                                value="{{ $portfolio->title }}" placeholder="Enter Title..." required>
                                        </div>
                                        <div class="form-group">
                                            <label>Name Cliet</label>
                                            <input type="text" class="form-control" name="client"
                                                value="{{ $portfolio->client }}" placeholder="PT Example... " required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Category</label>
                                            <input type="text" class="form-control" name="category"
                                                value="{{ $portfolio->category }}" placeholder="Pembagunan Rumah... "
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label>Project Date</label>
                                            <input type="date" name="project_date" class="form-control"
                                                value="{{ $portfolio->project_date }}" placeholder="Description..."
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea type="text" name="description" class="form-control"
                                                placeholder="Description..."
                                                required>{{ $portfolio->description }}</textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="exampleInputFile">Input Image Thumbnails</label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="image"
                                                            onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])"
                                                            required>
                                                        <label class="custom-file-label" for="customFile">Choose
                                                            file</label>
                                                    </div>
                                                </div>
                                                <div class="card mt-2">
                                                    <img class="img-fluid" id="image" src="{{ $portfolio->image }}"
                                                        alt="your image" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="exampleInputFile">Image Detail 1</label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="image_2"
                                                            onchange="document.getElementById('image_2').src = window.URL.createObjectURL(this.files[0])"
                                                            required>
                                                        <label class="custom-file-label" for="customFile">Choose
                                                            file</label>
                                                    </div>
                                                </div>
                                                <div class="card mt-2">
                                                    <img class="img-fluid" id="image_2"
                                                        src="{{ $portfolio->image_2 }}" alt="your image" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="exampleInputFile">Image Detail 2</label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="image_3"
                                                            onchange="document.getElementById('image_3').src = window.URL.createObjectURL(this.files[0])"
                                                            required>
                                                        <label class="custom-file-label" for="customFile">Choose
                                                            file</label>
                                                    </div>
                                                </div>
                                                <div class="card mt-2">
                                                    <img class="img-fluid" id="image_3"
                                                        src="{{ $portfolio->image_3 }}" alt="your image" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <a href="{{ route('list.portfolio') }}" class="btn btn-success">Back</a>
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
@endsection
