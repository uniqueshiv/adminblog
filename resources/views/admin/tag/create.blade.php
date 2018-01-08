@extends('admin.layouts.app')

@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Create New Tag
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

             <form role="form" action="{{route('tag.store')}}" method="post">
            {{ csrf_field()}}

              <div class="box-body">
                <div class="col-md-5">

                  @include('includes.messages')
                <div class="form-group">
                  <label for="tagname">Tag Name</label>
                  <input type="text" class="form-control" id="tagname" name="name" placeholder="Enter tag name!">
                </div>
                <div class="form-group">
                  <label for="slug">Slug</label>
                  <input type="text" class="form-control" id="slug" name="slug" placeholder="Enter tag Slug">
                </div>
              </div>

              <div class="col-md-12 ">
                <button type="submit" class="btn btn-primary pull-right">Submit</button>
                <a href="{{route('tag.index')}}" style="margin-right:10px;" class="btn btn-warning pull-right"> Back</a>
              </div>
              </div>


            </form>
          </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection
