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
                        <form action="{{route('product.update', $item->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name" value="{{$item->name}}" placeholder="Enter name">
                                </div>
                                <div class="form-group">
                                    <label for="categories">Categories</label>
                                    <select name="categories_id" class="form-control">
                                        <option value="{{$item->categories_id}}">Don't Change it</option>
                                        @foreach ($category as $items )
                                        <option value="{{$items->id}}">{{$items->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="place">Place</label>
                                    <input type="text" class="form-control" name="place" value="{{$item->place}}" placeholder="Enter Place">
                                </div>
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="number" class="form-control" id="price" name="price" value="{{$item->price}}">
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea name="description" id="editor" class="form-control" cols="30" rows="10" value="{{$item->description}}">{{$item->description}}</textarea>
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

@push('addon-script')
<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor');
</script>
@endpush