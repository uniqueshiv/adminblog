@extends('user/app')


@section('bg-img',asset('user/img/post-sample-image.jpg'))

@section('title',$post->title)
@section('sub-title',$post->subtitle)

@section('main-content')

<article>
  <div class="container">
    <div class="row">

      <div class="col-lg-8 col-md-10 mx-auto1">
        <small>created at  {{$post->created_at->diffForHumans()}}</small>
        <small class="pull-right" style="float:right;">
          @foreach($post->categories as $cat)
              {{$cat->name}}
            @endforeach
          </small>
          {!! htmlspecialchars_decode($post->body) !!}

          <h5>Tags here:</h5>
          <ul class="pull-right" style="display:flex;list-style:none;margin-right:10px;">
            @foreach($post->tags as $tag)
              <li >{{$tag->name}}</li>
              @endforeach
            </ul>
    </div>
    </div>
  </div>
</article>

@endsection
