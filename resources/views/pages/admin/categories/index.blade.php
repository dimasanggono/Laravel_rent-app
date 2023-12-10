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
                    <li class="breadcrumb-item"><a href="#">Categories</a></li>
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
                        <h2 class="card-title text-xl">Data Categories</h2>
                        <div class="card-tools">
                            <a href="{{route('category.create')}}" class="btn btn-md btn-primary"><i class="fas fa-plus"> Add</i>
                            </a>
                        </div>
                        <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr class="text-center">
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($data as $item )
                                <tr class="text-center">
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>
                                        <a href="{{route('category.edit', $item->id)}}" class="btn btn-md btn-warning"><i class="fa fa-pencil-alt" aria-hidden="true"></i></a>
                                        <form action="{{route('category.destroy', $item->id)}}" method="post" class="d-inline">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-md btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr class="text-center">
                                    <td colspan="4">Data Not Found</td>
                                </tr>
                                @endforelse

                            </tbody>
                        </table>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
    </div>
    <!-- /.card-body -->
</div>


@endsection

@push('addon-styles')
<!-- DataTables -->
<link rel="stylesheet" href="{{url('template/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{url('template/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{url('template/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@push('addon-script')
<!-- DataTables  & Plugins -->
<script src="{{url('template/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{url('template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{url('template/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{url('template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{url('template/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{url('template/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{url('template/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{url('template/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{url('template/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{url('template/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{url('template/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{url('template/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

<script>
    $(function() {
        $("#example1").DataTable({
            "paging": true,
            "responsive": true,
            "lengthChange": false,
            "ordering": true,
            "searching": true,
            "autoWidth": false,
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
</script>
@endpush