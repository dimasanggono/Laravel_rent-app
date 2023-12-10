@extends('layouts.admin')


@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Product</a></li>
                    <li class="breadcrumb-item active"></li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-outline-primary">
                    <div class="card-header">
                        <h2 class="card-title text-xl">Edit Product</h2>
                        <div class="card-tools">
                            <a href="{{route('product.index')}}" class="btn btn-md btn-outline-primary"><i class="fas fa-back"> BACK</i>
                            </a>
                        </div>
                        <!-- /.card-tools -->
                    </div>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error )
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter name">
                                </div>
                                <div class="form-group">
                                    <label for="categories">Categories</label>
                                    <select name="categories_id" class="form-control">
                                        <option value="">-- Select Categories --</option>
                                        @foreach ($category as $item )
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="place">Place</label>
                                    <input type="text" class="form-control" name="place" placeholder="Enter Place">
                                </div>
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="number" class="form-control" id="price" name="price">
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea id="summernote" name="description" class="form-control" rows="10">
              </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input type="file" class="form-control" name="image">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <!-- /.card-body -->
                        </form>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
            <!-- /.content -->
        </div>
    </div>
    <!-- /.card-body -->
</div>
@endsection

@push('addon-styles')
<!-- summernote -->
<link rel="stylesheet" href="{{url('template/plugins/summernote/summernote-bs4.min.css')}}">
@endpush

@push('addon-script')
<!-- Summernote -->
<script src="{{url('template/plugins/summernote/summernote-bs4.min.js')}}"></script>

<script>
    $(function() {
        // Summernote
        $('#summernote').summernote()
    })
</script>
@endpush