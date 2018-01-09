@extends('admin.layouts.app')

@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Edit Category
      <small>Optional description</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
      <li class="active">Here</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content container-fluid">

    <!--------------------------
      | Your Page Content Here |
      -------------------------->
      <div class="box">
<!-- {{$categories}} -->
             <form role="form" action="{{route('category.update',$categories->id)}}" method="post">
            {{ csrf_field()}}
            {{method_field('PUT')}}
              <div class="box-body">
                <div class="col-md-5">

                  @include('includes.messages')
                <div class="form-group">
                  <label for="tagname">Category Name</label>
                  <input type="text" class="form-control" id="tagname" name="name" value="{{$categories->name}}" placeholder="Enter tag name!">
                </div>
                <div class="form-group">
                  <label for="slug">Category Slug</label>
                  <input type="text" class="form-control" id="slug" name="slug" value="{{$categories->slug}}" placeholder="Enter tag Slug">
                </div>
              </div>

              <div class="col-md-12 ">
                  <a href="{{route('category.index')}}" class="btn btn-warning pull-right">Back</a>
                <button type="submit" class="btn btn-primary pull-right">Update</button>

              </div>
              </div>


            </form>
          </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection
