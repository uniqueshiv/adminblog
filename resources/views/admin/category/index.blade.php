@extends('admin.layouts.app')
@push('css')
<link rel="stylesheet" href="{{asset('admin/dist/css/custom.css')}}">
@endpush
@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Category
      <small>Optional description</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
      <li class="active">Here</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content container-fluid">

    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header with-border">
            <a href="{{route('category.create')}}" class="btn btn-primary pull-right1">Add New Category</a>
          </div>
          <div class="box-body">
            <table id="tags" class="table table-bordered table-hover">
              <thead>
                  <tr>
                    <th>S.NO</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Date</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
              </thead>
              <tbody>
              <tr>
                @foreach($cats as $cat)
                <td>{{$loop->index+1}} </td>
                <td>{{$cat->name}}</td>
                <td>{{$cat->slug}}</td>
                <td>{{$cat->created_at}}</td>
                <td><a href="" class="float-left"><span class="label label-success">Edit</span></a></td>
                <td><a href=""><span class="label label-danger"> delete</span></a></td>

              </tr>
              @endforeach
              </tbody>

            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
</div>

</div>


  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->


@endsection
@push('js')
<!-- DataTables -->
<script src="{{asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script type="text/javascript">
$(function () {
  //$('#tags').DataTable();
  $('#tags').DataTable({
    'paging'      : true,
    'lengthChange': true,
    'searching'   : true,
    'ordering'    : true,
    'info'        : true,
    'autoWidth'   : true
  })
})
</script>
@endpush
