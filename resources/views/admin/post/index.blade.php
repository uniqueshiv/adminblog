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
      Tags
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
            <a href="{{route('post.create')}}" class="btn btn-primary pull-right1">Add New Post</a>
          </div>
          <div class="box-body">
            <table id="tags" class="table table-bordered table-hover">
              <thead>
                  <tr>
                    <th>S.NO</th>
                    <th>Title</th>
                    <th>Slug</th>
                    <th>body</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
              </thead>
              <tbody>
              @foreach($posts as $post)
              <tr>
                <td>{{$loop->index+1}} </td>
                <td>{{$post->title}}</td>
                <td>{{$post->slug}}</td>
                <td>{{$post->body}}</td>
                <td>
                <form id="deleteform-{{$post->id}}" method="post" action="{{route('post.destroy',$post->id)}}">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                </form>
                <a onclick="
                if(confirm('Are you Sure, you want delete this')){
                  event.preventDefault();
                  document.getElementById('deleteform-{{$post->id}}').submit();
                }else{
                  event.preventDefault();
                }" href="{{route('post.index')}}" class="float-left btn btn-danger"><i class="fa fa-trash-o"></i></a></td>
                <td><a href="{{route('post.edit',$post->id)}}" class="btn btn-primary"><i class="fa fa fa-pencil"></i></a></td>

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
