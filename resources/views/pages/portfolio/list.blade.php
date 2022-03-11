@extends('layouts.app')

@section('title', 'List Portfolio')

@section('dashboard')
    <section class="content">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="card-title">@yield('title')</h3>
                        </div>
                        <div class="col-sm-6">
                            <a class="btn btn-sm btn-primary float-right" href="{{ route('create.portfolio') }}"><i
                                    class="fas fa-plus"></i>
                                Add Portfolio</a>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    @foreach ($portfolio as $item)
                        <div class="col-12 mt-2 mb-2">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <h3 class="card-title">
                                                <i class="fas fa-building"></i>
                                                Title <strong>{{ $item->title }}</strong>&nbsp;&nbsp;&nbsp;
                                            </h3>
                                        </div>
                                        <div class="col-sm-4">
                                            <h3 class="card-title">
                                                <i class="fas fa-user-friends"></i>
                                                Client <strong>{{ $item->client }}</strong>&nbsp;&nbsp;&nbsp;
                                            </h3>
                                        </div>
                                        <div class="col-sm-4">
                                            <h3 class="card-title">
                                                <i class="fas fa-calendar-alt"></i>
                                                Client
                                                <strong>{{ $item->project_date }}</strong>&nbsp;&nbsp;&nbsp;
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <dl class="row">
                                        <div class="row row-cols-1 row-cols-md-3 g-4">
                                            <div class="col">
                                                <h5 class="text-center">Image Thumbnail</h5>
                                                <div class="card">
                                                    <img src="{{ $item->image }}" class="card-img-top">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <h5 class="text-center">Image Detail 1</h5>
                                                <div class="card">
                                                    <img src="{{ $item->image_2 }}" class="card-img-top">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <h5 class="text-center">Image Detail 2</h5>
                                                <div class="card">
                                                    <img src="{{ $item->image_3 }}" class="card-img-top">
                                                </div>
                                            </div>
                                        </div>
                                        <dt class="col-sm-4">Description</dt>
                                        <dd class="col-sm-8">{{ $item->description }}
                                        </dd>
                                    </dl>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h3 class="card-title">
                                                <i class="fas fa-clock"></i>
                                                last Update
                                                <strong>{{ $item->updated_at }}</strong>
                                            </h3>
                                        </div>
                                        <div class="col-sm-6">
                                            <form action="{{ route('destroy.portfolio', $item) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <div class="project-actions text-right">
                                                    <a href="{{ route('edit.portfolio', $item) }}"
                                                        class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> Edit
                                                    </a>
                                                    <button type="submit" class="btn btn-sm btn-danger"><i
                                                            class="fas fa-trash"></i> Delete</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card -->
                        </div>
                    @endforeach
                    <div class="col-12 mt-2 mb-2">
                        {{ $portfolio->links('pagination::bootstrap-4') }}
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.container-fluid -->
    </section>
@endsection
