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
      <form role="form" action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
      <div class="col-md-6">
        {{ csrf_field()}}
        @include('includes.messages')
        <div class="form-group">
          <label>Post Title</label>
          <input type="text" class="form-control" name="title" placeholder="Enter The Title...">
        </div>

        <div class="form-group">
          <label>Post Sub Title</label>
          <input type="text" class="form-control" name="subtitle" placeholder="Enter Sub Title...">
        </div>

        <div class="form-group">
          <label>Post Slug</label>
          <input type="text" class="form-control" name="slug" placeholder="Post slug">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="exampleInputFile">Feature Image</label>
          <input type="file" id="exampleInputFile" name="image">
        </div>

        <div class="checkbox">
          <label>
            <input type="checkbox" value="1"  name="status"> Publish
          </label>
        </div>

        <div class="form-group">
          <label>Category</label>
          <select class="form-control select2" multiple="multiple" name="categories[]" data-placeholder="Select a State"
                  style="width: 100%;">
                @if(count($categories)>0)
                  @foreach($categories as $cat)
                  <option value="{{$cat->id}}">{{$cat->name}}</option>
                  @endforeach
                @endif

          </select>
        </div>
        <div class="form-group">
          <label>Tags</label>
          <select class="form-control select2" name="tags[]" multiple="multiple" data-placeholder="Select a State"
                  style="width: 100%;">
                  @if(count($tags)>0)
                    @foreach($tags as $tag)
                    <option value="{{$tag->id}}">{{$tag->name}}</option>
                    @endforeach
                  @endif
          </select>
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

          </div>
        </div>
        <!-- /.box -->

        <div class="form-group">
          <button type="submit" class="btn btn-primary pull-right">Submit</button>
          <a href="{{route('post.index')}}" class="btn btn-warning">Back</a>
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

@push('css')
<!-- Select2 -->
<link rel="stylesheet" href="{{asset('admin/bower_components/select2/dist/css/select2.min.css')}}">

@endpush
@push('js')

<script src="//cdn.ckeditor.com/4.8.0/full/ckeditor.js"></script>
<script src="{{asset('admin/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
<script>
  $(function () {
   $('.select2').select2();
    CKEDITOR.replace('editor1')
  })
</script>
@endpush
