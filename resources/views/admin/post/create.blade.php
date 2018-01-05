@extends('admin/layouts/app')

@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Add New Post
      <!-- <small>Optional description</small> -->
    </h1>
    <!-- <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
      <li class="active">Here</li>
    </ol> -->
  </section>

  <!-- Main content -->
  <section class="content container-fluid">
    <div class="row">
      <form>
      <div class="col-md-6">

        <div class="form-group">
          <label>Post Title</label>
          <input type="text" class="form-control" name="title" placeholder="Enter The Title...">
        </div>

        <div class="form-group">
          <label>Post Sub Title</label>
          <input type="text" class="form-control" name="sub-title" placeholder="Enter Sub Title...">
        </div>

        <div class="form-group">
          <label>Post Slug</label>
          <input type="text" class="form-control" name="post-slug" placeholder="Post slug">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="exampleInputFile">Feature Image</label>
          <input type="file" id="exampleInputFile" name="file">
        </div>

        <div class="checkbox">
          <label>
            <input type="checkbox" name="status"> Publish
          </label>
        </div>
      </div>
      <div class="col-md-12">
        <div class="box box-info">
          <div class="box-header">
            <h3 class="box-title">Body
              <!-- <small>Advanced and full of features</small> -->
            </h3>
            <!-- tools box -->
            <div class="pull-right box-tools">
              <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                      title="Collapse">
                <i class="fa fa-minus"></i></button>

            </div>
            <!-- /. tools -->
          </div>
          <!-- /.box-header -->
          <div class="box-body pad">
              <textarea id="editor1" name="body" rows="10" cols="100">
              </textarea>
            </form>
          </div>
        </div>
        <!-- /.box -->

        <div class="form-group">
          <button type="submit" class="btn btn-primary pull-right">Submit</button>
        </div>
      </form>
      </div>
      <!-- /.col-->
    </div>
    <!-- ./row -->


  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

@push('js')

<script src="{{asset('admin//bower_components/ckeditor/ckeditor.js')}}"></script><script>
  $(function () {
    CKEDITOR.replace('editor1')
  })
</script>
@endpush
